<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Użytkownicy</title>
    <style>
      table, td, tr, th {
        border: 1px solid black;
        border-radius: 5px;
        padding: 10px;
      }
      th {
        background-color: lightgray;
      }

      td:nth-of-type(5) {
        background-color: red;
      }

      a {
        color: white;
        text-decoration: none;
      }

      tr td:first-of-type {
        background-color: lightgray;
      }
      table {
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      }
    </style>
  </head>
  <body>
    <center>
    <table><tr>
      <th>id</th>
      <th>name</th>
      <th>surname</th>
      <th>date</th>
      <th>usun</th>
    <tr>
<?php
      require_once '../scripts/connect.php';
      $sql = "SELECT * FROM users";
      $result = $connect->query($sql);
      while ($row = $result->fetch_assoc()) {
        echo <<< TABLE
          <tr>
            <td>$row[id]</td>
            <td>$row[name]</td>
            <td>$row[surname]</td>
            <td>$row[birthday]</td>
            <td><a href='../scripts/delete.php?id=$row[id]'>usuń</a</td>
          </tr>
        TABLE;
      }

      // $result = $connect->query($sql);
      // $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
      // foreach ($rows as $key => $row) {
      //   echo $key." - ".$row['name']."<br>";
      // }
     ?>
   </table>

   <?php
   if ($_GET['delete']) {
    echo "<p>".$_GET['delete']."</p>";
   }
    ?>

  </body>
</html>
