<?php 
require('db_conn.php');
// require('error.php');
?>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="seperates.css" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <h3><a href="index.php" class="backbutton">Back to Home</a></h3>
       <h1 id="heading1">Login Here</h1>
       <img src="https://img.icons8.com/cute-clipart/344/login-rounded-right.png" alt="Login Logo" style="width:100px; height:100px;">
     <div>
         <form action="admin.php" class="myForm" name="myForm" method="POST">
         <div class="error"><?php include('error.php');?></div>
             <div class="input-container">
                 <i class="fa fa-envelope icon"></i>
                 <input type="email" placeholder="Email" name="admin_name" class="input-field" required="">
             </div>
             <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input type="password" placeholder="Password" name="admin_pass" class="input-field" required="">
               </div>
             <div>
              <button type="submit" class="bttn" name="admin_log">submit</button>
             </div>
         </form>
     </div>
     <style>
     * {
        box-sizing: border-box;
        padding: 1px;
        font-family: Arial, Helvetica, sans-serif;
      }
    </style>
    </body>
</html>