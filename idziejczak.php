<!-- Dodaj formularz z dwoma polami do wpisania danych do trójkąta (a i h) użytkownik po zatwierdzeniu formularza jest przekierowywany do skrypt.php w skrypcie sprawdź czy użytkownik wuypełnił oba pola. Jeśli nie wypełnił to cofnij go do strony głównej i wyświetl komunikat "Wypełnij pola". Jeśli wypełnił prawidłowo to oblicz pole. Wynik wyświetl za pomocą heredoca. Dodaj hiperłącze umożliwiające powrót na stronę główną. Jeżli użytkownik poda liczbę mniejszą lub równą zero to cofnij go do strony głównej i wyświetl komunikat liczba musi być większa od zera. W formularzu na stronie głównej użytkownik podaje cyfrę w skrypcie wyświetl swoje imie i nazwisko tyle razy ile w formularzu. -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="./skrypt/skrypt.php" method="post">
      <input type="text" name="a" placeholder="a">
      <input type="text" name="h" placeholder="h">
      <input type="number" name="l" placeholder="liczba">
      <input type="submit" value="Zatwierdz" />
    </form>
  </body>
</html>
