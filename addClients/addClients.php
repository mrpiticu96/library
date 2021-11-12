<?php
if (isset($_POST['submit'])) {
    print_r($_POST);
    if (
        isset($_POST['name']) && isset($_POST['primaryname']) &&
        isset($_POST['university']) && isset($_POST['yearofstudy']) &&
        isset($_POST['subjectmatter'])
    ) {

        $name = $_POST['name'];
        $primaryname = $_POST['primaryname'];
        $university = $_POST['university'];
        $yearofstudy = $_POST['yearofstudy'];
        $subjectmatter = $_POST['subjectmatter'];
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "library";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        } else {
            $Insert = "INSERT INTO clients(name, primaryname, university, yearofstudy, subjectmatter) values(?, ?, ?, ?, ?)";




            $stmt = $conn->prepare($Insert);
            $stmt->bind_param("sssss", $name, $primaryname, $university, $yearofstudy, $subjectmatter);
            if ($stmt->execute()) {
                return header("Location: http://localhost/php-practice/library/addClients/addClients.html");;
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
