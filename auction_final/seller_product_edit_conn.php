
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
		$categorey = $_REQUEST['categorey'];
		$image = $_REQUEST['image'];$date = $_REQUEST['date'];
		$description = $_REQUEST['description'];
		$featured = $_REQUEST['featured'];
		
	
		$sql = "UPDATE products SET email='$email',title='$title',min_price='$min_price',categorey='$categorey',image='$image',date='$date',description='$description',featured='$featured' WHERE email='$email' and title='$title'";
		
		if(mysqli_query($con, $sql)){
			header('location:seller_home.php');
			
		} else{
			echo "registration unsuccessful"
				. mysqli_error($con);
		}
		
		
		mysqli_close($con);
		?>
	</center>
</body>

</html>
