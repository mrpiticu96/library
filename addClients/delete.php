<?php
$id = $_GET['id'];
$dbname = "library";
$conn = mysqli_connect("localhost", "root", "", "library");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM clients WHERE id='{$id}'";

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: http://localhost/php-practice/library/addClients/clients.php');
    exit;
} else {
    echo "Error deleting record";
}
