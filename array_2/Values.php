<?php
  class Values{
    public $arr;

    public function __construct($arr){
      $this->arr = $arr;
    }

    public function getMin($arr){
      $min = $arr[0];
      foreach ($arr as $item)
        if ($item<$min)
          $min = $item;
      return $min;
    }

    public function getMax($arr){
      $max = $arr[0];
      foreach($arr as $item)
        if ($item > $max)
          $max = $item;
      return $max;
    }
  }
?>
