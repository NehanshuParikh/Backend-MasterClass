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

$name = $_POST['name'];
$password = $_POST['password'];

$insertquery = "INSERT INTO userinfo(NAME,PASSWORD)VALUES('$name','$password')";

if (mysqli_query($con,$insertquery)) {
    echo "Data inserted from the form";
}

?>
