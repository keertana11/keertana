
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



	

		
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
		
		
	
		$sql = "UPDATE admin_login SET email='$email',password='$password'";
		
		if(mysqli_query($con, $sql)){
			header('location:admin_login.php');
			
		} else{
			echo "registration unsuccessful"
				. mysqli_error($con);
		}
		
		
		mysqli_close($con);
		?>
	</center>
</body>

</html>
