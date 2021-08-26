
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
	session_start();



	

		
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$gender = $_REQUEST['gender'];
		$address = $_REQUEST['address'];
		$phone = $_REQUEST['phone'];
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
		
	
		$sql = "UPDATE seller_registration SET first_name='$first_name',last_name='$last_name',gender='$gender',address='$address',phone='$phone',email='$email',password='$password' WHERE email='$email'";
		
		if(mysqli_query($con, $sql)){
			header('location:admin.html');
			
		} else{
			echo "registration unsuccessful"
				. mysqli_error($con);
		}
		
		
		mysqli_close($con);
		?>
	</center>
</body>

</html>
