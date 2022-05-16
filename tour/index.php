<?php include('db_conn.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css" type="text/css"/>
    <link rel="stylesheet" href="login.css" type="text/css"/>
    
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<div class="topbtn"><button class="openbtn" onclick="openForm()">Login or Signup</button></div>
			<div class="login">
           
				<form method="post" action="">
					<?php include('error.php');?>
					
					<div class="container">
                    <div class="bothlogin">
                    
        <div class="third"><div class="first"><img src="image/logos.png"></div><div class="firsts">NepTravels</div></div>
       
        </div>
       
        <div class="second">
            <p class="secondtexta">NepTravels</p>
          
         
        </div>
        <div class="gap"></div>
        <hr class="line">
        <br>
    <div class="containera">
        <div class="imga"></div>
        <div>
        <div class="texta">Wildlife</div>
        <div class="textb">Wildlife tourism is a major source of tourism in the country.</div>
        </div>
        <div class="imgb"></div>
        <div>
        <div class="texta">Cities</div>
        <div class="textb">Various town and cities should be clean.</div>
        </div>
    </div>
        <br>
        <hr class="line">
        <br>
    <div class="containera">
        <div class="imgc"></div>
        <div>
        <div class="texta">Mountains</div>
        <div class="textb">There are many mountain in our nepal.</div>
        </div>
        <div class="imgd"></div>
        <div>
        <div class="texta">Lakes</div>
        <div class="textb">There are many lakes in our nepal</div>
        </div>
    </div>
        <br>
        <hr class="line">
        <div class="gap"></div>
        <hr class="line">
        <br>
        <div class="question">Questions?</div>
        <br>
        <div class="questiontext">Let's get connected with our System</div>
        <br>
        <hr class="line">
        <div class="third"><button type="submit" class="book" name="book_page">Book Now</button></div>
        <hr class="line">
    </div>
    
 
    
    <!-- next -->
    <div id="myOverlay" class="overlay">
        <div class="wrap">
        <span class="closebtn" onclick = "closeForm()" title = "Close Overlay"> &#215 </span>
	<div class="mains">  
		<input type="checkbox" id="chk" aria-hidden="true">
			<div class="logins">
				<form method="post" action="index.php">
					<?php include('error.php');?>
					
					<label>Login</label>
				
					<input type="email"  name="username" placeholder="Email"  >
					<input type="password"  name="password" placeholder="Password" ><br><br>
					<button type="submit" class="btns" name="login_user">Login</button>
                   <div class="resetbtn">Reset password<br>New password send to your email</div>
					
				</form>
			</div>

			<div class="signups">
				<form method="post" action="index.php">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="txt" placeholder="Name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="text" name="num" placeholder="Phone Number" required="">
					<input type="text" name="address" placeholder="Address" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button type="submit" class="btns" name="reg_user">Sign up</button>
				</form>
			</div> 

            <div class="signups">
				<form method="post" action="index.php">
					<label for="chk" aria-hidden="true">Reset Password</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="text" name="num" placeholder="Phone Number" required="">
					<input type="password" name="pswd" placeholder=" New Password" required="">
					<button type="submit" class="btns" name="reg_user">Reset</button>
				</form>
			</div>

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
</body>
</html>