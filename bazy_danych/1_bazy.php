<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Użytkownicy</title>
  </head>
  <body>
    <h4>Użytkownicy</h4>
    <pre><hr>
<?php
      $connect = new mysqli("localhost", "root", "", "zsk_4cg2_baza1");
      $sql = "SELECT * FROM users";
      $result = $connect->query($sql);
      while ($rows = $result->fetch_assoc()) {
        print_r($rows);
      }

      // $result = $connect->query($sql);
      // $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
      // foreach ($rows as $key => $row) {
      //   echo $key." - ".$row['name']."<br>";
      // }
     ?>
   </pre>
  </body>
</html>
