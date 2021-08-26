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

  session_start();

  if(!isset($_SESSION["login as seller"]))
    header("location:login as seller.php");

		$email = mysqli_real_escape_string($con, $_REQUEST['email']);
	
		$title = mysqli_real_escape_string($con, $_REQUEST['title']);
	
		$min_price = mysqli_real_escape_string($con, $_REQUEST['min_price']);
	
		$categorey = mysqli_real_escape_string($con, $_REQUEST['categorey']);
	
		 $image = mysqli_real_escape_string($con, $_REQUEST['image']);
		$date = mysqli_real_escape_string($con, $_REQUEST['date']);
	    $description = mysqli_real_escape_string($con, $_REQUEST['description']);
	


	  
		$featured = mysqli_real_escape_string($con, $_REQUEST['featured']);
	


		$sql="INSERT INTO `products` (`email`, `title`, `min_price`, `categorey`, `image`,`date`, `description`, `featured`) VALUES ('$email', '$title', 
		'$min_price', '$categorey', '$image','$date', '$description',  '$featured')";


	
		
		
		if(mysqli_query($con, $sql)){

			echo "product added";
			$_SESSION['login as seller']="1";
				$_SESSION['email']=$email;
						header('location:myproducts.php');
			
		} else{
			echo "error occured"
				. mysqli_error($con);
		}
		
		
		mysqli_close($con);
		?>
	</center>
</body>

</html>
