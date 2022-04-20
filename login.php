<?php include('db_conn.php')?>
<!DOCTYPE html>

<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<div class="backbtn"><a href="index.php" class="backbtn">Back to Home</a></div>
	<div class="container">
	<div class="header">Tour Management System</div>
	<div class="main">  
		<input type="checkbox" id="chk" aria-hidden="true">
			<div class="login">
				<form method="post" action="login.php">
					<?php include('error.php');?>
					
					<label>Login</label>
					<img src="image/login_img.png" alt="Tour Management System" class="login_img">	
					<input type="email"  name="username" placeholder="Email"  >
					<input type="password"  name="password" placeholder="Password" >
					<button type="submit" class="btn" name="login_user">Login</button>
					
				</form>
			</div>

			<div class="signup">
				<form method="post" action="login.php">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="txt" placeholder="Name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="text" name="num" placeholder="Phone Number" required="">
					<input type="text" name="address" placeholder="Address" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button type="submit" class="btn" name="reg_user">Sign up</button>
				</form>
			</div>
</div>
</div>
</body>
</html>