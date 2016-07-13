<?php
  class QuickSort{
    public $arr;

    public function __construct ($arr){
      $this->arr = $arr;
    }

    public function quick_sort($array){
      $length = count($array);
      if ($length<=1)
      {
        return $array;
      }
      else
      {
        $privot = $array[0];
        $left = $right = array();
        for ($i=1;$i<count($array);$i++)
        {
          if($array[$i]<$privot)
          {
            $left[]=$array[$i];
          }
          else
          {
            $right[]=$array[$i];
          }
      }
    return array_merge($this->quick_sort($left),array($privot),$this->quick_sort($right));
      }
    }
  }
?>
