<?php

 $sum = 0;
 $n = 5;

 for($i = 1; $i <= $n; $i++) {
   $sum += $i;
 }
  
 if ($n==2 || $n==3 || $n==4) {
   echo "Zbir prva " .$n . " prirodna broja je ".$sum .".";
 } else if ($n==5) {
  echo "Zbir prvih " .$n . " prirodnih brojeva je ".$sum .".";
 }

?>
