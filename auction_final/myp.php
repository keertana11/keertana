
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
  if(!isset($_SESSION["login as customer"]))
    header("location:login as customer.php");

        

 
     if($_SESSION['email'])
  
    $email=$_SESSION['email'];

    $sql = "SELECT * FROM products where email='$email'";


echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr>
          <td> <font face="Arial">title</font> </td> 
          <td> <font face="Arial">min_price</font> </td> 
          <td> <font face="Arial">categorey</font> </td> 
          <td> <font face="Arial">image</font> </td> 
          <td> <font face="Arial">description</font> </td> 
          <td> <font face="Arial">featured</font> </td>
              
      </tr>';
    $rs= mysqli_query($con, $sql);

    
    while ($row = mysqli_fetch_array($rs)) {
      
        $title = $row["title"];
        $min_price = $row[""];
        $gender = $row["gender"];
        $address = $row["address"];
        $phone= $row["phone"]; 
        $email= $row["email"]; 


        echo '
                  <td>'.$first_name.'</td> 
                  <td>'.$last_name.'</td> 
                  <td>'.$gender.'</td> 
                  <td>'.$address.'</td>
                  <td>'.$phone.'</td> 
                  <td>'.$email.'</td> 
              </tr>';
    }
    $rs->free();
    

?>