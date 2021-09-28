<?php
  // echo "<pre>";
  // print_r($_POST);

  if (!empty($_POST['name']) && !empty($_POST['geometrucFigure'])) {
    switch ($_POST['geometrucFigure']) {
      case 'kwadrat':
      header('location: ./square.php');
        break;
      case 'prostokat':
      header('location: ./rectangle.php');
        break;
    }
  } else {
    ?>
      <script>
        history.back();
      </script>
    <?php
  }


?>
