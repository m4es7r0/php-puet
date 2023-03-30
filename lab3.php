<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>lab 3</title>
  <style type="text/css">
    * {
      font-family: sans-serif;
      color: "#111827";
      background: #fbfefd;
    }
  </style>
</head>
<body>
    <?php
      echo 'Я вивчаю PHP';

      echo '<hr>';

      echo '<table border="1">';
        for ($tr=1; $tr <= 10 ; $tr++ ) {
      echo '<tr>';
        for ($td=1; $td <= 10; $td++) {
      echo '<td>'."$tr x $td = " . $tr * $td.'</td>';
        }
      echo '</tr>';
        }
      echo '</table>';

      echo '<hr>';
      
      $array = [10, 20, -2];
      
      echo implode(', ', $array);
      echo '<hr>';

      foreach($array as &$value) {
        echo $value;
        echo '<br>';
      };
      echo '<hr>';

      print_r($array);
      ?>
</body>
</html>