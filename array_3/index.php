<?php
  require_once("QuickSort.php");
  $unsorted = array(54,21,65,18,75,45);
  $sorted = new QuickSort($unsorted);
  echo json_encode($sorted->quick_sort($unsorted)).PHP_EOL;
?>
