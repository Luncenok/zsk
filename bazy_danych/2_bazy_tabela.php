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
      th {
        background-color: lightgray;
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
  </body>
</html>
