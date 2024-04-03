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

// $create_query = "CREATE TABLE USERINFO(
//     NAME varchar(255),
//     PASSWORD varchar(255)
// )";

// if (mysqli_query($con,$create_query)) {
//     echo "Table craeted";
// }

$insert_query = "INSERT INTO USERINFO(NAME,PASSWORD) VALUES ('NEHANSHU','123@')";

if (mysqli_query($con,$insert_query)) {
    echo "Data Uploaded to the Db";
}

?>
