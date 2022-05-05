<?php
include('db_conn.php');
/* Getting the user id from the session. */
$uid = $_SESSION['UID'];

 /* Used to display the current time. */
$time = time() + 10;
/* Updating the last_login column in the user table with the current time. */
$res = mysqli_query($db,"UPDATE signup SET last_login ='$time' WHERE id = '$uid'");
?>