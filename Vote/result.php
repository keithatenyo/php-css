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
	<title>result page</title>
	<link rel="stylesheet" type="text/css" href="voter.css">
</head>
<body id="op">
	<h5>Election Results</h5>
<table align="center">
	<tr>
		<td>President</td>
	</tr>
	<tr><td bgcolor="cornsilk">
		Kim Adrew : <?php

		$result = mysqli_query($conn, "SELECT count(president) AS Kim from `ballot` where president = 'Kim Adrew'");
		$values=mysqli_fetch_assoc($result);
		$num = $values['Kim'];
		echo $num;
		?><br>

		Kinanjui Ogola : <?php

		$result = mysqli_query($conn, "SELECT count(president) AS Kinanjui from `ballot` where president = 'kinanjui ogola'");
		$values=mysqli_fetch_assoc($result);
		$num = $values['Kinanjui'];
		echo $num;
		?>
	
</td></tr>
</table>
<table align="center">
	<tr>
		<td>Governor</td>
	</tr>
	<tr><td bgcolor="cornsilk">
		Jerr Juma : <?php

		$result = mysqli_query($conn, "SELECT count(governor) AS jerr from `ballot` where governor = 'Jerr Juma'");
		$values=mysqli_fetch_assoc($result);
		$num = $values['jerr'];
		echo $num;
		?><br/>

		Lester Anindo : <?php

		$result = mysqli_query($conn, "SELECT count(governor) AS lester from `ballot` where governor = 'lester anindo'");
		$values=mysqli_fetch_assoc($result);
		$num = $values['lester'];
		echo $num;
		?>
	</td></tr>
</table>
<table align="center">
	<tr>
		<td>Secretry General</td>
	</tr>
	<tr><td bgcolor="cornsilk">
		Harnis Wangate : <?php

		$result = mysqli_query($conn, "SELECT count(secretarygeneral) AS harnis from `ballot` where secretarygeneral = 'Harnis Wangate'");
		$values=mysqli_fetch_assoc($result);
		$num = $values['harnis'];
		echo $num;
		?><br/>

		Vincent Sankuli : <?php

		$result = mysqli_query($conn, "SELECT count(secretarygeneral) AS vincent from `ballot` where secretarygeneral = 'vincent sankuli'");
		$values=mysqli_fetch_assoc($result);
		$num = $values['vincent'];
		echo $num;
		?>
	</td></tr>
</table>
<table align="center">
	<tr>
		<td>Student Affair Coodinator</td>
	</tr>
	<tr><td bgcolor="cornsilk">
		John Ndegwa : <?php

		$result = mysqli_query($conn, "SELECT count(studentaffair_coodinator) AS john from `ballot` where studentaffair_coodinator = 'john ndegwa'");
		$values=mysqli_fetch_assoc($result);
		$num = $values['john'];
		echo $num;
		?><br/>

		Samwel Mwatate : <?php

		$result = mysqli_query($conn, "SELECT count(studentaffair_coodinator) AS sam from `ballot` where studentaffair_coodinator = 'samwel mwatate'");
		$values=mysqli_fetch_assoc($result);
		$num = $values['sam'];
		echo $num;
		?>

	</td></tr>
</table>
<table align="center">
	<tr>
		<td>Sports Chair Person</td>
	</tr>
	<tr><td bgcolor="cornsilk">
		Kilo Shangu : <?php

		$result = mysqli_query($conn, "SELECT count(sportschairperson) AS kilo from `ballot` where sportschairperson = 'Kilo Shangu'");
		$values=mysqli_fetch_assoc($result);
		$num = $values['kilo'];
		echo $num;
		?><br/>
		Mike Wanjala : <?php

		$result = mysqli_query($conn, "SELECT count(sportschairperson) AS mike from `ballot` where sportschairperson = 'mike wanjala'");
		$values=mysqli_fetch_assoc($result);
		$num = $values['mike'];
		echo $num;
		?>

	</td></tr>
</table>
<table align="center">
	<tr>
		<td>Treasurer</td>
	</tr>
	<tr><td bgcolor="cornsilk">
		Mwenje David : <?php

		$result = mysqli_query($conn, "SELECT count(treasurer) AS mwenje from `ballot` where treasurer = 'mwenje david'");
		$values=mysqli_fetch_assoc($result);
		$num = $values['mwenje'];
		echo $num;
		?><br/>
		Ricardo Alejandro : <?php

		$result = mysqli_query($conn, "SELECT count(treasurer) AS ric from `ballot` where treasurer = 'Ricardo Alejandro'");
		$values=mysqli_fetch_assoc($result);
		$num = $values['ric'];
		echo $num;
		?>
	</td></tr>
</table>

</body>
</html>