\<!DOCTYPE html>
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

      table a {
        color: white;
        text-decoration: none;
      }

      tr td:first-of-type {
        background-color: lightgray;
      }
      table {
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      }


    form {
      margin: 20px;
      box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
      width: 300px;
      padding: 5px;
    }
    input {
      width: 100%;
      margin: 5px;
      padding: 5px;
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
      echo "</table>";
      if(isset($_GET['addUser'])){
        echo<<<FORMADDUSER

        <form action="../scripts/insert.php" method="post">
          <input type="text" name="cityid" placeholder="id miasta"><br>
          <input type="text" name="name" placeholder="imie"><br>
          <input type="text" name="surname" placeholder="nazwisko"><br>
          <input type="date" name="birthday" placeholder="data urodzenia"><br>
          <input type="submit" value="dodaj uzytkownika">
        </form>
FORMADDUSER;
      } else {
        echo '<a href="./4_bazy_insert.php?addUser=">Dodaj Użutkownika</a>';
      }

      // $result = $connect->query($sql);
      // $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
      // foreach ($rows as $key => $row) {
      //   echo $key." - ".$row['name']."<br>";
      // }
     ?>

</form>

    <?php
    if (isset($_GET['delete'])) {
     echo "<p>".$_GET['delete']."</p>";
    }
    ?>
    <?php
    if (isset($_GET['error'])) {
     echo "<p>".$_GET['error']."</p>";
    }
    ?>

  </body>
</html>
