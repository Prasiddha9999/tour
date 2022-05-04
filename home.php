<?php
require('create_pac.php');
require('error.php');
?>

<!Doctype HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="admin.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
	<div id="mySidenav" class="sidenav">
	<p class="logo"><span>T</span>ravel</p>
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
      Administrator /
    </span>
    <span class="Logout">
      <a href="index.php">
      Logout 
    </a>
    </span>
    <div class="box">

    <div class="boxa">
    <i class="fa fa-users icons"></i>
    <p>Users</p>
    <p>.....</p>
    </div>  

    <div class="boxa">
    <i class="fa fa-list icons"></i>
    <p>Bookings</p>
    <p>.....</p>
    </div>  

    <div class="boxa">
    <i class="fa fa-list icons"></i>
    <p>Total Package</p>
    <p>.....</p>
    </div>  

    <div class="boxa">
    <i class="fa fa-user icons"></i>
    <p>Enquries</p>
    <p>.....</p>
    </div>  

    </div>
 </div>
</div>
    <style>
.main{
  margin-left:285px;
}


.header{
  background-color: rgb(8, 219, 238);
  height:100px;
  width:1150px;
  margin-left: 34px;
  margin-right: 40px;
  font-size: 35px;
  text-align: center;
  padding-top: 20px;
  color:#6e0eb8;
  border-style:groove;
  border-color: #ffffff;
}
.admins{
  margin-left: 100px; 
  color:#ffffff
}
.Logout>a{
  margin-left: 20px; 
  color:#4b50d9;
  text-decoration: underline;
}
.box{
  border-style:groove;
  border-color: #ffffff;
  margin-top:85px;
  height:550px;
  display:grid;
  column-gap: 50px;
  row-gap: 50px;
  
  grid-template-columns: auto auto auto;

}
.boxa{
  border-color: #ffffff;
  background-color: #34b55f;
  color:white;
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 30px;
  text-align: center;
}
    </style>
</body>


</html>