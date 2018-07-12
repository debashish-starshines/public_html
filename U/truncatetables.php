<?php
    
    include('dbConfig.php');
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['TRUNCATE']))
    {
        func();
    }
    function func()
    {
        // do stuff   
        mysqli_query($con,'TRUNCATE TABLE images,quotes,thedaytoday');
    }
?>
