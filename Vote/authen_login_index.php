<?php

 require('db_connect.php');

if(isset($_POST['username']) and isset($_POST['password'])){

// Assigning POST values to variables

  $regNo=$_POST['username'];
  $IDNo=$_POST['password'];

// CHECK FOR THE RECORD FROM TABLE

$query = "SELECT * FROM `voter` WHERE regNo='$regNo' and IDNo='$IDNo'";



  $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

  $count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";
echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";

header("Location:castingvote.php");

}

else {
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
exit();

//echo "Invalid Login Credentials";

}

}


?>
