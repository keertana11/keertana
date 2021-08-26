
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



	

		
		$name = $_REQUEST['name'];
		$email= $_REQUEST['email'];
		$phone = $_REQUEST['phone'];
		$comments = $_REQUEST['comments'];
		
	
		$sql = "INSERT INTO `contact`( `name`, `email`, `phone`, `comments`) VALUES ('$name','$email','$phone','$comments')";
		
		if(mysqli_query($con, $sql)){
			header('location:contact_success.html');
			
		} else{
			header('location:contact_unsuccess.html');
		}
		
		
		mysqli_close($con);
		?>
	</center>
</body>

</html>
