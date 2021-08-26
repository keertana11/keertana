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

	<meta charset="UTF-8">
	<meta name="viewport"
	content="width=device-width, intial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <style type="text/css">

    body{
        background-image: url("./images/bg-4.webp");
        background-repeat: no-repeat;
        background-size: cover;

      }
      </style>

</head>
<body>

	





<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Bidding Zone</a>

  <a class="navbar-brand ml-auto mr-auto font-weight-bold ml-5 "  href="#">CUSTOMER PAGE   </a>
  
  
    <ul class="navbar-nav ml-auto">
<li class="nav-item">
<button class="btn btn-success"  onclick="window.location.href='bidding.php'">Bid Now</button></li>
          <li class="nav-item">
		  <button class="btn btn-danger ml-3"  onclick="window.location.href='bidding_result.php'">Bid Result</button></li>
             </li>
             
	  <li class="nav-item ml-auto">
         <a class="nav-link" href="./customer_account.php">My Account</a> 
      </li>
      <li>
        <a class="nav-link" href="./index.html">logout</a>
      </li>
     
</ul></nav>


<div class="col-md-4"></div>

<!--main content of featured products-->

 
  <div class="bg">
    <h2 class="text-center  font-weight-bold m-3 text-primary">FEATURED PRODUCTS</h2>
    <div class="container d-flex flex-column">
   
   
      <?php while($product = mysqli_fetch_assoc($featured)) : ?>
         <div class="card d-flex flex-row m-3 border border-secondary  rounded-start "style="width: 55rem; ">
    
        
        <img src="<?=$product['image']; ?>" alt="<?=$product['title']; ?>" class="image" id="images"  height="250px"/>
        
        <div class="desc desc text-justify p-3">
              <h4 class=" font-weight-bold text-underline"><?= $product['title']; ?></h4>
         
        <p class="card-text"><b>Min_bid:</b> <?=$product['min_price']; ?></p>
        <p class="card-text"><b>Categorey:</b> <?=$product['categorey']; ?></p>
        <p class="card-text"><b>Description:</b> <?=$product['description']; ?></p>
    <p class="card-text"><b>End_date:</b> <?=$product['date']; ?></p>
        
       
      </div>    </div>
    
    <?php endwhile; ?>
    </div>
  </div>
 
</div>








 
    </ul>
  </div>
</nav>







	</body>