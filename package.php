<?php
require('create_pac.php');
require('error.php');
include('db_conn.php');

session_start();

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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
	<div id="mySidenav" class="sidenav">
	<p class="logo"><span>Nep</span>ravel</p>
  <a href="home.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
  <a href="package.php"class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;<u>Create Packages</u></a>
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
 </div>
 

         <div class="container">
                   <div class="tab-content">
              <form action="package.php" class="forms" name="package" method="POST" enctype="multipart/form-data">
                <h3>Create Package</h3>

                <div class="form-group">
                  <label for="focusedinput" class="tit">Package Name</label>
                    <div class="input-text">
                      <input type="text" class="form-text" name="package_name" id="packagename" placeholder="Create Package" required>
                    </div>
                </div>

                <div class="form-group">
                  <label for="focusedinput" class="tit">Package Type</label>
                    <div class="input-text">
                      <input type="text" class="form-text" name="package_type" id="packagetype" placeholder=" Package Type" required>
                    </div>
                </div>
      
                <div class="form-group">
                  <label for="focusedinput" class="tit">Package Location</label>
                    <div class="input-text">
                      <input type="text" class="form-text" name="package_location" id="packagelocation" placeholder=" Package Location" required>
                    </div>
                </div>
      
                <div class="form-group">
                  <label for="focusedinput" class="tit">Package Price in NPR</label>
                    <div class="input-text">
                      <input type="text" class="form-text" name="package_price" id="packageprice" placeholder=" Package Price in NPR" required>
                    </div>
                </div>
      
                <div class="form-group">
                  <label for="focusedinput" class="tit">Package Features</label>
                    <div class="input-text">
                      <input type="text" class="form-text" name="package_features" id="packagefeatures" placeholder="Package Features" required>
                    </div>
                </div>		
      
      
                <div class="form-group">
                  <label for="focusedinput" class="tit">Package Details</label>
                    <div class="input-text">
                      <textarea class="form-text" rows="5" cols="50" name="package_details" id="packagedetails" placeholder="Package Details" required></textarea> 
                    </div>
                </div>		
      
                <div class="form-group">
                  <label for="focusedinput" class="tit">Package Image</label>
                    <div class="imgs">
                      <input type="file" name="package_image" id="packageimage" required>
                    </div>
                </div>	
      
                <div class="row">
                  <div class="button">
                    <button type="submit" name="package_submit" class="btn-primary btn">Create</button>
                  </div>
                </div>			
              </form>
            </div>    
             </div>
             <style>
      *{
  box-sizing: border-box;
}
.main{
  margin-left:285px;
  overflow:scroll;
}

.container {
 
  font-family: 'Jost';
  height: 100vh;
  background: #eee;
  
 
}
form{
  background: white;
  width:1150px;
  height: 700px; 
}
h3{
  color: #573b8a;
  text-indent: 25px;
  font-size: 2em;
}
.form-group{
  display:flex;
  flex-direction: row;
  margin-bottom: 30px;
  text-indent: 50px;
  white-space: nowrap;

}
.form-group span{
  margin-bottom: 10px;
}
.form-group label{
  width: 250px;
}
input,textarea{
  border: 1px solid #d0d2e2;
  line-height: 2;
}
button{
  width:8%;
  color: white;
  background: #573b8a;
  border: none;
  font-size: 15px;
  margin-left: 33%; 
}
a:link{
  text-decoration: none;
  color: aliceblue;
}
.form-text{
  width:800px;
}
.tab-content{
  margin-left:35px;
 
}
.header{
  background-color: rgb(8, 219, 238);
  height:125px;
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