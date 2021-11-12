<?php

$sName = "localhost";
$uName = "root";
$pass  = "";
$db_name = "library";

try {
    $conn = mysqli_connect("localhost","root","","library");

    return $conn;
} catch (PDOException $e) {
    echo "Connection failed : " . $e->getMessage();
}
