<!DOCTYPE html>
<html lang="en">


<head>
	<title>winner</title>
	<link rel="stylesheet"  type="text/css" href="add_products.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/d1c2ea8b80.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <style type="text/css">
		body
{
	background-image:url(./images/bg6.webp);
	background-size:cover;
	font-family:sans-serif;
}

.productsbox{
width:350px;
height:520px;
background: black;
color:white;
top:50%;
left:50%;
position:absolute;
transform:translate(-50%,-50%);
box-sizing:border-box;
padding:60px 20px;
}
.productsbox h1{
margin: 0;
padding: 0 0 30px;
text-align:center;
font-size: 30px;
}
.productsbox p{
margin: 0;
padding: 0 ;
font-weight:bold;
}
.productsbox input
{
width:80%;
margin-bottom:20px;
}



</style>



<body>
	<div class="productsbox">
		<h1>Enter Details</h1>

		<form action="bidding_result_conn.php" method="post">
					
			<p>
				<label for="title">Product Title:</label>
				<input type="text" name="title" id="title" required="">
			</p>
			
			<input type="submit" value="1 2 3 GO " id="submit" class="btn btn-warning">
			
		</form>
	</div>
</body>
</head>
</html>
