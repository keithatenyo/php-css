<?php

 require('db_connect.php');

if(isset($_POST['firstname']) and isset($_POST['lastname']) and isset($_POST['ID']) and isset($_POST['dropdown1']) and isset($_POST['regno'])) 
{

// Assigning POST values to variables

  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $regNo=$_POST['regno'];
  $IDNo=$_POST['ID'];
  $course=$_POST['dropdown1'];
  


// INSERT DATA INTO  TABLE CANDIDATES.

$query = "INSERT INTO `voter`(`firstname`, `lastname`, `regNo`, `IDNo`, `course`) VALUES ('$firstname', '$lastname', '$regNo', '$IDNo', '$course')";

if(!mysqli_query($connection, $query))

{
	echo("The voter has been added successfully");
}

else

{
	echo ("please try again");
}

header("Location:addvoter.php");

}

?>