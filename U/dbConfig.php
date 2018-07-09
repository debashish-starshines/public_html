<?php

// Database configuration

$dbHost     = "localhost";

$dbUsername = "id6050580_igloo";

$dbPassword = "qwerty123";

$dbName     = "id6050580_igloo";



// Create database connection

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);



// Check connection

if ($db->connect_error) {

    die("Connection failed: " . $db->connect_error);

}

?>