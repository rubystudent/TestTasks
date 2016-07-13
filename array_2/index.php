<?php
  require_once("Values.php");
  $array = array(5,1,4,8,2);

  echo "Способ 1 :".PHP_EOL;
  $value = new Values($array);
  echo "Array : ".json_encode($value->arr).PHP_EOL;
  echo "Min : ".$value->getMin($array).PHP_EOL;
  echo "Max : ".$value->getMax($array).PHP_EOL;

  echo "Способ 2 :".PHP_EOL;
  echo "Array : ".json_encode($array).PHP_EOL;
  echo "Min : ".Min($array).PHP_EOL;
  echo "Max : ".Max($array).PHP_EOL;

?>
