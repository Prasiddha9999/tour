<?php
error_reporting(0);
include('C:\xampp\htdocs\tour\db_conn.php');
include('C:\xampp\htdocs\tour\update_user.php');
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
			<li class="listb"><a href="myprofile.php">My Profile</a></li>
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

    <div class="namelist">Tourism Management System</div>

    <div class="ad"><img src="ad.jpg" class="ads"></div>

    <div class="pacakge-container"> 
        <h3>My Details</h3> 

                
                    <div class="prof">
                    

                        <div class="container">
                          <form action="" method="post">   
                            <?php
                          $currentUser = $_SESSION['user_email'];
                          $sql = "SELECT * FROM signup WHERE email = '$currentUser'";
                          $gotResult = mysqli_query($db,$sql);
                          if($gotResult){
                              if(mysqli_num_rows($gotResult)>0){
                                  while($row = mysqli_fetch_array($gotResult)){
                                    
                                ?>
                            <label for="id">User Id</label>
                            <input type="text" id="id" name="id" placeholder="Your id" value="<?php echo $row['id']?>" readonly>
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="fullname" placeholder="Your Full Name" value="<?php echo $row['username']?>">
                            <label for="address">Address</label>
                            <input type="text" id="address" name="address" placeholder="Your Address" value="<?php echo $row['address']?>">
                            <label for="email">Email Address</label>
                            <input type="text" id="email" name="email" placeholder="Your  email Address" value="<?php echo $row['email']?>">
                            <label for="number">Mobile Number</label>
                            <input type="text" id="number" name="num" placeholder="Your Number" value="<?php echo $row['phonenumber']?>"> 
                        <br><br>
                            <input type="submit" class="sub" value="Update" name ="user_update">
                          <?php    
                          }
                                  }
                                }
                                ?> 
                          </form>
                          
                        </div>
                         
                    </div>
               
    </div>


    <div class="footer">© 2022 Neptravels. All Rights Reserved</div>
    <style>
        input[type=text], select, textarea {
          width: 100%;
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
          margin-top: 6px;
          margin-bottom: 16px;
          resize: vertical;
        }
        
        .sub {
          background-color:  rgb(26, 161, 26);
          color: white;
          padding: 12px 20px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
        }
        
        input[type=submit]:hover {
          background-color: rgb(26, 161, 26);
        }
        
        .container {
          border-radius: 5px;
          background-color: #f2f2f2;
          padding: 20px;
        }
        .privacy{
            margin-bottom: 20px;
        }
        .address > h4{
            color: rgb(75, 73, 73);
            text-align: center;
            margin-top: -20px;
        }
        .prof{
            border-style: groove;
            width:500px;
            margin-left:230px;
            margin-top: 70px;
            margin-bottom: 20px;
        }
        .listb{
            text-decoration: underline;
        }
        </style>                   
</body>
</html>