
				<?php
					
				
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'auction';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
	session_start();
		$title = $_REQUEST['title'];
		
		$sql = "SELECT email,title,MAX(min_price) FROM bidding WHERE min_price=(SELECT MAX(min_price)  FROM `bidding`  WHERE title='$title' )";
		
		$result=mysqli_query($con,$sql)or die("bad:$sql");mysqli_close($con);
		?>

		<!DOCTYPE html>
		<html>
		<body style="background-color:black;color:white;">
		<?php while($product = mysqli_fetch_assoc($result)) : ?>
         <div class="card d-flex flex-row" style="width: 55rem; background-color:dark;text-align:center;font-weight:bold;">
    <p class="card-text">WINNER:<?=$product['email']; ?></p>  
	<p class="card-text">PRODUCT: <?=$product['title']; ?></p> <p class="card-text">BIDDING VALUE: <?=$product['MAX(min_price)']; ?></p> 
     </div>
    <?php endwhile; ?></body>
		<html>
	