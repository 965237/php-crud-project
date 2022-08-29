<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "project";


$conn = mysqli_connect($host, $user, $password, $dbname);
if (!$conn) {
    die("connection is failed");
}
else {
    echo ""; #"connection successfully";
}


?>