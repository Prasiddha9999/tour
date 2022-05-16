<?php
include("db_conn.php");
$id= $_GET['d_id'];
$status= $_GET['status'];

$query ="UPDATE signup SET status='$status' where id='$id'";
mysqli_query($db,$query);

header('location:manageusers.php');

?>