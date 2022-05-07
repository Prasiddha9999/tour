<?php
require('create_pac.php');
require('error.php');
include('db_conn.php');

session_start();
$res = mysqli_query($db,"SELECT * FROM create_package");

// if(!isset($_SESSION['UID'])){
//   header('location:index.php');
//   die();
// }
?>
<!Doctype HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="admin.css" type="text/css"/>
  <link rel="stylesheet" href="seperates.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
</head>


<body>
	<div id="mySidenav" class="sidenav">
	<p class="logo"><span>Nep</span>Travels</p>
  <a href="home.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
  <a href="package.php" class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Create Packages</a>
  <a href="package-list.php"class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;<u>Manage Packages</u></a>
  <a href="manageusers.php"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Manage Users</a>
  <a href="managebooking.php"class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Manage Booking</a>
  <a href="manageenquries.php"class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;Manage Enquiries</a>
  </div>

 
<div class="main">
  <div class="header">
    <b>Tourism Management System</b>
    <span class="admins">
      Admin 
    </span>
    <span class="Logout">
      <a href="index.php">
      Logout 
    </a>
    </span>
 </div>

 <div class="pacakge-container"> 
  <h3>Manage Tour Package</h3> 
  <div class="table">
      <table style="width:96%">
      <tbody>
      <tr>
            <th>S.N</th>
            <th>Booking ID</th>
            <th>Pacakge Name</th>
            <th>Location</th>
            <th>Price</th>
            <th>Package Type</th>
            <th>Action</th>
            <th>Action</th>
          </tr>
      <?php 
      
            /* Used to display the serial number of the table. */
            $i = 1;
            /* Fetching the data from the database and displaying it in the table. */
            while($row = mysqli_fetch_assoc($res)){
              $id = $row['id'];
              $pacName = $row['pac_name'];
              $pacLocation = $row['pac_location'];
              $pacPrice = $row['pac_price'];
              $pacType = $row['pac_type'];

              echo '
       
          <tr>
            <th scope ="row">  '.$i.'  </th>
            <td>'.$id.' </td>
            <td>'.$pacName.'</td>
            <td>'.$pacLocation.'</td>
            <td>'.$pacPrice.' </td>
            <td>'.$pacType.'</td>
            <td><button class="btn btn-primary"><a href="updatepackage.php?updateid='.$id.'" class="text-light">Edit/Update</a></button></td>
            <form action ="delete.php" method="post">
              <input type="hidden" name="pac_id" value='.$id.'>
            <th><input type="submit"value="Delete" class="btn btn-danger" name ="delete_pac"></input></th>
            </form>
          </tr>
          ';

        /* Used to increment the value of  by 1. */
        $i++;

        } 
        
        ?>
          </tbody>
          </table>
          
  </div>      
    
</div>
 
  </div>

 

    <style>
   
   td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
      }
      
      tr:nth-child(even) {
        background-color: #dddddd;
      }
      h3{
        color: rgb(26, 161, 26);}
   
    </style>
</body>


</html>