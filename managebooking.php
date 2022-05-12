
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
	<p class="logo"><span>Nep</span>Travel</p>
  <a href="home.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
  <a href="package.php" class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Create Packages</a>
  <a href="package-list.php"class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Manage Packages</a>
  <a href="manageusers.php"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Manage Users</a>
  <a href="managebooking.php"class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;<u>Manage Booking</u></a>
  <a href="manageenquries.php"class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;Manage Enquiries</a>
  </div>

 
<div class="main">
  <div class="header">
    <b>Tourism Management System</b>
    <span class="admins">
      Admin /
    </span>
    <span class="Logout">
      <a href="index.php">
      Logout 
    </a>
    </span>
 </div>

 <div class="pacakge-container"> 
  <h3>Manage Booking</h3> 
  <div class="table">
  <table style="width:96%">
          <tr>
            <th>S.N</th>
            <th>Booking ID</th>
            <th>Full Name</th>
            <th>Mobile Number</th>
            <th>Email Id</th>
            <th>Starting Date</th>
            <th>Comment</th>
            <th>Status</th>
          </tr>
          <?php 
            /* Used to display the serial number of the table. */
            $i = 1;
           
            /* Fetching the data from the database and displaying it in the table. */
            while($row = mysqli_fetch_assoc($res)){
            ?>
          <tr>
            <td>1</td>
            <td><?php echo $row['fname'] ?></td>
            <td><?php echo $row['fname'] ?></td>
            <td><?php echo $row['fname'] ?></td>
            <td><?php echo $row['fname'] ?></td>
            <td><?php echo $row['fname'] ?></td>
            <td><?php echo $row['fname'] ?></td>
            <td><?php echo $row['fname'] ?></td>
            <td></td>
          </tr>
          <?php 
          $i++;
            }
            ?>
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

    </style>
</body>


</html>