<?php
    //open connection to mysql db
    $connection = mysqli_connect("localhost","id6050580_igloo","qwerty123","id6050580_igloo") or die("Error " . mysqli_error($connection));

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
    mysqli_close($connection);
?>