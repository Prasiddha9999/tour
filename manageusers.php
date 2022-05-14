<?php
session_start();
include('db_conn.php');
// if(!isset($_SESSION['UID'])){
//   header('location:index.php');
//   die();
// }


 

?>
<!Doctype HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="admin.css" type="text/css"/>
  <link rel="stylesheet" href="seperates.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>


<body>
	<div id="mySidenav" class="sidenav">
	<p class="logo"><span>NepTravels</p>
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
      Admin 
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
            <th>User ID</th>
            <th>Name</th>
            <th>Mobile No.</th>
            <th>Email</th>
            <th>Current Status</th>
            <th>change Status</th>
      
          </tr>
          <tbody>
            <?php 
             $query= "SELECT * FROM signup";
             $data= mysqli_query($db,$query);
            /* Used to display the serial number of the table. */
            $i = 1;
            /* Fetching the data from the database and displaying it in the table. */
            while($row = mysqli_fetch_array($data)){
            ?>
          <tr>
            <th scope ="row"> <?php echo $i ?> </th>
            <td><?php echo $row['id'] ?> </td>
            <td><?php echo $row['username'] ?> </td>
            <td><?php echo $row['phonenumber'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td> <?php if($row['status']==1){
              echo 'User Active';
            }
            else{
              echo 'User Banned';
            } ?></td> 
            <td><?php 
            if($row['status']==1){
              echo '<p><a href="status.php?d_id='.$row['id'].'&status=0">Active</a></p>';
            }
            else{
              echo '<p><a href="status.php?d_id='.$row['id'].'&status=1">Deactive</a></p>';
            } ?></td>
          </tr>
          

          <?php 

        /* Used to increment the value of  by 1. */
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
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
  function active_disactive_user(val, id){
    $.ajax({
      type:'post',
      url:'change.php',
      data:{val:val,id:id},

      success: function(result){
        if(result==1){
          $('#str'+ id).html('Active');

        }else{
          $('#str'+ id).html('Disactive');
        }
      }


    });
  }

  </script> -->


</html>