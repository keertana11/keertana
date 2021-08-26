<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<style type="text/css">
      body{
        background-image: url("./images/bg15.webp");
        background-repeat: no-repeat;
        background-size: cover;

      }


.feedback{
width:350px;
height: 500px;

top:50%;
left:50%;
position:absolute;
transform:translate(-50%,-50%);
background-color: black;
box-sizing:border-box;
padding:60px 20px;
}
.feedback h1{
margin: 0;
padding: 0 0 30px;
text-align:center;
font-size: 22px;
}
.feedback p{
margin: 0;
padding: 0 ;
font-weight:bold;
}
.feedback input
{
width:100%;
margin-bottom:20px;
}
.feedback a{
text-decoration:none;
font-sie:12px;
line-height:30px;
color:darkgrey;
}
          </style>



    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/d1c2ea8b80.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




</head>
<body>

		<h1 class="text-dark font-weight-bold text-center m-5">CONTACT US</h1>
		<div class="feedback">

		<form style=" text-align:center;" action="contact_conn.php" method="post">
			
			<p  >
				<label class="text-light " for="name"> Name:</label><br>
				<input  type="text" name="name"id="name" required>
			</p>

			<p >
				<label  class="text-light" for="Email">Email:</label><br>
				<input type="email" name="email" id="email" required>
			</p>

			
			<p >
				<label  class="text-light" for="Phone">Phone Number:</label><br>
				<input type="tel" name="phone"id="phone" required>
			</p>
			
			
						
			<p >
				<label class="text-light" for="Comments">Comment:</label><br>
				<textarea name="comments"  rows="3" cols="28" rows="5"  placeholder="Comments"  id="comments"required></textarea> 
			</p>
			
			<input type="submit" value="submit" class="btn btn-success mt-5">
			
		</form>
	</div>
</body>

</html>

