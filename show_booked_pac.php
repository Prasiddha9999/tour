<?php 
include('db_conn.php');

$uid=$_SESSION['currenti'];
$bid=$_SESSION['currentp'];
if(isset($_POST['book_package'])) {
    // receive all input values from the form
    $userName = $_POST['b_name'];
    $userAddress =$_POST['b_address'];
    $userNum =$_POST['b_num'];
    $userEmail =$_POST['b_email'];
    $userPeople =$_POST['b_people'];
    $userTime =$_POST['time_start'];
    $userComment =$_POST['b_comment'];

    if (count($errors) == 0) {
        if(empty($userName) || empty($userAddress) || empty($userNum)|| empty($userEmail)|| empty($userPeople)|| empty($userTime)|| empty($userTime)|| empty($userComment)){
            echo '<script type = "text/javascript"> alert("Please fill out all the forms") </script>';
          }
        else{
            $query="INSERT INTO booked_pac_info (fullname,address,mobilenumber,emailaddress,totalpeople,bookingid,startingdate,comment,userid) VALUES('$userName', '$userAddress', '$userNum', '$userEmail','$userPeople','$bid','$userTime,'$userComment','$uid')";
            mysqli_query($db, $query);
            header("location:tourpackage.php");
        }

}

}


?>