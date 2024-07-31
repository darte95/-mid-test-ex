<?php
$servername = "sql311.infinityfree.com";
$username = "if0_37010128";
$password = "PYVNPSicZOyWp";
$dbname = "if0_37010128_kritsadin";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
	echo "connection successful:";
}
?>
