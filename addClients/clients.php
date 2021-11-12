<?php
require 'db_conn.php';


$select = "SELECT * FROM clients";


$results = mysqli_query($conn, $select);


$res = mysqli_fetch_assoc($results);

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clienti</title>
  <link rel="stylesheet" href='clienti.css'>
</head>

<body>
  <div class="container">

    <table class="center">
      <thead>
        <tr>
          <th>ID</th>

          <th>NAME</th>

          <th>PRIMARY NAME</th>

          <th>UNIVERSITY</th>

          <th>YEAR OF STUDY</th>

          <th>SUBJECT MATTER</th>

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
              <?php echo $res["name"]; ?>
            </td>

            <td>
              <?php echo $res["primaryname"]; ?>
            </td>

            <td>
              <?php echo $res["university"]; ?>
            </td>
            <td>
              <?php echo $res["yearofstudy"]; ?>
            </td>
            <td>
              <?php echo $res["subjectmatter"]; ?>
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