<?php include('db_conn.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css" type="text/css"/>
</head>
<body>
			<div class="login">
				
				<form method="post" action="">
					<?php include('error.php');?>
					
					<div class="container">
                    <div class="bothlogin">
        <div class="third"><div class="first"><img src="image/logo.png"></div><div class="firsts">Neptravels</div></div>
        <div class="third"><button type="submit" class="btn" name="login_page">Login or Signup</button></div>
        </div>
       
        <div class="second">
            <p class="secondtexta">Neptravels</p>
            <p class="secondtextb">Booking Travels made just got easier</p>
        </div>
       
        <div class="fourth">
            <p class="secondtextc">Explore Nepal</p>
            <p class="secondtextd">Beautifull place to explore</p>
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
        <div class="questiontext">Hello wellcome our system</div>
        <br>
        <hr class="line">
        <div class="third"><button type="submit" class="book" name="book_page">Book Now</button></div>
        <hr class="line">
    </div>
 
     </style>
</body>
</html>