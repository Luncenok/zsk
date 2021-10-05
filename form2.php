<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>form</title>
  </head>
  <body>
    <h3>Podaj ilość osób w rodzinie</h3>
    <?php
      if (!isset($_POST['person'])) {
        echo <<< FIRST
        <form method="post">
          <input type="number" id="iloscosob" name="person" placeholder="Podaj ilość osób"><br><br>
          <input type="submit" value="Zatwierdź">
        </form>
FIRST;
      }
      else if (!isset($_POST['wiek1'])){
        echo "ilość osób w rodzinie: ", $_POST['person'];
        echo '<form method="post">';
        for ($i=1; $i <= $_POST['person']; $i++) {
          echo <<< PODAJ
            <input type="number" name="wiek$i" placeholder="podaj wiek osoby $i"><br>
PODAJ;
        }
        $ile = $_POST['person'];
        echo <<< INPUTT
          <input type="hidden" name="person" value="$ile">
          <input type="submit" value="Zatwierdź"></form>
INPUTT;
      }
      else {
        $suma = 0;
        for ($i=1; $i <= $_POST['person']; $i++) {
          $suma += $_POST["wiek$i"];
        };
        echo "srednia wynosi: ", number_format($suma/$_POST['person'], 2);
        echo "<br><br><a href='./form2.php'>wroc</a> ";
      }
    ?>
  </body>
</html>
