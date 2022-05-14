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
  <link rel="stylesheet" href="seperates.css" type="text/css"/>
  <link rel="stylesheet" href="createandupdate.css" type="text/css"/>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/cupertino/jquery-ui.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
	<div id="mySidenav" class="sidenav">
	<p class="logo"><span>NepTravels</p>
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
      Admin 
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
                  <label for="focusedinput" class="tit">Starting Date</label>
                    <div class="input-text">
                      <input type="text" class="form-text" name="package_time_start" id="date_picker1" size= 10 placeholder="Calander1" required>
                    </div>
                </div>

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
      
      <script>
$(document).ready(function() {
///////
var startDate;
var endDate;
 $( "#date_picker1" ).datepicker({
dateFormat: 'dd-mm-yy'
})
///////
///////
 $( "#date_picker2" ).datepicker({
dateFormat: 'dd-mm-yy'
});
///////
/* A jquery function that is called when the datepicker1 is changed. */
$('#date_picker1').change(function() {
/* Getting the date from the datepicker. */
startDate = $(this).datepicker('getDate');
$("#date_picker2").datepicker("option", "minDate", startDate );
})

///////
$('#date_picker2').change(function() {
endDate = $(this).datepicker('getDate');
$("#date_picker1").datepicker("option", "maxDate", endDate );
})
////////////////
})
</script>


                <div class="form-group">
                  <label for="focusedinput" class="tit">Ending Date</label>
                    <div class="input-text">
                      <input type="text" class="form-text" name="package_time_end" id="date_picker2" size=10 placeholder="Calander1" required>
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
</body>


</html>