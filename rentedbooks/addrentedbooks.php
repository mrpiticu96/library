<?php
require 'db_conn.php';


if (isset($_POST['submit'])) {
    if (
        isset($_POST['bookname']) && isset($_POST['assignedto']) &&
        isset($_POST['rentdate']) && isset($_POST['returndate']) &&
        isset($_POST['penality'])
    ) {

        $bookname = $_POST['bookname'];
        $assignedto = $_POST['assignedto'];
        $rentdate = $_POST['rentdate'];
        $returndate = $_POST['returndate'];
        $penality = $_POST['penality'];
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "library";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        } else {
            $Insert = "INSERT INTO rentedbooks (bookname, assignedto, rentdate, returndate, penality) values(?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($Insert);
            $stmt->bind_param("sssss", $bookname, $assignedto, $rentdate, $returndate, $penality);
            if ($stmt->execute()) {
                return header("Location: http://localhost/php-practice/library/rentedbooks/addrentedbooks.html");;
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
