<?php
  class StringRev{
    public function reverse($string){
      $rev = "";
      for ($i = strlen($string)-1; $i >=0; $i--)
        $rev = $rev + $string[$i];
      if ($rev == $string)
        $is_pal = "Палинром";
      else
        $is_pal = "На палиндром";
      return $is_pal;
    }
  }
?>
