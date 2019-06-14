<?php
session_start();
// Create DB connection
$conn = new mysqli("localhost","root","","DNSComps");
// Check Is connection Working Or Not
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(!empty( $_POST["email"] ) and !empty( $_POST["pass"] ) ) 
{
    $email = $_POST['email'];
	$password = $_POST['pass'] ; 
	$sql = "SELECT id, username, password FROM users where username='$email' and password='$password'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) 
	{
		echo "login successful welcome ". $email;
		$_SESSION['login_user'] = $email;
		header("Location:Home.php");		
	}else 
	{
		//header("Location:login.html");
		echo "Login failed";
	}
}
mysqli_close($conn);
?>