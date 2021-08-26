<?php 
	require_once 'core/init.php';

  session_start();

  if(!isset($_SESSION["login as seller"]))
    header("location:login as seller.php");
     if($_SESSION['email'])
  {
    
 $email=$_SESSION['email'];
  $sql = "SELECT * FROM products WHERE email='$email' ";
  $featured = $db->query($sql);

}
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
        background-image: url("./images/bg1.webp");
        background-repeat: no-repeat;
        background-size: cover;

      }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/d1c2ea8b80.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>



<!--main content of featured products-->

 

    <h2 class="text-center text-light font-weight-bold m-3 ">MY PRODUCTS</h2>
    <div class="container d-flex flex-column">
   
   
      <?php
       // include "dbConn.php"; // Using database connection file here

       while($product = mysqli_fetch_assoc($featured)) : ?>
         <div class="card d-flex flex-row m-3 border border-danger  rounded-start " style="width: 55rem; ">
    
        
        <img src="<?=$product['image']; ?>" alt="<?=$product['title']; ?>" class="image p-5" id="images" width="200" height="250px"/>
        
        <div class="desc text-justify p-3">
         <h4 class=" font-weight-bold text-underline"><?= $product['title']; ?></h4>
        <!-- <p class="card-text">pid: <?=$product['pid']; ?></p> -->
        <p class="card-text "><b>MIN_BID_PRICE:</b> <?=$product['min_price']; ?></p> 
        
        <p class="card-text"><b>CATEGORY:</b> <?=$product['categorey']; ?></p>
        <p class="card-text text-justify"><B>DESCRIPTION:</B> <?=$product['description']; ?></p>
        <p class="card-text"><b>END DATE:</b> <?=$product['date']; ?></p>
        <button class="btn btn-danger"  onclick="window.location.href='seller_product_edit.php'">Edit</button>
		<button class="btn btn-warning ml-3"  onclick="window.location.href='seller_product_delete.php'">Delete Product</button>
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