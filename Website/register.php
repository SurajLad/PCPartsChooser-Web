<?php
$link = mysqli_connect("localhost", "root", "", "DNSComps");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
	$email = $_POST['email1'];
	$password = $_POST['pass1'] ;
	$name = $_POST['name'] ; 
	$sql = "INSERT Into Users (username, password, name) VALUES ('$email', '$password', '$name')";
	
if(mysqli_query($link, $sql)){
    echo "Registered inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

