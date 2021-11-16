<?php
  if (isset($_POST)) {
    foreach ($_POST as $key => $value) {
      if (empty($value)) {
        header('location: ../bazy_danych/4_bazy_insert.php?error=Wypełnij wszystkie dane w formularzu');
        exit();
      }
    }
    require_once './connect.php';
    $id = $_POST['id'];
    $sql = "UPDATE `users` SET `id_city` = '$_POST[cityid]', `name` = '$_POST[name]', `surname` = '$_POST[surname]', `birthday` = '$_POST[birthday]' WHERE `id` = '$id';";
    $connect->query($sql);
    $affrows = $connect->affected_rows;
    $connect->close();
    header("location: ../bazy_danych/4_bazy_insert.php?error=zaktualizowano $affrows uzytkowników&addUser=");
  }
 ?>
