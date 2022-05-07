<?php
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
                <div class="det">
                    <div class="dets">
                    <div class="packageimage">
                        <img src="packageimage.png" class="packageimg" alt="">
                    </div>
                    <div class="pacakge-details">
                        <h4>Package Name: Nepal</h4>
                        <h6>Package Type : Family</h6>
                        <p><b>Package Location :</b> Pokahra</p>
                        <p><b>Features</b> Free wifi, pickup and drop etc</p>
                    </div>
                    <div class="time"> 
                        <form action="#.php">
                        <label for="from">From:</label><br>
                        <input type="date" id="From" name="from">
                        <br><br>
                        <label for="To">To:</label><br>
                        <input type="date" id="To" name="to">
                        </form>
                    </div>
                    </div>
                 <h4>Description:</h4>
                
                <p>Pokhara’s tranquil beauty has been the subject of inspiration for many travel writers. Its pristine air, spectacular backdrop of snowy peaks, blue lakes and surrounding greenery make it ‘the jewel in the Himalaya’, a place of remarkable natural disposition. With the magnificent Annapurna range forming the backdrop and the serenity of the Cluster of 9 Lakes with three major ones - Phewa, Rupa and Begnas – Pokhara is a great destination for a weekend getaway as well as a long relaxing holiday. Pokhara Valley, gateway to the Annapurna region where many a trekker finds his Shangri-la, sits high on the list of ‘must visit’ places in Nepal.</p>
                <div class="totalprice">
                    <hr>
                <h5>Grand Total</h5>
                <h4><b>NPR 5000</b></h4>
                <hr>
                </div>
                <h5 class="lcmt"><b>Comment</b></h5>
                <form action="#">
                    <textarea id="Comment" name="Comment" placeholder="Write Coment here.." style="height:200px"></textarea>
                    <input type="button" class="book" onclick="openForm()" value="Book">
                  </form>
                
                </div>  
                     
    </div>
    <div class="footer">© 2022 Neptravels. All Rights Reserved</div>
           
    
    <!-- Next overlay -->

    <div id="myOverlay" class="overlay">
        <div class="book-form">
        <span class="closebtn" onclick = "closeForm()" title = "Close Overlay"> &#215 </span>
        <br><br>
        <label for="Name" class="form">Full Name</label><br>
        <input type="name" class="inp" placeholder="Full Name"><br>
        <label for="Address" class="form">Address</label><br>
        <input type="name" class="inp" placeholder="Address"><br>
        <label for="Mobile Number" class="form">Mobile Number</label><br>
        <input type="text" class="inp" placeholder="Mobile Number"><br>
        <label for="No Of Peoples" class="form">Total Numbers of Peoples</label><br>
        <input type="number" class="inp" placeholder="Enter the Total Numeber of Peoples">
        <p class="bookactive">Congratulations! Booking Sucessfull.</p>
        <input class="booka" type="submit" value="Book Now">
        <span><input class="bookb" type="submit" value="Pay Online Now"></span>
        </div>
        </div>
    </div>
   

    <script>
function openForm(){
    document.getElementById("myOverlay").style.display="block";
}
</script>
<script>
function closeForm(){
    document.getElementById("myOverlay").style.display="none";
}
</script>
</body>
</html>