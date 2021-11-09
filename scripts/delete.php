<?php
  if ($_GET['id']) {
    require_once '../scripts/connect.php';
    $id = $_GET['id'];
    mysqli_query($connect, "DELETE FROM users WHERE id=$id");
    $id = "usunięto ".mysqli_affected_rows($connect)." wiersz o id=".$id;
      header("location: ../bazy_danych/3_bazy.php?delete=$id");
  } else {
    header('location: ../bazy_danych/3_bazy.php');
  }
 ?>
