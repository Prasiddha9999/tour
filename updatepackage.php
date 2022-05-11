<?php 
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
  <link rel="stylesheet" href="createandupdate.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
	<div id="mySidenav" class="sidenav">
	<p class="logo"><span>Nep</span>Travel</p>
  <a href="home.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
  <a href="package.php"class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Create Packages</a>
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
                <h3>Update Package</h3>
                <?php
                          $currentUser = $_GET['updateid'];
                          $sql = "SELECT * FROM create_package WHERE id = '$currentUser'";
                          $gotResult = mysqli_query($db,$sql);
                          if($gotResult){
                              if(mysqli_num_rows($gotResult)>0){
                                  while($row = mysqli_fetch_array($gotResult)){
                                    
                                ?>
                <div class="form-group">
                  <label for="focusedinput" class="tit">Booking Id</label>
                    <div class="input-text">
                    <input type="text" id="id" name="p_id" placeholder="Booking id" value="<?php echo $row['id']?>" readonly>
                    </div>
                </div>

                <div class="form-group">
                  <label for="focusedinput" class="tit">Package Name</label>
                    <div class="input-text">
                      <input type="text" class="form-text" name="p_name" id="packagename" placeholder="Create Package" value="<?php echo $row['pac_name'] ?>">
                    </div>
                </div>

                <div class="form-group">
                  <label for="focusedinput" class="tit">Package Type</label>
                    <div class="input-text">
                      <input type="text" class="form-text" name="p_type" id="packagetype" placeholder=" Package Type" value="<?php echo $row['pac_type'] ?>">
                    </div>
                </div>
      
                <div class="form-group">
                  <label for="focusedinput" class="tit">Package Location</label>
                    <div class="input-text">
                      <input type="text" class="form-text" name="p_location" id="packagelocation" placeholder=" Package Location" value="<?php echo $row['pac_location'] ?>">
                    </div>
                </div>
      
                <div class="form-group">
                  <label for="focusedinput" class="tit">Package Price in NPR</label>
                    <div class="input-text">
                      <input type="text" class="form-text" name="p_price" id="packageprice" placeholder=" Package Price in NPR" value="<?php echo $row['pac_price'] ?>">
                    </div>
                </div>
      
                <div class="form-group">
                  <label for="focusedinput" class="tit">Package Features</label>
                    <div class="input-text">
                      <input type="text" class="form-text" name="p_features" id="packagefeatures" placeholder="Package Features" value="<?php echo $row['pac_features'] ?>">
                    </div>
                </div>		
      
      
                <div class="form-group">
                  <label for="focusedinput" class="tit">Package Details</label>
                    <div class="input-text">
                      <textarea class="form-text" rows="5" cols="50" name="p_details" id="packagedetails" placeholder="Package Details" required><?php echo $row['pac_details'] ?></textarea> 
                    </div>
                </div>		
      
                <div class="form-group">
                  <label for="focusedinput" class="tit">Package Image</label>
                    <div class="imgs">
                      <input type="file" name="p_image" id="packageimage" required>
                    </div>
                </div>	
      
                <div class="row">
                  <div class="button">
                    <button type="submit" name="p_submit" class="btn-primary btn">Update</button>
                  </div>
                </div>
                <?php } } } ?>
              </form>
            </div>    
             </div>
  
</body>


</html>