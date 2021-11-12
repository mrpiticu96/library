<?php
require 'db_conn.php';

if (isset($_POST["search"]) && empty($_POST["query"]) === false) {
  // MySQL Injection 
  $genre = mysqli_real_escape_string($conn, $_POST["query"]);

  $sql = "SELECT * FROM books WHERE genre='$genre'";

  $results = mysqli_query($conn, $sql);

  $res = mysqli_fetch_assoc($results);
} else {
  
  $select = "SELECT * FROM books";


  $results = mysqli_query($conn, $select);


  $res = mysqli_fetch_assoc($results);
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carti</title>
  <link rel="stylesheet" href='carti.css'>
</head>

<body>
  <div class="container">

  <form action="./carti.php" method="post">

    <input type="text" name="query" placeholder="Introduceti Genul" >

    <button type="submit" name="search">Cauta</button>
  </form>

    <table class="center">
      <thead>
        <tr>
          <th>ID</th>

          <th>NAME</th>

          <th>AUTHOR</th>

          <th>GENRE</th>

          <th>PAGE NUMBERS</th>

          <th>STATUS</th>

          <th>ASSIGNED TO</th>

          <th>ACTIONS </th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($results as $res) {  ?>
          <tr>

            <td>
              <?php echo $res["id"]; ?>
            </td>

            <td>
              <?php echo $res["title"]; ?>
            </td>

            <td>
              <?php echo $res["author"]; ?>
            </td>

            <td>
              <?php echo $res["genre"]; ?>
            </td>
            <td>
              <?php echo $res["pages"]; ?>
            </td>
            <td>
              <?php echo $res["status"]; ?>
            </td>
            <td>
              <?php echo $res["assignedto"]; ?>
            </td>
            <td>
              <form>
                <a href="delete.php?id=<?php echo $res['id']; ?>">DELETE</a>
              </form>


            </td>

          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>


</body>

</html>