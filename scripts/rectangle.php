<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Prostokąt</title>
  </head>
  <body>
    <h3>Prostokąt</h3>
    <form method="get">
      <input type="text" name="sideA" placeholder="Podaj bok A"><br><br>
      <input type="text" name="sideB" placeholder="Podaj bok B"><br><br>
      <input type="submit" value="oblicz">
    </form>
    <?php
      if (!empty($_GET['sideA']) && !empty($_GET['sideB'])) {
        $sideA = str_replace(",", ".", $_GET['sideA']);
        $sideB = str_replace(",", ".", $_GET['sideB']);
        $area = $sideA * $sideB;
        $rectangle = $sideA*2 + $sideB*2;
        echo <<< RESULT
        <hr>
        Pole prostokąta wynosi ${area}cm<sup>2</sup><br>
        Obwód prostokąta wynosi $rectangle
RESULT;
      } else {
        echo "wypełnij dane";
      }

    ?>
  </body>
</html>
