<?php
  class ArraySum{
    public $arr;

    public function __construct($arr){
      $this->arr = $arr;
    }

    public function getSum ($arr){
      $sum = 0;
      foreach ($arr as $item)
        $sum += $item;
      return $sum;
    }
  }
?>
