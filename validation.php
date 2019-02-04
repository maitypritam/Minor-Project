<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userregistration";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
	echo "";
}
else
{
	die("Connection failed beacuse".mysqli_connect_error());
}
?>