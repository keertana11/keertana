<!DOCTYPE html>
<html lang="en">

<head>
	<title>ADD PRODUCTS</title>
	<link rel="stylesheet"  href="add_products.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/d1c2ea8b80.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
		body
{
	background-image:url(./images/bg2.webp);
	background-size:cover;
	font-family:sans-serif;
}

.productsbox{
	margin-top: 40px;
width:450px;
height:790px;
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
margin=top: 30px;
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
	<div class="productsbox text-justify ">
		<h1 class="font-weight-bold">ADD PRODUCT </h1>

		<form action="add_products_conn.php" method="post">
			<p>
				<label for="title">Email:</label><br>
				<input type="text" name="email" id="email" placeholder="Enter session email">
			</p>
			
			<p>
				<label for="title">Title:</label> <br>
				<input type="text" name="title" id="title">
			</p>

			<p>
				<label for="min_price">Min_bid:</label> <br>
				<input type="text" name="min_price" id="min_price" placeholder="Enter minimum bid value">
			</p>

			<p>
				<label for="categorey">Category:</label> <br>
				<input type="text" name="categorey" id="categorey">
			</p>

			<p>
				<label for="image"> Image:</label> <br>
				<input type="text" name="image" id="image" placeholder="Enter image url" required>
			</p>
				
			<p>
				<label for="date">End_date:</label> <br>
				<input type="datetime" name="date" id="date">
			</p>
			<p>
				<label for="description">Description:</label> <br>
				<input type="text" name="description" id="description">
			</p>

           
           <p>
				<label for="featured">Featured:</label><br>
				<input type="int" name="featured" id="featured" placeholder="Enter 1">
			</p>

			
			
		
			<input type="submit" value="Submit" class="btn btn-warning ">
	
			
		</form>
	</div>
</body>
</head>
</html>
