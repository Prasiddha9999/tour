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
					
					<div class="container">
        <div class="first"><img src="logo.png"></div><div class="firsts">Up And Away</div>
        <div class="second">
            <p class="secondtexta">Up And Away</p>
            <p class="secondtextb">Booking Travels made just got easier</p>
        </div>
        <div class="third"><button type="submit" class="btn" name="login_page">Login or Signup</button></div>
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
        <div class="third"><button type="submit" class="book" name="login_page">Book Now</button></div>
        <hr class="line">
    </div>
    <style>
        .container{
            margin-left:10%;
            margin-right:10%;
            border: 1px solid rgb(216, 210, 216);
            box-shadow: 1px 1px 3px 3px rgb(225, 228, 228);
            }
        
        .first {
    height: 60px;
    width: 50px;
}
img{
    max-width: 100%;
    max-height: 100%;
    display: block;
}
.firsts{
    margin-top:-45px;
    margin-bottom:20px;
    margin-left:70px;
    font-size:large;
    

}
.second{
    margin-top:-35px;
    width:100%;
    height: 300px;
    background-image: url('second.jpg');
    background-repeat: no-repeat;
   filter: brightness(0.20);
}
.third{
    width:100%;
    height: 30px;
    
}
.btn{
    margin-left:85%;
    margin-top:17px;
    border: 2px solid rgb(245, 82, 228);
    background-color: rgb(247, 247, 247);
    color:rgb(246, 21, 242);
    font-size: 15px;
    box-shadow: 2px 2px 3px 3px rgb(206, 176, 206);
    border-radius: 5px;
}
.fourth{
    width:100%;
    height: 150px;
    background-image: url('fourth.jpg'); 
    filter: brightness(0.60);
}
.gap{
    width:100%;
    height: 40px; 
}
.imga{
    width:80%;
    height: 250px;
    background-image: url('imga.jpg'); 
    margin-left:10%;
}
.imgb{
    width:80%;
    height: 250px;
    background-image: url('imgb.jpg'); 
    margin-left:10%;
}
.imgc{
    width:80%;
    height: 250px;
    background-image: url('imgc.jpg'); 
    margin-left:10%;
}
.imgd{
    width:80%;
    height: 250px;
    background-image: url('imgd.jpg'); 
    margin-left:10%;
}
.containera{
    display:grid;
  grid-template-columns: 30% 20% 30% 20%;
}
.texta{
    text-align: left;
    color:rgb(246, 21, 242);
    font-weight: bold;
    padding-bottom:10px;
}
.textb{
    text-align: justify;
    margin-right:10%;
}
.question{
    text-align: center;
    font-weight: bold;
    font-size: 25px;
}
.questiontext{
    text-align: center;
}
.book{
    background-color: rgb(246, 21, 242);
    border: 1px solid rgb(255, 3, 238);
    color:azure;
    font-weight: bold;
    width:20%;
    margin-left:40%;
    margin-top:3px;
    box-shadow: 2px 2px 3px 3px rgb(206, 176, 206);
    border-radius: 5px;
}
hr.line{
    border-top: 1px dashed rgb(195, 186, 186);
}
.secondtexta{
    color: rgb(252, 243, 243);
    font-weight: bold;
    font-size:50px;  
    text-align: center;
    padding-top:80px;
    
}
.secondtextb{
    color: rgb(255, 255, 255);
    font-weight: bold;
    font-size:20px;  
    text-align: center;
}
.secondtextc{
    padding-top:30px;
    color: rgb(255, 255, 255);
    font-weight: bold;
    font-size:35px; 
    text-align: center; 
}
.secondtextd{
    color: rgb(255, 255, 255);
    font-weight: bold;
    font-size:15px;  
    text-align: center;
}
.book:hover {
  box-shadow: 0 12px 16px 0 rgba(235, 14, 243, 0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.btn:hover {
  box-shadow: 0 12px 16px 0 rgba(235, 14, 243, 0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
    </style>
</body>
</html>