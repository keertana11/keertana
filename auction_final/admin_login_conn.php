
		<?php

				$conn = mysqli_connect("localhost", "root", "", "auction");
		
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		
				$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
		
		
		$sql = "SELECT  `email`, `password` FROM `admin_login` WHERE (email='$email' and password='$password')";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_BOTH);
		$count=mysqli_num_rows($result);
		if($count==1){
		echo "login successful";
		header('location:admin.html');
			
			
		} else{
			echo "login unsuccessful ";
			     header("location:admin_login.php?=1");
				
		}
		
		
		
		?>
	
