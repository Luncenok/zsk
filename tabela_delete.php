<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Użytkownicy</title>
    <style>
      table, td, tr, th {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 10px;
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
    <tr>
<?php
      $connect = new mysqli("localhost", "root", "", "zsk_4cg2_baza1");
      $sql = "SELECT * FROM users";
      $result = $connect->query($sql);
      while ($row = $result->fetch_assoc()) {
        echo <<< TABLE
          <tr>
            <td>$row[id]</td>
            <td>$row[name]</td>
            <td>$row[surname]</td>
            <td>$row[birthday]</td>
            <td><a href="scripts\delete.php?id=$row[id]">usuń</a></td>
          </tr>
        TABLE;
      }
        
        $connect->close();
     ?>


   </table>
  </body>
</html>
