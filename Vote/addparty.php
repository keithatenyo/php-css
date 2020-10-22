<!DOCTYPE html>
<html>
<head>
	<title>party</title>
	<link rel="stylesheet" type="text/css" href="css\voter.css">
</head>
<body id="op">
	
	<div class="nav">
		<ul>
			<li><a href="addparty.php">ADD PARTY</a></li>
			<li><a href="addcandidate.php">ADD CANDIDATE</a></li>
			<li><a href="addvoter.php">ADD VOTER</a></li>
			<li><a href=""> <img src="avatar.png" width="20" height="20"></a></li>
		</ul>
	</div>
	<table align="center">
		<tr>
			<th align="left"><span>Add party</span></th>
			<th align="left">List Parties</th>
		</tr><td>
		
<div class ="adparty">

	<form  method="POST" action="authen_add_party.php">

		<input type="text" class="pty" placeholder="Enter party" name="party"><br/>

		<button class= "submit"> submit</button>
	</form>
	
</div>
</td>

<td>
<div class ="partylist">
</div><br/>
</td>
</tr>
</table>
	
</body>
</html>