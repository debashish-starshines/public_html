<?php

// Database configuration

$dbHost     = "us-cdbr-iron-east-04.cleardb.net";

$dbUsername = "b417e473b8c444";

$dbPassword = "35ca274c";

$dbName     = "heroku_2de0804174260de";



// Create database connection

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);



// Check connection

if ($db->connect_error) {

    die("Connection failed: " . $db->connect_error);

}

?>
