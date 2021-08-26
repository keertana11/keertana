<?php 
	require_once 'core/init.php';

  session_start();

  

  $sql = "SELECT * FROM products";
  $featured = $db->query($sql);
if(!isset($_SESSION["login as customer"]))
    header("location:login as customer.php");
     if($_SESSION['email'])
    $email=$_SESSION['email'];

  ?>





<!DOCTYPE html>
<html>
<head>
	<title>products page</title>
	<link rel="stylesheet"
	href="products.css">
	<meta charset="UTF-8">
	<meta name="viewport"
	content="width=device-width, intial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<body>

	<?php
	$sql= "SELECT * FROM categories WHERE parent = 0";
	$pquery = $db->query($sql); ?>






<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Bidding Zone</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">

     <?php while($parent= mysqli_fetch_assoc($pquery)) : ?>
     <?php 
     $parent_id = $parent['id'];
     $sql2 = "SELECT * FROM categories WHERE parent = '$parent_id' ";
     $cquery = $db->query($sql2);
     ?>



     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $parent['category']; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        	<?php while($child = mysqli_fetch_assoc($cquery)) : ?>
          <a class="dropdown-item" href="#"><?php echo $child['category'] ?></a>
         <?php endwhile; ?>

        </div>
      </li>
         <?php endwhile; ?>

          <li class="nav-item">
        <a class="nav-link" href="./editprofile_customercon.php">My Account</a> 
      </li>
        <a class="nav-link" href="./index.html">logout</a>
</ul></div></nav>


<div class="col-md-4"></div>

<!--main content of featured products-->

 
  <div class="bg">
    <h2 class="text-center text-white">FEATURED PRODUCTS</h2>
    <div class="container d-flex flex-column">
   
   
      <?php while($product = mysqli_fetch_assoc($featured)) : ?>
         <div class="card d-flex flex-row" style="width: 55rem; background-color: blanchedalmond;">
    
        
        <img src="<?=$product['image']; ?>" alt="<?=$product['title']; ?>" class="image" id="images" width="200" height="200px"/>
        
        <div class="desc">
         <h4><?= $product['title']; ?></h4>
        <p class="card-text">min_price: <?=$product['min_price']; ?></p>
        <p class="card-text">categorey: <?=$product['categorey']; ?></p>
        <p class="card-text">description: <?=$product['description']; ?></p>
        
       <button  class="btn btn-danger" href="./index.html">Bid Now</button>
      </div>
    </div>
    
    <?php endwhile; ?>
    </div>
  </div>
 
</div>








 
    </ul>
  </div>
</nav>







	</body>