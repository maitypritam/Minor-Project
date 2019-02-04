<?php
session_start();
$con = mysqli_connect('localhost','root', '', 'userregistration');
$username = $_POST['username'];
$mail = $_POST['email'];
$password = $_POST['password'];

$s = " select * from usertable where username = '$username'";
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
if($num == 1) {
	echo "username not available";
}
else{
	$reg= " insert into usertable(username,email,password) values('$username', '$mail', '$password')";
	mysqli_query($con, $reg);
	echo "Registration Successfull";
	
}
?>
<html>
<a href="Login form.php">Login Now</a>
</html> 