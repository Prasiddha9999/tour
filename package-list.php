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
      Administrator /
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
          <tr>
            <th>S.N</th>
            <th>Booking ID</th>
            <th>Pacakge Name</th>
            <th>Location</th>
            <th>Price</th>
            <th>Creation Date</th>
            <th>Action</th>
            <th>Action</th>
          </tr>
          <tr>
            <td>1</td>
            <td>189</td>
            <td>Trip 1</td>
            <td>kohalpur</td>
            <td>Kathmnadu</td>
            <td>27rd April</td>
            <td><a href="updatepackage.php">View Details</a></td>
            <th><button type="button">Delete</button></th>
          </tr>
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
      .pacakge-container{
        margin-left:33px;
      }
    

.main{
  margin-left:285px;
  overflow:hidden;
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

    </style>
</body>


</html>