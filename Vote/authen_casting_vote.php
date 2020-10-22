<?php

 require('db_connect.php');

if(isset($_POST['president']) and isset($_POST['governor']) and isset($_POST['secretarygeneral']) and isset($_POST['studentaffaircoodinator']) and isset($_POST['sportschairperson']) and isset($_POST['treasurer']))
{

// Assigning POST values to variables

  $president=$_POST['president']; 
  $governor=$_POST['governor'];
  $secretarygeneral=$_POST['secretarygeneral'];
  $studentaffair_coodinator=$_POST['studentaffaircoodinator'];
  $sportschairperson=$_POST['sportschairperson'];
  $treasurer=$_POST['treasurer'];

// INSERT DATA INTO  TABLE CANDIDATES.



$query = "INSERT INTO `ballot`(`president`, `governor`, `secretarygeneral`, `studentaffair_coodinator`, `sportschairperson`, `treasurer`) VALUES ('$president', '$governor', '$secretarygeneral', '$studentaffair_coodinator','$sportschairperson', '$treasurer')";

if(!mysqli_query($connection, $query))

	//echo "the data has been inserted successfully";
{
	echo "<script type='text/javascript'>alert('The record has been added successfully')</script>";
}

else 

{
	echo "<script type='text/javascript'>alert('Please try again')</script>";
}

header("Location:index.php");

}
?>