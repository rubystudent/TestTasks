<?php
  $str = "Call of the wild!";
  $substr = "wild";
  $pos = strpos($str, $substr);
  if ($pos ===false)
    echo "Строка '$substr' не надена в строке '$str'".PHP_EOL;
  else {
  echo "Строка '$substr' найдена в строке '$str'";
  echo " в позиции $pos".PHP_EOL;
  }
?>
