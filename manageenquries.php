
<?php

include('db_conn.php');
$res = mysqli_query($db,"SELECT * FROM user_contact");
?>

<!Doctype HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="admin.css" type="text/css"/>
  <link rel="stylesheet" href="seperates.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
	<div id="mySidenav" class="sidenav">
	<p class="logo"><span>NepTravels</p>
  <a href="home.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
  <a href="package.php" class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Create Packages</a>
  <a href="package-list.php"class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Manage Packages</a>
  <a href="manageusers.php"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Manage Users</a>
  <a href="managebooking.php"class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Manage Booking</a>
  <a href="manageenquries.php"class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;<u>Manage Enquiries</u></a>
  </div>

 
<div class="main">
  <div class="header">
    <b>Tourism Management System</b>
    <span class="admins">
      Admin 
    </span>
    <span class="Logout">
      <a href="index.php">
      Logout 
    </a>
    </span>
 </div>

 <div class="pacakge-container"> 
  <h3>Manage Enquries</h3> 
  <div class="table">
  <table style="width:96%">
      <tbody>
      
          <tr>
            <th>S.N</th>
            <th>User Id</th>
            <th>Email Address</th>
            <th>Name</th>
            <th>Mobile Number</th>
            <th>Country</th>
            <th>Subject</th>
            
      
          </tr>
          <?php 
            /* Used to display the serial number of the table. */
            $i = 1;
           
            /* Fetching the data from the database and displaying it in the table. */
            while($row = mysqli_fetch_assoc($res)){
            ?>
          <tr>
            <td scope ="row"> <?php echo $i ?> </td>
            <td><?php echo $row['userid'] ?></th>
            <td><?php echo $row['useremail'] ?></th>
            <td><?php echo $row['fname'] ?><?php echo " " ?><?php echo $row['lname'] ?> </td>
            <td><?php echo $row['mob_num'] ?></th>
            <td><?php echo $row['country'] ?></td>
            <td><?php echo $row['subject'] ?></td> 
          </tr>
          <?php
          $i++;
            }
          ?>
          </tbody>
          </table>
  </div>      
    
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
      h3{
        color:rgb(26, 161, 26);
  
        
        font-size: 25px;
      }

   
    </style>
</body>


</html>