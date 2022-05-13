<?php
session_start();
include('D:\Softwares\Xammp\htdocs\tour\db_conn.php');

session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Tourism Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="user.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/cupertino/jquery-ui.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="header">
        <ul class="top-header-left">
			<li class="home"><a href="home.php"><i class="fa fa-home"></i></a></li>
			<li class="list"><a href="myprofile.php">My Profile</a></li>
			<li class="list"><a href="changepassword.php">Change Password</a></li>
			<li class="list"><a href="mytourhistory.php">My Tour History</a></li>
		</ul>
		<ul class="top-header-right"> 
			<li class="wellcome">Welcome :</li>				
			<li class="email"><?php echo($_SESSION['user_email'])?></li> 
			<li class="logout"><a href="../index.php" >Logout</a></li>
        </ul>
    </div>

     <div class="title">
        <a href="home.php">NepTravels</span></a>	
     </div>

     <div class="menu">
        <ul class="menus">
            <li class="list"><a href="home.php">Home</a></li>
            <li class="list"><a href="about.php">About</a></li>
            <li class="list"><a href="tourpackage.php">Tour package</a></li>
            <li class="list"><a href="privacypolicy.php">Privacy Policy</a></li>
            <li class="list"><a href="contact.php">Contact Us</a></li>
        </ul>
</div>

    <div class="namelist">Package Details</div>

    <div class="ad"><img src="ad.jpg" class="ads"></div>

    <div class="pacakge-container"> 
        <h3>Package Details</h3>  
        
        <?php
                          $currentPackage = $_GET['newid'];
                          $_SESSION['currentp'] = $currentPackage;
                          $sql = "SELECT * FROM create_package WHERE id = '$currentPackage'";
                          $gotResult = mysqli_query($db,$sql);
                          if($gotResult){
                              if(mysqli_num_rows($gotResult)>0){
                                  while($row = mysqli_fetch_array($gotResult)){
                                    
                                ?>      
                <div class="det">
                    <div class="dets">
                    <div class="packageimage">
                        <img src="<?php echo $row['pac_image'] ?>" height="300px" width="400px">
                    </div>
                    <div class="pacakge-details">
                        <h4>Package Name: <?php echo $row['pac_name']?> </h4>
                        <h4>Booking ID: <?php echo $_SESSION['currentp']?></h4>
                        <h6>Package Type : <?php echo $row['pac_type']?></h6>
                        <p><b>Package Location :<?php echo $row['pac_location']?> </p>
                        <p><b>Features : <?php echo $row['pac_features']?></b></p>
                    </div>
                    <div class="time"> 
                        <form action="" method ="post">
                        <label for="from">From: <?php echo $row['pac_time_start']?></label><br>

                        <br><br>
                        <label for="To">To: <?php echo $row['pac_time_end']?></label><br>
                        </form>
                    </div>
                    </div>
                 <h4>Description:</h4>
                
                <p><?php echo $row['pac_details'] ?></p>
                <div class="totalprice">
                    <hr>
                <h5>Grand Total</h5>
                <h4><b><?php echo $row['pac_price'] ?> NRS</b></h4>
                <hr>
                </div>
                <?php } } } ?>
                
            <form action="" method="post">
                  
            <label for="Bid" class="form">Booking ID</label><br>
            <input type="text" class="inp" value="<?php echo $_SESSION['currentp']?>" name="b_id" readonly><br>    
            <label for="Name" class="form">Full Name</label><br>
            <input type="text" class="inp" placeholder="Full Name" name="b_name" required><br>
            <label for="Address" class="form">Address</label><br>
            <input type="text" class="inp" placeholder="Address" name="b_address" required><br>
            <label for="Mobile Number" class="form">Mobile Number</label><br>
            <input type="text" class="inp" placeholder="Mobile Number" name="b_num" required><br>
            <label for="Email Address" class="form">Email Address</label><br>
            <input type="text" class="inp" placeholder="Email Address" name="b_email" required><br>
            <label for="No Of Peoples" class="form">Total Numbers of Peoples</label><br>
            <input type="number" class="inp" placeholder="Enter the Total Numeber of Peoples" name="b_people" required>
            <label for="Starting Time" class="form">Select Starting Date</label><br>
            <input type="text" class="inp" name="time_start" id="date_picker1" size= 10 placeholder="Choose Staring Date" required>
            
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
      
      <script>
$(document).ready(function() {
///////
var startDate;

 $( "#date_picker1" ).datepicker({
dateFormat: 'dd-mm-yy'
})

/* A jquery function that is called when the datepicker1 is changed. */
$('#date_picker1').change(function() {
/* Getting the date from the datepicker. */
startDate = $(this).datepicker('getDate');
$("#date_picker2").datepicker("option", "minDate", startDate );
})
})
</script>
            <label for="Comment" class="form">Comment</label><br>
            <input type="text" class="inp" placeholder="Please Give Detailed information(Optional)" name="b_comment"><br>
            <button type="submit" class="bookb"  name="book_package" >Book Now</button>
            <?php

    $uid = $_SESSION['currentp'];
    if(isset($_POST['book_package'])) {
    // receive all input values from the form
    $userName = $_POST['b_name'];
    $userAddress =$_POST['b_address'];
    $userNum =$_POST['b_num'];
    $userEmail =$_POST['b_email'];
    $userPeople =$_POST['b_people'];
    $userTime =$_POST['time_start'];
    $userComment =$_POST['b_comment'];

    $query="INSERT INTO bookedpac(fullname,address,mobilenumber,emailaddress,totalpeople,bookingid,startingdate,comment) VALUES('$userName', '$userAddress', '$userNum', '$userEmail','$userPeople','$uid','$userTime,'$userComment')";
    mysqli_query($db,$query);
    header("location:tourpackage.php");
    
 



}
?>

                    
                </form>
                  
                
                </div>  
                     
    </div>
    <div class="footer">© 2022 Neptravels. All Rights Reserved</div>
           
</script>
</body>
</html>