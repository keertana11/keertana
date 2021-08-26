<!DOCTYPE html>
<html lang="en">

<head>
	<title>register</title>
	<link rel="stylesheet"  type="text/css" href="register as customer.css">


<body>
	<div class="registerbox">
		<h1>update seller</h1>

		<form action="seller_account_edit_conn.php" method="post">
			
			<p>
				<label for="Firstname"> Firstname:</label>
				<input type="text" name="first_name">
			</p>

			<p>
				<label for="Lastname"> Lastname:</label>
				<input type="text" name="last_name">
			</p>
				
			<p>
				<label for="Gender">Gender:</label>
				<input type="text" name="gender">
			</p>

			
			
			<p>
				<label for="Address">Address:</label>
				<input type="text" name="address">
			</p>
			
			<p>
				<label for="Phone">Phone Number:</label>
				<input type="tel" name="phone">
			</p>
			
			
			<p>
				<label for="emailAddress">Email Address:</label>
				<input type="text" name="email">
			</p>
			
			<p>
				<label for="Password">Password:</label>
				<input type="password" name="password">
			</p>
			
			<input type="submit" value="edit">
			
		</form>
	</div>
</body>
</head>
</html>
