<?php

 require('db_connect.php');

if(isset($_POST['username']) and isset($_POST['password'])){

// Assigning POST values to variables

  $User=$_POST['username'];
  $Pass=$_POST['password'];

// CHECK FOR THE RECORD FROM TABLE

$query = "SELECT * FROM `loginform` WHERE User='$User' and Pass='$Pass'";



  $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

  $count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";
echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";

header("Location:addvoter.php");

}

else {
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
exit();
//echo "Invalid Login Credentials";

}

}


?>
