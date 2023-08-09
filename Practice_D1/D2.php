<?php
  $n = readline();
  $sum = 1;
  for($x = 1; $x <= $n; $x++)
  {
      $sum *= $x;
  }
  echo $sum;
?>