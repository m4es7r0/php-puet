<?php

    echo '<table>';
      for ($tr=1; $tr <= 10; $tr++ ) {
    echo '<tr>';
      for ($td=1; $td <= 5; $td++) {
    echo '<td>'."$tr x $td = " . $tr * $td.'</td>';
      }
    echo '</tr>';
    echo '<tr>';
      for ($td=6; $td <= 10; $td++) {
    echo '<td>'."$tr x $td = " . $tr * $td.'</td>';
      }
    echo '</tr>';
      }

    echo '</table>';