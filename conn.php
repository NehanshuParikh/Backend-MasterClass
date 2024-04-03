<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo1";

$con = mysqli_connect($servername,$username,$password,$dbname);

if (!$con) {
    echo "Error in coonection";
} else {
    echo "Connection successfull";
}

?>
