<?php
  $string = trim(fgets(STDIN));
  echo $string." => ";
  if ($string == strrev($string))
    echo "Палиндром".PHP_EOL;
  else
    echo "Не палиндром".PHP_EOL;
  require_once ("StringRev.php");
  $reverse = new StringRev();
  echo $string." => ".$reverse->reverse($string).PHP_EOL;
?>
