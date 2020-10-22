<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="voter.css">
</head>
<body background="trial.jpg" id="op">
  <div class="bw" align="center"><a href="result.php">View Results</a></div>

	<h1>ZETECH  VOTING SYSTEM</h1>


	<div align= "center">
		<bt  onclick="document.getElementById('rut').style.display='block'" style="width:auto;"><ty id="sub">Access the System to vote</ty></bt>
<img src="logo.png" class="logo" align="center" ;
>
	<div class="tp" id="rut">

<form class="tp-content animate" method="POST" action="authen_login_index.php">
    <div class="imgpic">
      <span onclick="document.getElementById('rut').style.display='none'" class="close" title="Close tp">&times;</span>
      <img src="avatar.png" alt="Avatar" class="pic">
    </div>

    <div class="pic">
      <label for="uname"><b>User Name</b></label><br/>
      <input type="text" placeholder="Enter Registration Number" name="username" required>
<br/>
      <label for="wrd"><b>PASSWORD</b></label><br/>
      <input type="password" placeholder="Enter IDNumber" name="password" required><br/>
        
      <button class="submit" type="submit">Login</button><br/>
    </div>
  </form>
	</div>
<script>
var tp = document.getElementById('rut');

window.onclick = function(event) {
    if (event.target == tp) {
        tp.style.display = "none";
    }
}
</script>

</div>

</body>
</html>
