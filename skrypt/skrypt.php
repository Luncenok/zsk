<?php
$a = $_POST['a'];
$h = $_POST['h'];
$l = $_POST['l'];
for ($i=0; $i < $l; $i++) {
  echo "Mateusz Idziejczak<br>";
}
if (empty($a) || empty($h) || empty($l)) {
  echo "Wypełnij pola";
  ?><script>history.back()</script><?php
}
elseif ($a<=0 || $h<=0 || $l<=0) {
  echo "Musi być większa od 0";
  ?><script>history.back()</script><?php
}
else {
  $pole = ($a*$h)/2;
  echo <<< END
  pole wynosi: $pole<br>
  <a href='../idziejczak.php'>powrot</a>
END;
}

 ?>
