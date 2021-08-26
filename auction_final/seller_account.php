<?php 
	require_once 'core/init.php';

  session_start();

  if(!isset($_SESSION["login as seller"]))
    header("location:login as seller.php");
     if($_SESSION['email'])
  {
    
 $email=$_SESSION['email'];
  $sql = "SELECT * FROM seller_registration WHERE email='$email' ";
  $featured = $db->query($sql);

}
  ?>





<!DOCTYPE html>
<html>
<head>
	<title>my account</title>



  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/d1c2ea8b80.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<meta charset="UTF-8">
	<meta name="viewport"
	content="width=device-width, intial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


<style type="text/css">
  body{
    background-image: url("./images/bg3.webp");
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>

</head>
<body>



<!--main content of featured products-->

 
  <div class="bg">
    <h2 class="text-center text-white  font-weight-bold mt-5">MY ACCOUNT</h2>
    <div class="container d-flex flex-column text-justify">
   
   
      <?php
       // include "dbConn.php"; // Using database connection file here

       

    
    while ($product = mysqli_fetch_array($featured)) : ?>
         <div class="card d-flex flex-product  p-3" style="width: 30rem; margin-top: 50px; margin-left: 200px; background-color: blanchedalmond;">
    
        
        
        
        <div class="desc text-justify">

        <!-- <p class="card-text">pid</p> -->
        <p class="card-text p-2"><b>FIRST NAME:</b> <?=$product['first_name']; ?></p>
        <p class="card-text p-2"><b>LAST NAME:</b> <?=$product['last_name']; ?></p>
        <p class="card-text p-2"><b>GENDER:</b> <?=$product['gender']; ?></p>
		 <p class="card-text p-2"><b>ADDRESS:</b> <?=$product['address']; ?></p>
		  <p class="card-text p-2"><b>PHONE:</b> <?=$product['phone']; ?></p>
		   <p class="card-text p-2"><b>EMAIL:</b> <?=$product['email']; ?></p>
        <button class="btn btn-danger "  onclick="window.location.href='seller_account_edit.php'">Edit</button>
		<button class="btn btn-warning ml-4"  onclick="window.location.href='seller_account_delete.php'">Delete Account</button>
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