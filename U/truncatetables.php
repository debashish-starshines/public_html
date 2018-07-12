<?php

$dbHost     = "us-cdbr-iron-east-04.cleardb.net";
$dbUsername = "b417e473b8c444";
$dbPassword = "35ca274c";
$dbName     = "heroku_2de0804174260de";

$link = mysqli_connect('$dbHost', '$dbUsername', '$dbPassword');//,'$dbName'
if (!$link) {
    die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully';

    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['TRUNCATE']))
    {
        func();
    }
    function func()
    {
        // do stuff   
        mysqli_query($link,'TRUNCATE TABLE images,quotes,thedaytoday');
    }
mysqli_close($link);
?>
