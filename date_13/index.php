<?php
  $year = (int)fgets(STDIN);
  require_once ("DateSet.php");
  $date = new DateSet();
  echo $date->date_set($year)->format('Y-m-d').PHP_EOL;
  echo $date->date_set($year)->format('l').PHP_EOL;
?>
