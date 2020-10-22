<!DOCTYPE html>
<html>
<head>
<title>voter</title>
	<link rel="stylesheet" type="text/css" href="voter.css">
</head>
<body id="op">
	<div class="nav">
		<ul>
			<li><a href="addcandidate.php">ADD CANDIDATE</a></li>
			<li><a href="addvoter.php">ADD VOTER</a></li>
			<li><a href="adminindex.php">LOGOUT</a></li>
		</ul>
	</div>
	<table align="center">
		<tr>
			<th><span>Add Voter</span></th>
		</tr>
		<tr>
			<td>
<div class ="adcand">
	<form style="padding-top: 20px" method="POST" action="authen_add_voter.php">
		First Name<br/>
		<input type="text" class="fName" name="firstname" placeholder="Enter First Name"><br/>
		Last Name<br/>
		<input type="text" class="lName" name="lastname" placeholder="Enter Last Name"><br/>
		Regestration Number<br/>
		<input type="text" class="regno" name="regno" placeholder="Enter Regestration Number"><br/>
		ID Number<br/>
		<input type="text" class="ID" name="ID" placeholder="Enter ID Number"><br/>
		Course: </t>
		<select name="dropdown1">
			<option value="Business Administration">Business Administration</option>
			<option value="Accounting and Finance">Accounting and Finance</option>
			<option value="Communication and Mass Media">Communication and Mass Media</option>
			<option value="Education">Education</option>
			<option value="Special Needs Education">Special Needs Education</option>
			<option value="Medicine">Medicine</option>
			<option value="Community Health">Community Health</option>
			<option value="Pharmatology">Pharmatology</option>
			<option value="Enviromental and Earth Science">Enviromental and Earth Science</option>
			<option value="Nutrition and Dietetics">Nutrition and Dietetics</option>
			<option value="Nursing With IT">Nursing With IT</option>
			<option value="Applied Mathematics">Applied Mathematics</option>
			<option value="Acturial Science">Acturial Science</option>
			<option value="Computer Science">Computer Science</option>
			<option value="Information Technology">Information Technology</option>
			<option value="Animal Science">Animal Science</option>
			<option value="Tourism Management">Tourism Management</option>
			<option value="Planning and Architecture">Planning and Architecture</option>
			<option value="Statistics">Statistics</option>
			<option value="Marine Engineering">Marine Engineering</option>
			<option value="Electrical Engineering">Electrical Engineering</option>
		</select><br/><br/>

		<button class= "submit" value="submit"> submit</button>
	</form>
</div>
</td>
</tr>
</table>
</body>
</html>