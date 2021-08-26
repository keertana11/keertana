<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
	<link rel="stylesheet"  type="text/css" href="login.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/d1c2ea8b80.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
	<div class="loginbox">
		<h1 CLASS="font-weight-bold">SELLER LOGIN</h1>
		<form action="login_conn seller.php" method="post">
			<p>
				<label for="emailAddress">Email Address:</label>
				<input type="text"  name="email" id="emailAddress" required>
			</p>
			<p>
				<label for="Password">Password:</label>
				<input type="Password"  name="password" id="Password" required>
			</p>
			<input type="submit" value="Submit" name="submit" class="btn btn-danger">

			<br>
			<?php
			if(isset($_REQUEST["err"]))
				$msg="INVALID USERNAME";
			?>
			<?php if(isset($msg))
			{
				echo $msg;
			}

			?>
			
			<a href="./seller_reset.php" class="btn btn-warning text-light" >Forgot Password</a> 
			<a href="./register as seller.php" class="btn btn-warning text-light ml-3">Sign Up</a></br>
		</form>
	</div>
</body>
</head>
</html>