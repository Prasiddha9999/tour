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
			<div class="login">
				
				<form method="post" action="db_conn.php">
					<?php include('error.php');?>
					
					<button type="submit" class="btn" name="login_page">Login or Signup</button>
				</form>
			</div>
			<div class=title>Tour Management System</div>
			<style>
				body{
					background-image:url("front.jpg");
					background-repeat: no-repeat;
				}
				.title{
					color:white;
					font-size:80px;
					text-align:center;
					margin-top:10%;
				}
				.btn{
					position: absolute;
					width: 145px;
					height: 45px;
					background: #FFFFFF;
					border-radius: 10px;
					font-size:15px;
					text-align:center;
					margin-left:88%;
					margin-top:-9%;
				}
		
				</style>
</body>
</html>