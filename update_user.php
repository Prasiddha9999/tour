
<?php
// error_reporting(0);
include('db_conn.php');

// $currentUser = $_SESSION['email'];
// $sql = "SELECT * FROM signup WHERE username = '$currentUser'";
// $gotResult = mysqli_query($db,$sql);
// if($gotResult){
//   if(mysqli_num_rows($gotResult)>0){
//     while($row = mysqli_fetch_array($gotResult)){
//     }
//   }
// }


if(isset($_POST['user_update'])){


 $id = $_POST['id'];
 $name = $_POST['fullname'];
 $address = $_POST['address'];
 $number = $_POST['num'];
 $email = $_POST['email'];

 /* This is the query that is updating the user information. */
 $query = "UPDATE `signup` SET username = '$name', email = '$email', phonenumber = '$number', address = '$address' where id= '$id' ";
 $query_run = mysqli_query($db, $query);

if($query_run){
    /* A javascript alert that is being echoed out to the user. */
    echo '<script type = "text/javascript"> alert("User Information updated") </script>';

  }
else{
    echo '<script type = "text/javascript"> alert("User Information not updated") </script>';


  }
 }
                            ?>