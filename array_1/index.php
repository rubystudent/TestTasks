<?php
  echo "Способ 1 :".PHP_EOL;
  require_once("ArraySum.php");
  $array = array(1,2,3,4,5,6);
  $answer = new ArraySum($array);
  echo "Array : ".json_encode($answer->arr).PHP_EOL;
  echo "Sum : ".$answer->getSum($array).PHP_EOL;

  echo "Способ 2 :".PHP_EOL;
  echo "Array : ".json_encode($array).PHP_EOL;
  echo "Sum : ".array_sum($array).PHP_EOL;
?>
