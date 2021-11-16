<?php
    require_once '../scripts/connect.php';
    $sql = "SELECT * from users where id=$_GET[id] limit 1";
    $result = $connect->query($sql);
    $row = $result->fetch_assoc();

    echo<<<FORMUPDATEUSER

    <form action="../scripts/update.php" method="post">
      <input type="text" name="id" value="$row[id]"><br>
      <input type="text" name="name" value="$row[name]"><br>
      <input type="text" name="surname" value="$row[surname]"><br>
      <select name="cityid">
    FORMUPDATEUSER;

    $sql = "SELECT * FROM `cities`";
    $result = $connect->query($sql);

    while ($city = $result->fetch_assoc()) {
      echo "<option value=\"$city[id]\">$city[name]</option>";
    }

    echo<<<FORMUPDATEUSER
      </select>
      <input type="date" name="birthday" value="$row[birthday]"><br>
      <input type="submit" value="dodaj uzytkownika">
    </form>
    FORMUPDATEUSER;
 ?>
