<?php
include("db_conn.php");
$value=$_POST['val'];
$s_id= $_POST['id'];
$query = mysqli_query($db,"UPDATE signup SET status='$value' where id='$s_id' ");
id($query){
    $q=mysqli_query($db,"SELECT * FROM signup WHERE id = '$s_id' ");
    $data = mysqli_fetch_assoc($query);
    echo $data['$status'];
}
?>