
<?php


// error_reporting(0);
include('db_conn.php');
include('package-list.php');

$id = $_GET['updateid'];
if(isset($_POST['p_submit'])){

 $pName = mysqli_real_escape_string($db,$_POST['p_name']);
 $pType = mysqli_real_escape_string($db,$_POST['p_type']);
 $pLocation = mysqli_real_escape_string($db,$_POST['p_location']);
 $pPrice = mysqli_real_escape_string($db,$_POST['p_price']);
 $pFeatures = mysqli_real_escape_string($db,$_POST['p_features']);
 $pDetails =mysqli_real_escape_string($db, $_POST['p_details']);
 
 // Storing Image
 $pImage = $_FILES['p_image'];
 $imageName = $pImage['name']; //displaying name

 //Stroing image temproraly
 $imageTmp = $pImage['tmp_name'];

 //checking for error
 $imageError =$pImage['error'];

 //Checking image extension
 $imageExt = explode('.',$imageName); #spliting the image into two part
 $imageCheck = strtolower(end($imageExt)); #lowering the letters in extension

 //Choosing the extensions
 $imageExtstored = array('png','jpg','jpeg');

 //Checking if the user image extension is correct or not
 if(in_array($imageCheck,$imageExtstored)){
     $destinationFile = 'upload/'.$imageName; #Saving image to local folder
     move_uploaded_file($imageTmp,$destinationFile); #Moving tmproary file to folder

 }
 else{
     $message = 'Incorrect image format.';

     echo "<SCRIPT>
     alert('$message');
     </SCRIPT>";

 }

 /* This is the query that is updating the user information. */
 $query = "UPDATE `create_package` SET pac_name = '$pName', pac_type = '$pType', pac_location = '$pLocation', pac_price = '$pPrice', pac_features = '$pFeatures', pac_details = '$pDetails', pac_image = '$destinationFile' where id= '$id' ";
 $query_run = mysqli_query($db, $query);

if($query_run){
    /* A javascript alert that is being echoed out to the user. */
    echo '<script type = "text/javascript"> alert("User Information updated") </script>';

  }
else{
    echo '<script type = "text/javascript"> alert("User Information not updated") </script>';


  }
 }