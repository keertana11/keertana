<!DOCTYPE html>
<html lang="en">

<head>
	<title>EDIT PRODUCTS</title>


	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/d1c2ea8b80.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<style type="text/css">
          	body
{
	background-image:url(./images/bg17.webp);
	background-size:cover;
	font-family:sans-serif;
}
.productsbox{
width:400px;
height: 800px;

color:white;
top:80%;
left:50%;
position:absolute;
transform:translate(-50%,-50%);
background-color: black;
box-sizing:border-box;
padding:60px 20px;
}
.productsbox h1{
margin: 0;
padding: 0 0 30px;
text-align:center;
font-size: 22px;
}
.productsbox p{
margin: 0;
padding: 0 ;
font-weight:bold;
}
.productsbox input
{
width:100%;
margin-bottom:20px;
}
.productsbox a{
text-decoration:none;
font-sie:12px;
line-height:30px;
color:darkgrey;
}
          </style>



<body>
	<h1 class="text-white text-center  font-weight-bold mt-5">EDIT PRODUCT </h1>
	<div class="productsbox">
		

		<form action="seller_product_edit_conn.php" method="post">
			<p>
				<label for="title">Email:</label><br>
				<input type="text" name="email" id="email" required="">
			</p>
			
			<p>
				<label for="title">Title:</label><br>
				<input type="text" name="title" id="title" required="">
			</p>

			<p>
				<label for="min_price">Min_bid:</label><br>
				<input type="text" name="min_price" id="min_price" required="">
			</p>

			<p>
				<label for="categorey">Categorey:</label><br>
				<input type="text" name="categorey" id="categorey" required="">
			</p>

			<p>
				<label for="image"> Image:</label><br>
				<input type="text" name="image" id="image" placeholder="select image url" required>
			</p>
				
			<p>
				<label for="date"> End date:</label><br>
				<input type="datetime" name="date" id="date" required="">
			</p>

			
			
			<p>
				<label for="description">Description:</label><br>
				<input type="text" name="description" id="description" required="">
			</p>

			
			
           
           <p>
				<label for="featured">Featured:</label><br>
				<input type="int" name="featured" id="featured" required="" placeholder="Enter 1">
			</p>

			
			
			
			<input type="submit" value="Edit" class="btn btn-warning">
			
		</form>
	</div>
</body>
</head>
</html>
