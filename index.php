<?php include('db_conn.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello world </h1>
			<div class="login">
				
				<form method="post" action="db_conn.php">
					<?php include('error.php');?>
					
					<label>Login or Signup</label></br>
					<button type="submit" class="btn" name="login_page">Login</button>
					<button type="submit" class="btn" name="signup_page">Sign up</button>
				</form>
			</div>
</body>
</html>