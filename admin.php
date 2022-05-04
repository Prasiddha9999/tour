<?php 
require('db_conn.php');
// require('error.php');
?>
<html>
    <head>
        <title>Login</title>
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
      .backbutton{
          text-decoration: none;
      }
      #heading1{
          text-align: center;
          padding: 30px;
      }
      img{
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
       
      }
      .myForm{
          max-width:500px;
         margin: auto;
         margin-top: 10px;
        }
        .input-container {
          
          display: flex;
          width: 100%;
          margin-bottom: 15px;
          
        }
        .icon {
          padding: 10px;
          background: rgb(51, 89, 204);
          color: white;
          min-width: 50px;
          text-align: center;
        }
        .input-field {
          width: 100%;
          padding: 10px;
          outline: none;
          border: none;
          border-bottom: 3px solid darkcyan;
        }
        .input-field:focus {
          border: 2px solid darkcyan;
        }
      
        .bttn {
          background-color: rgb(51, 89, 204);
          color: white;
          padding: 15px 20px;
          border: none;
          cursor: pointer;
          width: 100%;
          opacity: 0.9;
        }
        .bttn:hover {
          opacity: 1;
          background-color: darkcyan;
        }  
        a:hover{
          color: blueviolet;
      }
      .icon:hover{
          background-color: darkcyan;
      }
      .error{
        text-align:center;
        color:red;

      }
    </style>
    </body>
</html>