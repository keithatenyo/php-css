<?php

 require('db_connect.php');

if(isset($_POST['name']) and isset($_POST['dropdown']))
{

// Assigning POST values to variables

  $name=$_POST['name'];
  $position=$_POST['dropdown'];

// INSERT DATA INTO  TABLE CANDIDATE.

$query = "INSERT INTO `candidate` (`name`, `position`) VALUES ('$name','$position')";

if(!mysqli_query($connection, $query))

	//echo "the data has been inserted successfully";
{
	echo "<script type='text/javascript'>alert('Please try again')</script>";

	
}

else 
{
	echo "<script type='text/javascript'>alert('The candidate was added successfully')</script>";
}

header("Location:addcandidate.php");


}
?>