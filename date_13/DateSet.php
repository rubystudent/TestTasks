<?php
  class DateSet{
    public function date_set($year){
      if ($year%4 == 0)
        $day = 12;
      else
         $day = 13;
      $month = 9;
      $datetime = new DateTime();
      $datetime->setDate($year, $month, $day);
      return $datetime;
    }
  }
?>
