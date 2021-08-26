
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
		$title = $_REQUEST['title'];
		$min_price= $_REQUEST['min_price'];
				
	
		$sql = "INSERT INTO bidding VALUES ('$email',
			'$title','$min_price')";
		
		if(mysqli_query($con, $sql)){
			header('location:bid_success.html');
			
		} else{
			header('location:bid_unsuccess.html');
				
		}
		
		
		mysqli_close($con);
		?>
	</center>
</body>

</html>
