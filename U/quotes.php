<?php
// Include the database configuration file
include 'dbConfig.php';

if (!$_POST) {}

else{



$connect = new mysqli("us-cdbr-iron-east-04.cleardb.net", "b417e473b8c444", "35ca274c", "heroku_2de0804174260de");

if ($_FILES['csv']['size'] > 0) {

    //get the csv file 

    $file1 = $_FILES['csv']['tmp_name']; 

    $handle1 = fopen($file1, "r");

    $i = 0;

    while (($data = fgetcsv($handle1, 1000, ",")) !== FALSE) {

        if ($i > 0) {



$import2 = "INSERT into quotes(id,name) values('$data[0]','$data[1]')";

            $connect->query($import2);

        }

       

       $i++;

    }

    fclose($handle1);

    print "Import done";

}

else{

    echo '<script language="javascript">';

    echo 'alert("Select a file to upload")';

echo '</script>';

}



}

?>
