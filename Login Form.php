<?php
session_start();
include("validation.php");
?>
<html lang="en">
<head>
<style>
.heading{
margin-top:50px;
}
body{
background-image: url("bg.jpg");
background-repeat: no-repeat;
}
 .jumbotron{
  background-color:#92a1cf;
  font-family:cursive;
  font-size:15px;
  }
    body{
        background-image: url("background.jpg");
        background-repeat: no-repeat;
    }
    .heading{
        font-family: 'Monoton', cursive;
        color:greenyellow;
        margin-bottom: 0px;
    }
</style>
  <title>CodePlayer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
</head>
<body>

<div class="container">
<div class="heading">
<h1><center>CODEPLAYER</center></h1><br><br>
</div>
  <div class="container">     
    <div class="row">
      <div class="col-sm-4">
	  </div>
	  <div class="col-sm-4">
		<div class="jumbotron">
		<form action="Backend.html" method="post">
		<h2 style="text-shadow:1px 1px 0#444"><center>Login Form</h2><br>
		
			<div class="form-group">
				<h5 style="text-shadow:1px 1px 0#444"><label for="User Name">User Name:</label></h5>
				<input type="text" class="form-control"  placeholder="Enter username" name="username">
			</div>
			<div class="form-group">
				<h5 style="text-shadow:1px 1px 0#444"><label for="pwd">Password:</label></h5>
				<input type="password" class="form-control" placeholder="Enter password" name="password">
			</div>
			<div class="form-group form-check">
				<label class="form-check-label">
				<h5 style="text-shadow:1px 1px 0#444"><input class="form-check-input" type="checkbox" name="remember"> Remember me
				</label></h5>
			</div>
			<button type="submit" name="submit" >Login</button>
			<h5 style="text-shadow:1px 1px 0#444"><a href="Signup.html">signup for new to codeplayer</a></h5>
		</form>
		</div>
		</div>
	</div>
  </div>	
</div>
<?php
if(isset($_POST['submit']))
{
	$user = $_POST['username'];
	$pwd  = $_POST['password'];
	$query = "SELECT * FROM STUDENT WHERE username= '$user' && password= 'pwd'";
	$data = mysqli_query($conn, $query);
	$total = mysqli_num_rows($data);
	if($total==1)
	{
		header('location:Backend.html');
	}
	else "login failed";
	}
	?>