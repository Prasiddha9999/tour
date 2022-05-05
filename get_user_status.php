<?php
include('db_conn.php');
/* Used to display the current time. */
$time = time();
$res = mysqli_query($db,"SELECT * FROM signup");

/* Used to display the serial number of the table. */
$i = 1;
$html = '';
/* Fetching the data from the database and displaying it in the table. */
while($row = mysqli_fetch_assoc($res)){
    $status = 'Offline';
    $class = "btn-danger";
    /* This is used to display the status of the user. */
    if($row['last_login']>$time){
        $status = 'Online';
        $class = "btn-success";
        }

/* Concatenating the string. */
$html.='<tr>
        <th scope ="row"> '.$i.'</th>
        <td> '.$row['username'].'  </td>
        <td> '.$row['phonenumber'].' </td>
        <td> '.$row['email'].' </td>
        <td> <button type="button" class= "btn '.$class.'">'.$status.'</button></td>  
    </tr>';
/* Used to increment the value of  by 1. */
$i++;
    }
       echo $html; 
    ?>