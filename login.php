<!DOCTYPE html>
<html>
<head>
	<title>Log In - Unknown</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<div class="formDiv">
		<h2>Log In</h2>
		<form action="loginaction.php" method="post" autocomplete>
	  	<div class="con">
	  		<label for="uname">Username: </label><br>
	  		<input type="text" name="uname" class="name" size="40"  placeholder="Username" required><br>
	  		<p class="Err"></p>
	  	</div>
	  	<div class="con">
	  		<label for="password">Password: </label><br>
	  		<input type="password" name="password" class="name" size="40" placeholder="Password" required><br>
	  		<p class="Err"></p>
	  	</div>
	    <input type="submit" value="Log In" class="loginBut">
	  	<a href="#" class="forgot">Forgot Username</a>
	  	<a href="" class="forgot">Forgot Password</a>
  	</form>
  	<hr>
  	<p class="switch">New to Unknown? <a href="signup.php">Sign Up</a> here</p>
  	<a href="index.php" id="home">Back to Home</a>
	</div>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="login.js"></script>
</body>
</html>