
		<?php

				$conn = mysqli_connect("localhost", "root", "", "pdatabase");
		
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		
				$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
		
		
		$sql = "SELECT  `email`, `password` FROM `register` WHERE (email='$email' and password='$password')";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_BOTH);
		$count=mysqli_num_rows($result);
		if($count==1){
		header('location:user.php');
			
		} else{
			echo "login unsuccessful "
				. mysqli_error($conn);
		}
		
		
		mysqli_close($conn);
		?>
	
