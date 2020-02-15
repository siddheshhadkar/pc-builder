<!DOCTYPE html>
<html>
<head>
	<title>Sign Up - Unknown</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<div class="formDiv">
		<h2>Sign Up</h2>
		<form action="signupaction.php" method="post" autocomplete>
	  	<div class="con">
	  		<label for="email">Email:</label><br>
	  		<input type="email" name="email" class="name" size="40" required placeholder="Email"><br>
	  		<p class="Err"></p>
	  	</div>
	  	<div class="con">
	  		<label for="uname">Username:</label><br>
	  		<input type="text" name="uname" class="name" size="40" placeholder="Username" required><br>
	  		<p class="Err"></p>
	  	</div>
	  	<div class="con">
	  		<label for="password">Password:</label><br>
	  		<input type="password" name="password" class="name" size="40" placeholder="Password" required><br>
	  		<p class="Err"></p>
	  	</div>
	  	<div class="con">
	  		<label for="rpassword">Retype Password:</label><br>
	  		<input type="password" name="rpassword" class="name" size="40" placeholder="Retype Password" required><br>
	  		<p class="Err"></p>
	  	</div>
		<input type="submit" value="Sign Up" class="loginBut">
  	</form>
  	<hr>
  	<p class="switch">Already have an account? <a href="login.php">Log In</a> here</p>
  	<a href="index.php" id="home">Back to Home</a>
	</div>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="login.js"></script>
</body>
</html>