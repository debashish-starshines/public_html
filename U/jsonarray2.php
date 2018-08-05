<?php
    //open connection to mysql db
   /* $connection = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","b417e473b8c444","35ca274c","heroku_2de0804174260de") or die("Error " . mysqli_error($connection));
    //fetch table rows from mysql db
    $sql = "select * from quotes";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    //echo json_encode($emparray);
    echo json_encode(array('igloo' => $emparray)) ;

    //close the db connection
    mysqli_close($connection); */

    $username="b417e473b8c444";  
    $password="35ca274c";  
    $hostname = "us-cdbr-iron-east-04.cleardb.net";  
    //connection string with database  
    $dbhandle = mysql_connect($hostname, $username, $password)  
    or die("Unable to connect to MySQL");  
    echo "Connected to MySQL<br>";  
    // connect with database  
    $selected = mysql_select_db("heroku_2de0804174260de",$dbhandle)  
    or die("Could not select database");  
    //query fire  
    $result = mysql_query("SELECT * FROM quotes");  
    $json_response = array();  
    // fetch data in array format  
    while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {  
    // Fetch data of Fname Column and store in array of row_array  
    $row_array['name'] = $row['name'];  
    //push the values in the array  
    array_push($json_response,$row_array);  
    }  
    //  
    echo json_encode($json_response); 
?>
