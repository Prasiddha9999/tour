<?php

error_reporting(0);
session_start();
// initializing variables
$username = "";
$email    = ""; 
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'travel_db');

//checking connection
if(mysqli_connect_error())
{
  echo "Cannot connect";
}

//index page setup up
if (isset($_POST['login_page'])) {

  header('location: index.php');
}
if (isset($_POST['book_page'])) {

  header('location: index.php');
}
if (isset($_POST['admin_page'])) {

  header('location: admin.php');
}
// LOGIN Admin
if (isset($_POST['admin_log'])) {
  $email = mysqli_real_escape_string($db, $_POST['admin_name']);
  $password = mysqli_real_escape_string($db, $_POST['admin_pass']);

  if (empty($email)) {
      array_push($errors, "Email is required");
  }
  if (empty($password)) {
      array_push($errors, "Password is required");
  }

     
  

/* This is the code for the login page. */
  /* Checking if there are any errors in the form. */
  if (count($errors) == 0) {
      $query ="SELECT * FROM admin_login WHERE admin_name='$email' AND admin_pass='$password'";        
      $results = mysqli_query($db, $query);
      /* This is checking if the user is logged in. */
      if (mysqli_num_rows($results) == 1) {
        header('location: home.php');

      }
      else {
           array_push($errors, "Username or password wrong");
      }
  }
}




// LOGIN USER

if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

/* This is checking if the email and password are empty. */
if(empty($email) || empty($password)){
    array_push($errors, "Error while signing user");
}

  if (count($errors) == 0) {
  	// $password = md5($password);
  	$query = "SELECT * FROM signup WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
    $_SESSION['u_status'] =false;
  	/* This is checking if the user is logged in. */
    if (mysqli_num_rows($results) == 1) {
      $rows = mysqli_fetch_object($results);
      if($rows->status == '1'){
  	  $_SESSION['user_email'] = $email;
      $_SESSION['UID']= $row['id'];
      $_SESSION['u_status']= true;
  	  header('location: user/home.php');
      die();
  	}
    else{
      echo '<script type = "text/javascript"> alert("You cannot login beacuse admin has banned you") </script>';
    }
  }
  }
  
}


// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['txt']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['pswd']);
  $phonenumber = mysqli_real_escape_string($db, $_POST['num']);
  $address = mysqli_real_escape_string($db, $_POST['address']);

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM signup WHERE username='$username' OR email='$email' LIMIT 1";

  /* This is checking if the user exists in the database. */
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username or $user['email'] === $email) {
      array_push($errors, "Username or email address already exists");
    }
  }
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
      // $password = md5($password_1);//encrypt the password before saving in the database

      $query = "INSERT INTO signup (username, email, phonenumber,address,password) 
                VALUES('$username', '$email', '$phonenumber', '$address', '$password')";
      mysqli_query($db, $query);
      header('location: index.php');
  }
}

                          


?>