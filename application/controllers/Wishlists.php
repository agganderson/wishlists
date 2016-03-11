<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wishlists extends CI_Controller {

  public function __construct(){
    parent::__construct();
    // $this->output->enable_profiler();
    $this->load->model('Wishlist');
  }

  public function index(){
    $this->load->view('wishlist/index');
  }


  public function login(){
    $is_logged = $this->Wishlist->login($this->input->post());
    if($is_logged){
      $this->session->set_userdata('id', $is_logged['id']);
      $this->session->set_userdata('username', $is_logged['username']);
      redirect('Wishlists/dashboard');
    } else {
      $this->session->set_flashdata('log_errors', "<p class='errors'>Invalid login credentials</p>");
      redirect('/');
    }
  }

  public function register(){
    $is_valid = $this->Wishlist->register($this->input->post());
    if($is_valid[0] == 'valid'){
      //redirect to reviews index
      $user = $this->Wishlist->get_user_by_id($is_valid[1]);
      // var_dump($user);
      $this->session->set_userdata(array('id' => $user['id'], 
      									'username' => $user['username']
      									));
      redirect('Wishlists/dashboard');
    } 
    else {
      // set session error messages
      $this->session->set_flashdata('reg_errors', "<p class='errors'>Invalid registration credentials</p>");
      // redirect to index
      redirect('/');
      // show session error messages
    }
  }

  public function logout(){
    $this->session->set_userdata('id', null);
    $this->session->set_userdata('username', null);
    redirect('/');
  }

  public function add_to_wishlist($id){
  	$userid = $this->session->userdata('id');
  	$product = $this->Wishlist->add_product($id, $userid);
  	redirect('/Wishlists/dashboard');
  }

  public function dashboard(){
  	$id = $this->session->userdata('id');
  	$user = $this->Wishlist->get_user_by_id($id);
  	$products = $this->Wishlist->get_product_by_userid($id);
  	$other_products = $this->Wishlist->get_other_products($id);
  	$data = array(
                'user' => $user,
                'products' => $products,
                'other_products' => $other_products);
  	$this->load->view('wishlist/dashboard', $data);
  }

  public function product_page($id){
  	$user_id = $this->session->userdata('id');
  	$product = $this->Wishlist->get_product_by_id($id);
  	$other_users = $this->Wishlist->other_users($user_id);
  	$data = array(
  				'product' => $product,
  				'other_users' => $other_users);
  	$this->load->view('wishlist/product', $data);
  }

  public function create_page(){
  	$this->load->view('wishlist/create');
  }

  public function create(){
  	$product_data = $this->input->post();
  	$this->Wishlist->create_product($this->session->userdata('id'), $product_data);
  	redirect('Wishlists/dashboard');
  }

}

?>