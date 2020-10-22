<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "voterdb";

$conn = new mysqli($host, $username, $password, $database);

?>
<!DOCTYPE html>
<html>
<head>
	<title>ballot</title>
	<link rel="stylesheet" type="text/css" href="voter.css">
</head>
<body id="op">
	<h5>Ballot page</h5>
	<div class="spade" style="padding-top: 0px; max-height: 550px;" align="center">

	<form method="POST" action="authen_casting_vote.php">
		 President&ensp;&#187;&ensp;&emsp; <select name= "president">
		 <?php
		 $result = mysqli_query($conn, "SELECT name from candidate where position = 'President'");
		 while ($row = mysqli_fetch_array($result))
		 	
		 { ?>
		<option><?php echo $row["name"];?></option>
		<?php } ?></select><br/><br/>
		

			Governor&ensp;&#187;&ensp;&emsp; 
			 <select name= "governor">
		 <?php
		 $res = mysqli_query($conn, "SELECT name from candidate where position = 'Governor'");
		 while($row1 = mysqli_fetch_array($res))
		 {?>
		<option><?php echo $row1['name'];?></option>
		<?php } ?></select><br/><br/>


			Secretary General&ensp;&#187;&ensp;&emsp;
			 <select name="secretarygeneral">
		 <?php
		 $re = mysqli_query($conn, "SELECT name from candidate where position = 'Secretary General'");
		 while($row2 = mysqli_fetch_array($re))
		 {?>
		<option><?php echo $row2['name'];?></option>
		<?php } ?></select><br/><br/>
				
				Student Affair Coodinator&ensp;&#187;&ensp;&emsp;
			 <select name= "studentaffaircoodinator">
		 <?php
		 $rt = mysqli_query($conn, "SELECT name from candidate where position = 'Student Affair Coodinator'");
		 while($row3 = mysqli_fetch_array($rt))
		 {?>
		<option><?php echo $row3['name'];?></option>
		<?php } ?></select><br/><br/>
				
			Sports Chairperson&ensp;&#187;&ensp;&emsp;
			 <select name= "sportschairperson">
		 <?php
		 $rl = mysqli_query($conn, "SELECT name from candidate where position = 'Sports Chairperson'");
		 while($row4 = mysqli_fetch_array($rl))
		 {?>
		<option><?php echo $row4['name'];?></option>
		<?php } ?></select><br/><br/>
				
			Treasurer&ensp;&#187;&ensp;&emsp;
			 <select name= "treasurer">
		 <?php
		 $rs = mysqli_query($conn, "SELECT name from candidate where position = 'Treasurer'");
		 while($row5 = mysqli_fetch_array($rs))
		 {?>
		<option><?php echo $row5['name'];?></option>
		<?php } ?></select><br/>
			<button class="submit" type="submit"> Submit</button>
	</div>

	</form> 
</body>
</html>