<?php
session_start();
include('C:\xampp\htdocs\tour\db_conn.php');
$res = mysqli_query($db,"SELECT * FROM create_package");
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
            <li class="lista"><a href="tourpackage.php">Tour package</a></li>
            <li class="list"><a href="privacypolicy.php">Privacy Policy</a></li>
            <li class="list"><a href="contact.php">Contact Us</a></li>
        </ul>
    </div>

    <div class="namelist">Package List</div>

    <div class="ad"><img src="ad.jpg" class="ads"></div>

    <div class="pacakge-container"> 
        <h3>Package List</h3>   
            <?php 
            /* Used to display the serial number of the table. */
            $i=1;
            /* Fetching the data from the database and displaying it in the table. */
            while($row = mysqli_fetch_assoc($res)){
                $id = $row['id'];
                $pacName = $row['pac_name'];
                $pacFeatures = $row['pac_features'];
                $pacLocation = $row['pac_location'];
                $pacPrice = $row['pac_price'];
                $pacType = $row['pac_type'];
                $pacTimeStart = $row['pac_time_start'];
                $pacTimeEnd = $row['pac_time_end'];
                $pacDescription =$row['pac_detail'];
                $pacImage =$row['pac_image'];
               
                echo '
                        
                <div class="room">
                    <div class="packageimage">
                        <img src="'.$pacImage.'" class="packageimg" alt="">
                    </div>
                    <div class="pacakge-details">
                        <h4>Package Name: '.$pacName.' </h4>
                        <h5>Booking ID: '.$id.' </h4>
                        <h6>Package Type : '.$pacType.'</h6>
                        <p><b>Package Location : '.$pacLocation.'</p>
                        <p><b>Features : '.$pacFeatures.'</b></p>
                    </div>
                    <div class="prize">
                        <h5>'.$pacPrice.' NPR </h5>
                        <button class="book" name="goto_packages"><a href="mydetail.php?newid='.$id.'" class="text-light">Details</a></button>
                    </div>
                </div>';
 
            
               
                        
 

        /* Used to increment the value of  by 1. */
        $i++;
    }
        
        
        ?>
    </div>

    <div class="footer">© 2022 Neptravels. All Rights Reserved</div>
                   
</body>
</html>
