		<?php
  session_start();
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
		
		
		
		
		     if(isset($_REQUEST['submit']))
		     {
				$email =$_REQUEST['email'];
		       $password = $_REQUEST['password'];
		
		$sql= "SELECT `email` `password` FROM `cust_registration` WHERE email='$email' and password='$password' ";
		$res=mysqli_query($con,$sql);
		$result=mysqli_fetch_array($res);
	
		if($result){
				$_SESSION['login as customer']="1";
				$_SESSION['email']=$email;

		header('location:customer_home.php');
			
		} else{
			echo "login unsuccessful ";
				header("location:login as customer.php?=1");
		}
		
		}
	
	
		?>
	
