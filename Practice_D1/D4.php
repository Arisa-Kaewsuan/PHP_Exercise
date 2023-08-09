<?php
  $n = readline();
  $sum = 0;
  for($x = 1; $x <= $n; $x++)
  {
      $sum += 1/pow($x,2);
  }
  echo $sum;
?>