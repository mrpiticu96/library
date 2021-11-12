<?php
require 'db_conn.php';


if (isset($_POST['submit'])) {
    if (
        isset($_POST['title']) && isset($_POST['author']) &&
        isset($_POST['genre']) && isset($_POST['pages']) &&
        isset($_POST['status']) && isset($_POST['assignedto'])
    ) {

        $title = $_POST['title'];
        $author = $_POST['author'];
        $genre = $_POST['genre'];
        $pages = $_POST['pages'];
        $status = $_POST['status'];
        $assignedto = $_POST['assignedto'];
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "library";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        } else {
            $Insert = "INSERT INTO books (title, author, genre, pages, status, assignedto) values(?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($Insert);
            $stmt->bind_param("ssssss", $title, $author, $genre, $pages, $status, $assignedto);
            if ($stmt->execute()) {
                return header("Location: http://localhost/php-practice/library/addBooks/addbooks.html");;
            } else {
                echo $stmt->error;
            }



            $stmt->close();
            $conn->close();
        }
    } else {
        echo "All field are required.";
        die();
    }
} else {
    echo "Submit button is not set";
}
