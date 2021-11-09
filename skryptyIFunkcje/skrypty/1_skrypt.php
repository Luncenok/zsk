<?php
  require_once '../funkcje/funkcje.php';
  show();
  if (!empty($_POST['name'])) {
    echo "<hr>Twoje imie to: ".showName($_POST['name'])."<br>";
    echo "<hr>Twoje imie po funkcji to: ".stringValidate($_POST['name'], 5)."<br> dlugosc: ".strlen(stringValidate($_POST['name'], 5))."<br>";
  }
?>
