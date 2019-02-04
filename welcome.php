<?php include('Signup.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
.heading{
margin-top:50px;
}
body{
        background-image: url("background.jpg");
        background-repeat: no-repeat; O
    }
    .heading{
        font-family: 'Monoton', cursive;
        color:greenyellow;
        margin-bottom: 0px;
    }
</style>
  <title>Code Learner</title>
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
      <div class="col-sm-12">
		<div class="jumbotron">
		<form method="post" action="Signup.php">
		<?php include('errors.php'); ?>
			<div class="form-group">
				<label for="username">Username:</label>
				<input type="username" class="form-control" id="username" placeholder="Enter username" name="username" required>
			</div>
			
			<div class="form-group">
				<label for="email">EMAIL:</label>
				<input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
			</div>
			<div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
			</div>
			<div class="form-group">
				<label for="cnfrmpwd">Confirm Password:</label>
				<input type="password" class="form-control" id="cnfrmpwd" placeholder="Re-Enter password" name="confirmpswd" required>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			<h5 style="text-shadow:1px 1px 0#444"><a href="Login form.html">Already User? Login!</a></h5>
		</form>
		</div>
	</div>
  </div>	
</div>
</html>