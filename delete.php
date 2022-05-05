<?php

require('db_conn.php');

if(isset($_POST['delete_pac'])){
    $id = mysqli_real_escape_string($db,$_POST['pac_id']);

    $query= "DELETE FROM create_package WHERE id = '$id'";
    $query_run = mysqli_query($db,$query);
    if($query_run){
        echo '<script type = "text/javascript"> alert("Package has been successfully deleted") </script>';
        header("location:package-list.php");

    }
    else{
        echo '<script type = "text/javascript"> alert("Package has not been deleted") </script>';

    }
}
?>