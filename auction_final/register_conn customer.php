





<!DOCTYPE html>
<html>

<head>
	<title>Insert page</title>
</head>

<body>
	<center>
		<?php
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'auction';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
		
		
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$gender = $_REQUEST['gender'];
		$address = $_REQUEST['address'];
		$phone = $_REQUEST['phone'];
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
		
	
		$sql = "INSERT INTO cust_registration VALUES ('$first_name',
			'$last_name','$gender','$address','$phone','$email','$password')";
		
		if(mysqli_query($con, $sql)){
			header('location:login as customer.php');
			
		} else{
			echo "registration unsuccessful"
				. mysqli_error($con);
		}
		
		
		mysqli_close($con);
		?>
	</center>
</body>

</html>
