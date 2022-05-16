<?php
include('D:\Softwares\Xammp\htdocs\tour\db_conn.php');
// if(!isset($_SESSION['u_status'])!= true){
//   header('location:index.php');
//   die();
// }

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
            <li class="lista"><a href="home.php">Home</a></li>
            <li class="list"><a href="about.php">About</a></li>
            <li class="list"><a href="tourpackage.php">Tour package</a></li>
            <li class="list"><a href="privacypolicy.php">Privacy Policy</a></li>
            <li class="list"><a href="contact.php">Contact Us</a></li>
        </ul>
    </div>

    <div class="namelist">Tourism Management System</div>

    <div class="ad"><img src="ad.jpg" class="ads"></div>
    <div class="pacakge-container"> 
        <h3>Package List</h3>   
            <?php 
            $res = mysqli_query($db,"SELECT * FROM create_package");
            /* Used to display the serial number of the table. */
            $i = 1;
           
            /* Fetching the data from the database and displaying it in the table. */
            while($row = mysqli_fetch_assoc($res)){
                while($i<=1){
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
                        <h4>Package Name: '.$pacName.'</h4>
                        <h6>Package Type : '.$pacType.'</h6>
                        <p><b>Package Location : </b>'.$pacLocation.'</p>
                        <p><b>Features : </b>'.$pacFeatures.'</p>
                    </div>
                    <div class="prize">
                        <h5>NPR '.$pacPrice.'</h5>
                        <a href="mydetail.php?newid='.$id.'" class="view">Details</a>
                    </div>
                </div>    ';    
           

        /* Used to increment the value of  by 1. */
        $i++;

        } 
    }
        ?>
    </div>
    <div class="morepackege"><a href="tourpackage.php" class="morepack">View More Package</a></div>


    <div class="footer">© 2022 Neptravels. All Rights Reserved</div>           
</body>
</html>
