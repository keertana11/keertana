<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
	<link rel="stylesheet"  type="text/css" href="login.css">
<body>
	<div class="loginbox">
		<h1>LOGIN HERE</h1>
		<form action="login_conn.php" method="post">
			<p>
				<label for="emailAddress">Email Address:</label>
				<input type="text" name="email" id="emailAddress" required="">
			</p>
			<p>
				<label for="Password">Password:</label>
				<input type="Password" name="password" id="Password" required="">
			</p>
			<input type="submit" value="Submit" class="btn btn-danger text-light">
			<a href="./forgot_password.php" class="btn btn-warning text-light">Forgot  Password</a> 
			<a href="./register.php" class="btn btn-warning text-light">Sign Up</a></br>
		</form>
	</div>
</body>
</head>
</html>
