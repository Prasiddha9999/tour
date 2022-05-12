<?php 
include('db_conn.php');
$db = mysqli_connect('localhost', 'root', '', 'travel_db');
$id = $_GET['newid'];

if(isset($_POST['book_package'])) {
    // receive all input values from the form
    $userID = $_SESSION['bookid'];
    $userName = $_POST['b_name'];
    $userAddress =$_POST['b_address'];
    $userNum =$_POST['b_num'];
    $userEmail =$_POST['b_email'];
    $userPeople =$_POST['b_people'];
    $userTime =$_POST['time_start'];
    $userComment =$_POST['b_comment'];
    // $query = "UPDATE booked_pac_info SET fullname='$userName',fullname='$userName',address='$$userAddress',mobilenumber='$userNum',emailaddress='$userEmail',totalpeople='$userPeople',bookingid='$userID',startingdate='$userTime',comment='$userComment', ";

    $query="INSERT INTO booked_pac_info (fullname,address,mobilenumber,emailaddress,totalpeople,bookingid,startingdate,comment) VALUES('$userName', '$userAddress', '$userNum', '$userEmail','$userPeople','$userID','$userTime,'$userComment')";
    // $query = "SELECT * FROM booked_pac_info wHERE id="$id""
    $query_run = mysqli_query($db, $query);
    echo $query_run;
    

    if($query_run){
        echo "successful";
    // $_SESSION['book_status'] = "Your package has been booked";
    // header('Location: user/mydetail.php');

    }
    else{
        echo "unsuccessful";
        // $_SESSION['book_status'] = "Your package has not been booked";
        // header('Location: user/mydetail.php');
    }
}


?>