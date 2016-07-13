<?php
  require_once("Common.php");
  $array1 = array(12,45,32,15,65,68);
  $array2 = array(45,32,15,68,54,34);

  $common = new Common();
  echo Json_encode($array1).PHP_EOL;
  echo "Array 1 : ".json_encode($array1).PHP_EOL;
  echo "Array 2 : ".json_encode($array2).PHP_EOL;
  echo "Are common elements : ".json_encode($common->common_elements($array1, $array2)).PHP_EOL;

  $common_elements = array_intersect($array1,$array2);
  echo "Array 1 : ".json_encode($array1).PHP_EOL;
  echo "Array 2 : ".json_encode($array2).PHP_EOL;
  echo "Are common elements : ";
  foreach ($common_elements as $item)
    echo $item.",";
  echo "".PHP_EOL;
?>
