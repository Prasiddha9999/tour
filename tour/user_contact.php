<?php
error_reporting(0);
require('db_conn.php');

// REGISTER USER
if (isset($_POST['submit_info'])) {
    // receive all input values from the form
    $id = mysqli_real_escape_string($db, $_POST['user_id']);
    $email = mysqli_real_escape_string($db, $_POST['user_emailaddress']);
    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $country = mysqli_real_escape_string($db, $_POST['country']);
    $subject = mysqli_real_escape_string($db, $_POST['subject']);
    $number = mysqli_real_escape_string($db, $_POST['mob_num']);
  

   /* Checking if there are no errors in the form. If there are no errors, it will insert the data into
   the database. */
    if (count($errors) == 0) {

/* This is checking if the user has filled out all the forms. If the user has not filled out all the
forms, it will alert the user to fill out all the forms. */
      if(empty($firstname) || empty($lastname) || empty($country)|| empty($subject)|| empty($number)){
        echo '<script type = "text/javascript"> alert("Please fill out all the forms") </script>';
      }
      
      else{
        $query = "INSERT INTO user_contact (fname, lname, country,subject,userid,useremail,mob_num) 
                  VALUES('$firstname', '$lastname', '$country', '$subject', '$id', '$email', '$number')";
        mysqli_query($db, $query);

        
        echo '<script type = "text/javascript"> alert("User enquiry has been updated") </script>';
        }
      }

  }

?>