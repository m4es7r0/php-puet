<?php
  $array = [10, 20, -2];
      
  echo implode(', ', $array);
  echo '<hr>';

  foreach($array as &$value) {
    echo $value;
    echo '<br>';
  };
  echo '<hr>';

  print_r($array);