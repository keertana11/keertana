<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/d1c2ea8b80.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
          	body
{
	background-image:url(./images/bg12.webp);
	background-size:cover;
	font-family:sans-serif;
}
.resetbox{
width:350px;
height: 300px;

color:white;
top:50%;
left:50%;
position:absolute;
transform:translate(-50%,-50%);
background-color: black;
box-sizing:border-box;
padding:60px 20px;
}
.resetbox h1{
margin: 0;
padding: 0 0 30px;
text-align:center;
font-size: 22px;
}
.resetbox p{
margin: 0;
padding: 0 ;
font-weight:bold;
}
.resetbox input
{
width:100%;
margin-bottom:20px;
}
.resetbox a{
text-decoration:none;
font-sie:12px;
line-height:30px;
color:darkgrey;
}
          </style>


<head>
	<title>Seller Reset Password</title>
	<link rel="stylesheet"  type="text/css" href="reset.css">
<body>
	<div class="resetbox">
		<h1> RESET Password</h1>
		<form action="seller_reset_conn.php" method="post">
			<p>
				<label for="emailAddress">Email Address:</label>
				<input type="text" name="email" id="email" required="">
			</p>
			<p>
				<label for="new Password">New Password:</label>
				<input type="Password" name="password" id="password" required="">
			</p>
			
			<input type="submit" value="submit" class="btn btn-danger">
			
		</form>
	</div>
</body>
</head>
</html>
