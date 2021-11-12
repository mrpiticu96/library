<?php
require 'db_conn.php';


$select = "SELECT * FROM rentedbooks";


$results = mysqli_query($conn, $select);


$res = mysqli_fetch_assoc($results);

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rented Books</title>
  <link rel="stylesheet" href='rentedbooks.css'>
</head>

<body>
  <div class="container">

    <table class="center">
      <thead>
        <tr>
          <th>ID</th>

          <th>BOOK NAME</th>

          <th>ASSIGNED TO</th>

          <th>RENT DATE</th>

          <th>RETURN DATE</th>

          <th>PENALITY</th>

          <th>ACTIONS</th>  
        </tr>
      </thead>
      <tbody>
        <?php foreach ($results as $res) {  ?>
          <tr>

            <td>
              <?php echo $res["id"]; ?>
            </td>

            <td>
              <?php echo $res["bookname"]; ?>
            </td>

            <td>
              <?php echo $res["assignedto"]; ?>
            </td>

            <td>
              <?php echo $res["rentdate"]; ?>
            </td>
            <td>
              <?php echo $res["returndate"]; ?>
            </td>
            <td>
              <?php echo $res["penality"]; ?>
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


</body>

</html>