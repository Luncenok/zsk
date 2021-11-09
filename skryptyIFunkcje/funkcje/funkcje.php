<?php
  function show() {
    echo "show";
  }

  function showName($name) {
    return $name;
  }

  function stringValidate($name, $dl) {
    $trimmed = trim($name); //usuwa białe znaki
    $allLower = strtolower($trimmed); //od drugiej małe znaki
    $firstUpper = ucfirst($allLower); //pierwsza duża
    $sub = substr($firstUpper, 0, $dl); //2 parametr wielkość stringa
    return $sub;
  }
 ?>
