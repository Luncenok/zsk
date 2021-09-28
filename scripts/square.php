<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kwadrat</title>
  </head>
  <body>
    <h3>Kwadrat</h3>
    <form method="get">
      <input type="text" name="sideA" placeholder="Podaj bok A"><br><br>
      <input type="submit" value="oblicz">
    </form>
    <?php
      if (!empty($_GET['sideA'])) {
        $area = pow($_GET['sideA'], 2);
        $rectangle = $_GET['sideA']*4;
        echo <<< RESULT
        <hr>
        Pole kwadratu wynosi $area<br>
        Obwód kwadratu wynosi $rectangle
RESULT;
      } else {
        echo "wypełnij dane";
      }

    ?>
  </body>
</html>
