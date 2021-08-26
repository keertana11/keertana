

<!DOCTYPE html>
<html lang="en">

<head>
	<title>register</title>


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/d1c2ea8b80.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

          <style type="text/css">
          	body
{
	background-image:url(register.jpeg);
	background-size:cover;
	font-family:sans-serif;
}
.registerbox{
width:350px;
height: 800px;

color:white;
top:65%;
left:50%;
position:absolute;
transform:translate(-50%,-50%);
background-color: black;
box-sizing:border-box;
padding:60px 20px;
}
.registerbox h1{
margin: 0;
padding: 0 0 30px;
text-align:center;
font-size: 22px;
}
.registerbox p{
margin: 0;
padding: 0 ;
font-weight:bold;
}
.registerbox input
{
width:100%;
margin-bottom:20px;
}
.registerbox a{
text-decoration:none;
font-sie:12px;
line-height:30px;
color:darkgrey;
}
          </style>




<body>
	<h1 class="text-light text-center mt-3">SELLER REGISTRATION</h1>
	<div class="registerbox m-5">
		

		<form action="register_conn seller.php" method="post">
			
			<p>
				<label for="Firstname"> Firstname:</label>
				<input type="text" name="first_name" id="Firstname" required>
			</p>

			<p>
				<label for="Lastname"> Lastname:</label>
				<input type="text" name="last_name" id="Lastname" required>
			</p>
				
			<p>
				<label for="Gender">Gender:</label>
				<input type="text" name="gender" id="Gender" required>
			</p>

			
			
			<p>
				<label for="Address">Address:</label>
				<input type="text" name="address" id="Address" required>
			</p>
			
			<p>
				<label for="Phone">Phone Number:</label>
				<input type="tel" name="phone" id="Phone" required>
			</p>
			
			
			<p>
				<label for="emailAddress">Email Address:</label>
				<input type="text" name="email" id="emailAddress" required>
			</p>
			
			<p>
				<label for="Password">Password:</label>
				<input type="Password" name="password" id="Password" required>
			</p>
		
			
			<input type="submit" value="Submit" class="btn btn-primary mt-4">

             <div class="text-center">
			<a href="./login as seller.php" class="btn btn-primary text-light">Go to login</a></br>
		</div>

		</form>
	</div>
	
</body>
</head>
</html>
