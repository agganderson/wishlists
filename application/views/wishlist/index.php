<?php 
  session_start();
 ?>
<!DOCTYPE html>
<html lang='en'>
<head>
  <title>Wishlist</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
  </script>

</head>


<body>
  <div class="container">
    <!-- begin login form -->
    <div id="login">
      <h2>Login</h2>
      <?php   
        if($this->session->flashdata("log_errors")){
          echo $this->session->flashdata("log_errors");
        }
      ?>
      <form id="login" action="/Wishlists/login" method="POST" class="form-horizontal" role="form">
        <div class="form-group">
          <label class="control-label col-sm-2" for="username">Username:</label>
          <div class="col-sm-10">
            <input type="username" class="form-control" id="username" name="username" placeholder="Enter your username...">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="password">Password:</label>
          <div class="col-sm-10">          
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password...">
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
        </div>
      </form>
    </div>
    <!-- end login form -->
    <hr>
    <hr>
    <!-- begin register form -->
    <div id="register">
      <h2>Register</h2>
      <?php   
        if($this->session->flashdata("reg_errors")){
        echo $this->session->flashdata("reg_errors");
        }
      ?>
      <form id="register" action="/Wishlists/register" method="POST" class="form-horizontal" role="form">
        <div class="form-group">
          <label class="control-label col-sm-2" for="name">Name:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name...">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="username">Username:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username...">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Email:</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email...">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="password">Password:</label>
          <div class="col-sm-10">          
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password...">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="confirmpassword">Confirm Password:</label>
          <div class="col-sm-10">          
            <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirm your password...">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="dob">Date of Birth:</label>
          <div class="col-sm-10">
            <input type="date" name="dob" id="dob">
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
        </div>
      </form>
    </div>
    <!-- end register form -->

  </div>
</body>
</html>