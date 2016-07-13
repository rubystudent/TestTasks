<?php
class Common{
  public function common_elements($array1, $array2){
    $elements = array();
    foreach ($array1 as $item1){
      foreach ($array2 as $item2){
        if ($item1 == $item2){
          $elements[] = $item1;
        }
      }
    }
  return $this->elements = $elements;
  }
}
?>
