<?php
require('create_pac.php');
require('error.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Package List</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="package-list.css" rel='stylesheet' type='text/css' />
</head>
<body>
	<div class="container">
	<div class="container-a">
		<li class="side"><a href="home.php">Home</a>&nbsp &nbsp</li>
		<li class="side"><a href="package-list.php">Manage Package</a>&nbsp &nbsp</li>
		<li class="side"><a href="package.php">Create Package</a>&nbsp &nbsp</li>
	</div>
<div class="container-b">
	<div class="top">
		<h1 class="head">Package List</h1>
	</div>
		<div class="titles">
			<li class="top-back-items"><a href="home.php">Home</a>&nbsp &nbsp Manage Package</li>
		</div>
			<div class="Packagebox">
				<div class="imgbox">
					<img src=" <?php echo $res['pac_image']; ?>" class="packageimg" alt="Image will come after insert image">
				</div>
					<div class="Package-detail">
							<h4>Package Name:<?php echo $res['pac_name'];?></h4>
							<h5>Package Type :</h5>
							<p><b>Package Location : </p>
							<p><b>Features</b>: </p>
					</div>
						<div class="price">
							<h5>NPR </h5>
						</div>
						<div class="detail"> 
							<a href="#" class="viewdetail">Edit</a>
						</div>
						<div class="apply">
							<a href="#" class="applyl">Delete</a>
						</div>
		
			</div>
		</div>
	</div>
	</div>
</div>
</body>
</html>