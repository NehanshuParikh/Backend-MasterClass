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

$create_query = "CREATE TABLE USERINFO(
    NAME varchar(255),
    PASSWORD varchar(255)
)";


// mysqli_query functions returns true or false if connection is secure and safe with DB and your sql query is good to go then it will return true either it will return false
if (mysqli_query($con,$create_query)) {
    echo "Table craeted";
}

?>
