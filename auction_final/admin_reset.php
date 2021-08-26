<!DOCTYPE html>
<html lang="en">

<head>
	<title>Admin Reset Password</title>
	<link rel="stylesheet"  type="text/css" href="reset.css">
<body>
	<div class="resetbox">
		<h1> RESET Password</h1>
		<form action="admin_reset_conn.php" method="post">
			<p>
				<label for="emailAddress">Email Address:</label>
				<input type="text" name="email" id="email">
			</p>
			<p>
				<label for="new Password">New Password:</label>
				<input type="text" name="password" id="password">
			</p>
			
			
			<input type="submit" value="submit">
			
		</form>
	</div>
</body>
</head>
</html>
