<?php
require('db_conn.php');
require('error.php');

// Create Package
if (isset($_POST['package_submit'])) {
    // receive all input values from the form
    $pacName = mysqli_real_escape_string($db, $_POST['package_name']);
    $pacType = mysqli_real_escape_string($db, $_POST['package_type']);
    $pacLocation = mysqli_real_escape_string($db, $_POST['package_location']);
    $pacPrice = mysqli_real_escape_string($db, $_POST['package_price']);
    $pacFeatures = mysqli_real_escape_string($db, $_POST['package_features']);
    $pacDetails = mysqli_real_escape_string($db, $_POST['package_details']);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($pacName)) { array_push($errors, "Package Name is required"); }
    if (empty($pacType)) { array_push($errors, "Package Type is required"); }
    if (empty($pacLocation)) { array_push($errors, "Package Location is required"); }
    if (empty($pacPrice)) { array_push($errors, "Package Price is required"); }
    if (empty($pacFeatures)) { array_push($errors, "Package Features is required"); }
    if (empty($pacDetails)) { array_push($errors, "Package Details is required"); }
    if (empty($pacImage)) { array_push($errors, "Package Details is required"); }

        // first check the database to make sure 
    // Package does not already exist with the same name and location
    $user_check_query = "SELECT * FROM create_package WHERE pac_name='$pacName' AND pac_location='$pacLocation' LIMIT 1";
  
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { // if package already exists
      if ($user['package_name'] === $pacName) {
        array_push($errors, "The package you are trying to create already exists");
      }
  
      if ($user['package_location'] === $pacLocation) {
        array_push($errors, "The package location already exists");
      }
    }
    
    // Storing Image
    $pacImage = $_FILES['package_image'];
    $imageName = $pacImage['name']; //displaying name
  
    //Checking image file error
    $imageError = $pacImage['error'];

    //Stroing image temproraly
    $imageTmp = $pacImage['tmp_name'];

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

    // Finally, create package if there are no errors in the form
    if (count($errors) == 0) {  
        $query = "INSERT INTO create_package (pac_name, pac_type,pac_location,pac_price,pac_features,pac_details,pac_image) 
                  VALUES('$pacName', '$pacType', '$pacLocation', '$pacPrice', '$pacFeatures','$pacDetails','$destinationFile')";
        mysqli_query($db, $query);
        $_SESSION['package_name'] = $pacName;
        $message = 'You have successfully created a package';

        echo "<SCRIPT>
        alert('$message');
        </SCRIPT>";
        header('location: package.php');

        $displayquery = "SELECT * FROM create_package"; //retriving image database
        $querydisplay = mysqli_query($db,$displayquery);

        // $row = mysqli_num_rows($querydisplay);
        while( $res = mysqli_fetch_array($querydisplay)){
            echo $res['pac_name'];
            echo $res['pac_type'];
            echo $res['pac_location'];
            echo $res['pac_price'];
            echo $res['pac_features'];
            echo $res['pac_details'];
            echo $res['pac_image'];

        }
    }
  }

?>