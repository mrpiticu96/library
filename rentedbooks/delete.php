<?php
$id = $_GET['id'];
$dbname = "library";
$conn = mysqli_connect("localhost", "root", "", "library");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM rentedbooks WHERE id='{$id}'";

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: http://localhost/php-practice/library/rentedbooks/rentedbooks.php');
    exit;
} else {
    echo "Error deleting record";
}
