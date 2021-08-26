<!DOCTYPE html>
<html lang="en">

<head>
	<title>Reset</title>
	<link rel="stylesheet"  type="text/css" href="reset.css">
<body>
	<div class="resetbox">
		<h1>Customer RESET Password</h1>
		<form action="reset_conn.php" method="post">
			<p>
				<label for="emailAddress">Email Address:</label>
				<input type="text" name="email" id="emailAddress">
			</p>
			<p>
				<label for="new Password">New Password:</label>
				<input type="text" name="password" id="new Password">
			</p>
			<p>
				<label for="confirm Password">Confirm Password:</label>
				<input type="text" name="password" id="confirm Password">
			</p>
			
			<input type="submit" value="submit">
			
		</form>
	</div>
</body>
</head>
</html>
