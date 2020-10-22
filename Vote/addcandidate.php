<!DOCTYPE html>
<html>
<head>
	<title>candidate</title>
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
			<th><span>Add Candidate</span></th>
			
		</tr>
		<tr>
			<td>
<div class ="adcand">

	<form style="padding-top: 20px" method="POST" action="authen_add_candidate.php">
		Name<br/>
		<input type="text" class="pty" name="name" placeholder="Enter Name"><br/>
		Position Vied For: </t>
		<select name="dropdown">
			<option value="President">President</option>
			<option value="Governor">Governor</option>
			<option value="Secretary General">Secretary General</option>
			<option value="Student Affair Coodinator">Student Affair Coodinator</option>
			<option value="Sports Chairperson">Sports Chairperson</option>
			<option value="Treasurer">Treasurer</option>
		</select><br/><br/>
		<button class= "submit"> submit</button>
	</form>

</div>
</td>
</td>
</tr>
</table>
</body>
</html>