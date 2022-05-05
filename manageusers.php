<?php
session_start();
include('db_conn.php');
include('update_user_status.php');
// if(!isset($_SESSION['UID'])){
//   header('location:index.php');
//   die();
// }

/* Used to display the current time. */
$time = time();
$res = mysqli_query($db,"SELECT * FROM signup");
 

?>
<!Doctype HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="admin.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel ="stylesheet" id = "bootstrap-css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>


<body>
	<div id="mySidenav" class="sidenav">
	<p class="logo"><span>Nep</span>ravel</p>
  <a href="home.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
  <a href="package.php" class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Create Packages</a>
  <a href="package-list.php"class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Manage Packages</a>
  <a href="manageusers.php"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;<u>Manage Users</u></a>
  <a href="managebooking.php"class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Manage Booking</a>
  <a href="manageenquries.php"class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;Manage Enquiries</a>
  </div>

 
<div class="main">
  <div class="header">
    <b>Tourism Management System</b>
    <span class="admins">
      Administrator /
    </span>
    <span class="Logout">
      <a href="index.php">
      Logout 
    </a>
    </span>
 </div>

 <div class="pacakge-container"> 
  <h3>Manage Users</h3> 
  <div class="table">
      <table style="width:96%">
          <tr>
            <th>S.N</th>
            <th>Name</th>
            <th>Mobile No.</th>
            <th>Email</th>
            <th>Status</th>
      
          </tr>
          <tbody id ="user_grid">
            <?php 
            /* Used to display the serial number of the table. */
            $i = 1;
            /* Fetching the data from the database and displaying it in the table. */
            while($row = mysqli_fetch_assoc($res)){
              $status = 'Offline';
              $class = "btn-danger";
              /* This is used to display the status of the user. */
              if($row['last_login']>$time){
                $status = 'Online';
                $class = "btn-success";
              }
            ?>
          <tr>
            <th scope ="row"> <?php echo $i ?> </th>
            <td><?php echo $row['username'] ?> </td>
            <td><?php echo $row['phonenumber'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td> <button type="button" class= "btn <?php echo $class ?>"><?php echo $status ?></button></td>  
          </tr>

          <?php 

        /* Used to increment the value of  by 1. */
        $i++;

        } 
        
        ?>
</tbody>
          </table>
  </div> 
  <script>
  function updateUserStatus(){
    /* Used to update the status of the user. */
    jQuery.ajax({
      url:'update_user_status.php',
      success:function(){}
    });
  }

  function getUserStatus(){
    /* Used to update the status of the user. */
    jQuery.ajax({
      url:'get_user_status.php',
      success:function(result){
        jQuery('#user_grid').html(result);

      }
    });
  }

  setInterval(function(){
    updateUserStatus();

  },/* Used to update the status of the user after every 5 seconds. */
  5000);

  setInterval(function(){
    getUserStatus();

  },/* Used to update the status of the user after every 5 seconds. */
  10000);
  </script>     
    
</div>
 
  </div>

 

    <style>
   
   td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
      }
      
      tr:nth-child(even) {
        background-color: #dddddd;
      }
      .pacakge-container{
        margin-left:33px;
      }
    

.main{
  margin-left:285px;
  overflow:hidden;
}


.header{
  background-color: rgb(8, 219, 238);
  height:100px;
  width:1150px;
  margin-left: 34px;
  margin-right: 40px;
  font-size: 35px;
  text-align: center;
  padding-top: 20px;
  color:#6e0eb8;
  border-style:groove;
  border-color: #ffffff;
}
.admins{
  margin-left: 100px; 
  color:#ffffff
}
.Logout>a{
  margin-left: 20px; 
  color:#4b50d9;
  text-decoration: underline;
}

    </style>
</body>


</html>