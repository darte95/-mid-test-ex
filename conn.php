<?php
// Database connection details
$servername = "kritsadin.cmtc.ac.th";
$username = "kritsadin";
$password = "@ks1234567890";
$dbname = "kritsadin";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
    echo "Connected successfully";
}
