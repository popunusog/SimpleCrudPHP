<?php
// Include the database connection file
require_once("connection.php");

$result = mysqli_query($conn, "SELECT * FROM country");
?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css">
  <title>Countries</title>
</head>

<body>
  <h1>Countries</h1>
  <div class="buttons-container">
    <a href="addForm.php" class="add-button">ADD</a>
    <a href="editForm.php" class="update-button">UPDATE</a>
    <a href="deleteForm.php" class="delete-button">DELETE</a>
  </div>
  <div class="table-container">
    <table>
      <tr>
        <td><strong>ID</strong></td>
        <td><strong>Name</strong></td>
        <td><strong>Population</strong></td>
        <td><strong>Area</strong></td>
      </tr>
      <?php
      // Fetching data from the database into table
      while ($res = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $res['id'] . "</td>";
        echo "<td>" . $res['name'] . "</td>";
        echo "<td>" . $res['population'] . "</td>";
        echo "<td>" . $res['area'] . "</td>";

      }
      ?>
    </table>
  </div>
</body>

</html>