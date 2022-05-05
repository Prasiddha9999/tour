
<?php

include('db_conn.php');
include('error.php');




/* This is checking if the user has clicked the submit button. */
if(isset($_POST['change_pass'])){
 $eml = $_POST['userEmail'];
 $old_pass = $_POST['o_pwd'];
 $con_pass = $_POST['c_pwd'];

 /* This is checking if the user has clicked the submit button. */
 if (empty($eml)) {
  array_push($errors, "Email is required");
}

/* This is checking if there are any errors in the form. */
if (count($errors) == 0) {


 $user_check_query = "SELECT password,email FROM signup WHERE password='$old_pass' OR email='$eml' LIMIT 1";
 
 $result = mysqli_query($db, $user_check_query);
 $user = mysqli_fetch_assoc($result);

/* This is checking if the information exists in the database. */
 if ($user) { 
  if ($user['email'] !== $eml or $user['password'] !== $old_pass) {
    echo "<script> alert ('emaill or password didnot match ')</script>";
    
  }
  else{
    $query = "UPDATE signup SET password = '$con_pass' where password= '$old_pass' AND email='$eml'";
    $data = mysqli_query($db,$query);
  
    if($data){
     echo "<script> alert ('Password Updated')</script>";
   }
  
  
  }

  }
}
}



                            ?>