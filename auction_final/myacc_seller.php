
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
    if(isset($_POST['edit']))
 {    $id=$_SESSION['id'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
     $gender=$_POST['gender'];
      $address=$_POST['address'];
       $phone=$_POST['phone'];
    $email=$_POST['email'];    
    $select= "select * from users where id='$id'";
    $sql = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($sql);    $res= $row['id'];
    if($res === $id)
    {
   
       $update = "update users set first_name='$first_name',last_name='$last_name', gender='$gender', address='$address', phone='$phone', email='$email' where id='$id'";
       $sql2=mysqli_query($conn,$update);if($sql2)
       { 
           /*Successful*/
           header('location:Dashboard.php');
       }
       else
       {
           /*sorry your profile is not update*/
           header('location:Profile_edit_form.php');
       }
    }
    else
    {
        /*sorry your id is not match*/
        header('location:Profile_edit_form.php');
    } }?>

