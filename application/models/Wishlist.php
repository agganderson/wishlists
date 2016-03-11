<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wishlist extends CI_Model{

  public function get_user_by_id($id){
    $query = "SELECT * FROM users WHERE id = ?";
    $values = array($id);
    return $this->db->query($query, $values)->row_array();
  }

  public function login($post){
    $check_user = "SELECT * FROM users WHERE users.username = ?";
    $user = $this->db->query($check_user, array($post['username']))->row_array();
    if($user){
      if(md5($post['password']) == $user['password']){
        return $user;
      }
      else{
        return false;
      }
    } 
    else{
      return false;
    }
  }

  public function register($post){
    // this loads the built in CI form validation
    $this->load->library('form_validation');
    //change error delimiters
    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
    $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|matches[confirmpassword]');
    $this->form_validation->set_rules('confirmpassword', 'Password Confirmation', 'trim|required');
    $this->form_validation->set_rules('dob', 'Date of Birth', 'trim|required');
    if($this->form_validation->run()){
      $query = 'INSERT INTO users (name, username, email, dob, password, created_at, updated_at) VALUES (?,?,?,?,?, NOW(), NOW())';
      $values = array($post['name'], $post['username'], $post['email'], $post['dob'], md5($post['password']));
      // if query runs correctly
      if($this->db->query($query, $values)){
        $id = $this->db->insert_id();
        $success = array('valid', $id);
        return $success;
      } 
      else {
        return false;
      }
    } 
    else {
      return array(validation_errors());
    }
  }

  public function create_product($id, $product_data){
      $this->load->library('form_validation');
      $this->form_validation->set_rules('item', 'Item', 'trim|required|min_length[3]');
      if($this->form_validation->run() === FALSE){
        $this->session->set_flashdat("Item field cannot be empty");
        redirect('Wishlists/create_page');
      }
      else{
        $query = "INSERT INTO products (user_id, item, created_at, updated_at) VALUES (?, ?, NOW(), NOW())";
        $values = array($id, $product_data['item']);
        return $this->db->query($query, $values);
      }
  }

  public function add_product($id, $userid){
    $query = "INSERT INTO products (user_id, item, created_at, updated_at) VALUES ($userid, $id, NOW(), NOW())";
    return $this->db->query($query);
  }

  public function get_product_by_userid($id){
    $query = "SELECT * FROM products WHERE user_id = $id";
    return $this->db->query($query)->result_array();
  }

  public function get_other_products($id){
    $query = "SELECT users.name, products.item, products.created_at 
              FROM users 
              LEFT JOIN products ON users.id = products.user_id
              WHERE products.user_id NOT IN (SELECT $id FROM users) ";
    return $this->db->query($query)->result_array();
  }

  public function get_product_by_id($id){
    $query = "SELECT item FROM products WHERE id = $id";
    return $this->db->query($query)->row_array();
  }

  public function other_users($user_id){
    $query = "SELECT name FROM users WHERE users.id NOT IN (SELECT $user_id FROM users)";
    return $this->db->query($query)->result_array();
  }

}

?>
