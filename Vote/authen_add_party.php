<?php

 require('db_connect.php');

if(isset($_POST['party'])) 
{

// Assigning POST values to variables

  $Party=$_POST['party'];

// INSERT DATA INTO  TABLE CANDIDATES.

$query = "INSERT INTO `party`(`Party`) VALUES ('$Party')";


if(!mysqli_query($connection, $query))

	//echo "the data has been inserted successfully";
{
	echo "<script type='text/javascript'>alert('Please try again')</script>";

	
}

else 

{
	echo "<script type='text/javascript'>alert('The record has been added successfully')</script>";
}
header("Location:addparty.php");
}
?>