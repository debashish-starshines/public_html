<?php
$servername = "us-cdbr-iron-east-04.cleardb.net";
$username = "b417e473b8c444";
$password = "35ca274c";
$dbname = "heroku_2de0804174260de";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to truncate table
$sql = "TRUNCATE TABLE images";//,quotes,thedaytoday

if ($conn->query($sql) === TRUE) {
    echo "Tables truncated successfully";
} else {
    echo "Error truncating table: " . $conn->error;
}

$conn->close();

 
?>
