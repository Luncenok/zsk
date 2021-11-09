<?php
  if (isset($_POST)) {
    foreach ($_POST as $key => $value) {
      if (empty($value)) {
        header('location: ../bazy_danych/4_bazy_insert.php?error=Wypełnij wszystkie dane w formularzu&addUser=');
        exit();
      }
    }
    require_once './connect.php';
    $sql = "INSERT INTO users (`id`, `id_city`, `name`, `surname`, `birthday`) VALUES (NULL, '$_POST[cityid]', '$_POST[name]', '$_POST[surname]', '$_POST[birthday]');";
    $connect->query($sql);
    $affrows = $connect->affected_rows;
    $connect->close();
    header("location: ../bazy_danych/4_bazy_insert.php?error=Dodano $affrows uzytkowników&addUser=");
  }
 ?>
