<?php
require 'db_conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Online</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="header">
        <div class="inner_header">
            <div class="logo_container">
                <h1>ONLINE<span> LIBRARY</span></h1>
            </div>
            <ul class="navigation">
                <a href='addBooks/carti.php'>
                    <li>Books</li>
                    </a>
                
                <a href='addBooks/addbooks.html'>
                    <li>Add new books</li>
                </a>
                </a>
                <a href="rentedbooks/rentedbooks.php">
                    <li>Rented books</li>
                </a>
                <a href='rentedbooks/addrentedbooks.html'>
                    <li>Add Rented Books</li>
               
                <a href='addClients/clients.php'>
                    <li>Clients</li>
                </a>
                <a href='addClients/addClients.html'>
                    <li>Add new clients</li>
                </a>


            </ul>
        </div>
    </div>

</body>

</html>