<?php
session_start();
include('D:\Softwares\Xammp\htdocs\tour\db_conn.php');
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
			<li class="listb"><a href="mytourhistory.php">My Tour History</a></li>
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

    <div class="namelist">Tourism Management System</div>

    <div class="ad"><img src="ad.jpg" class="ads"></div>

                <div class="pacakge-container"> 
                    <h3>My Tour History</h3> 
                    <div class="table">
                        <table style="width:100%">
                            <tr>
                              <th>S.N</th>
                              <th>Booking ID</th>
                              <th>Fullname</th>
                              <th>address</th>
                              <th>mobilenumber</th>
                              <th>emailaddress</th>
                              <th>Total People</th>
                              <th>Starting Date</th>
                              <th>Comment</th>
                            </tr>
                            <?php 
                            $currentuser = $_SESSION['user_email'];
          $res = mysqli_query($db,"SELECT * FROM bookedpac WHERE bookedby='$currentuser'");
            /* Used to display the serial number of the table. */
            $i = 1;
           
            /* Fetching the data from the database and displaying it in the table. */
            while($row = mysqli_fetch_assoc($res)){
            ?>
                            <tr>
                            <td scope ="row"> <?php echo $i ?> </td>
            <td><?php echo $row['fullname'] ?></th>
            <td><?php echo $row['addressl'] ?></th>
            <td><?php echo $row['mobilenumber'] ?><?php echo " " ?><?php echo $row['lname'] ?> </td>
            <td><?php echo $row['emailaddress'] ?></th>
            <td><?php echo $row['totalpeople'] ?></td>
            <td><?php echo $row['bookingid'] ?></td>
            <td><?php echo $row['startingdate'] ?></td> 
            <td><?php echo $row['comment'] ?></td>                </tr>
                            <?php
          $i++;
            }
          ?>
                            </table>
                    </div>      
                      
                </div>


    <div class="footer">© 2022 Neptravels. All Rights Reserved</div>
        <style>
        .listb{
            text-decoration: underline;
        }


td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.table{
    margin-top:70px;
    margin-bottom:30px;
    margin-left: 230px;
    margin-right:20px;
}

        </style>                   
</body>
</html>