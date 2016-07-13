<?php
  $str = "Call of the wild!";
  echo $str." => ".str_replace(" ","",$str).PHP_EOL;

	$str = "Call of the wild!";
  echo $str." => ".preg_replace('/\s/', '', $str).PHP_EOL;
?>
