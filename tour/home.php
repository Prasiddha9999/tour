<?php
require('db_conn.php');
require('create_pac.php');
require('error.php');
?>

<!Doctype HTML>
<html>
<head>
	<title></title>
  <link rel="stylesheet" href="seperates.css" type="text/css"/>
	<link rel="stylesheet" href="admin.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
	<div id="mySidenav" class="sidenav">
	<p class="logo"><span>Nep</span>Travel</p>
  <a href="home.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;<u>Dashboard</u></a>
  <a href="package.php" class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Create Packages</a>
  <a href="package-list.php"class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Manage Packages</a>
  <a href="manageusers.php"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Manage Users</a>
  <a href="managebooking.php"class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Manage Booking</a>
  <a href="manageenquries.php"class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;Manage Enquiries</a>
  </div>

 
<div class="main">
  <div class="header">
    <b>Tourism Management System</b>
    <span class="admins">
      Admin /
    </span>
    <span class="Logout">
      <a href="index.php">
      Logout 
    </a>
    </span>
</div>
    <div class="boxs">

    <div class="boxas">
    <i class="fa fa-users icons"></i>
    <p>Users</p>
    <?php
    /* Selecting the id from the signup table and ordering it by id. */
    $query = "SELECT id FROM signup ORDER BY id";
    $query_run = mysqli_query($db,$query);

    $row = mysqli_num_rows($query_run);
    echo '<p> '.$row.' </p>';
    ?>
    </div>  

    <div class="boxas">
    <i class="fa fa-list icons"></i>
    <p>Bookings</p>
    <?php
    /* Selecting the id from the signup table and ordering it by id. */
    $query = "SELECT id FROM bookedpac ORDER BY id";
    $query_run = mysqli_query($db,$query);

    $row = mysqli_num_rows($query_run);
    echo '<p> '.$row.' </p>';
    ?>
    </div>  

    <div class="boxas">
    <i class="fa fa-list icons"></i>
    <p>Total Package</p>
    <?php
    /* Selecting the id from the signup table and ordering it by id. */
    $query = "SELECT id FROM create_package ORDER BY id";
    $query_run = mysqli_query($db,$query);

    $row = mysqli_num_rows($query_run);
    echo '<p> '.$row.' </p>';
    ?>
    </div>  

    <div class="boxas">
    <i class="fa fa-user icons"></i>
    <p>Enquries</p>
    <?php
    /* Selecting the id from the signup table and ordering it by id. */
    $query = "SELECT id FROM user_contact ORDER BY id";
    $query_run = mysqli_query($db,$query);

    $row = mysqli_num_rows($query_run);
    echo '<p> '.$row.' </p>';
    ?>
    </div>  

    </div>
 </div>

</body>


</html>