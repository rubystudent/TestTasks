<?php
$datetime1 = new DateTime('2007-05-26');
$datetime2 = new DateTime('2016-05-26');
$interval = $datetime1->diff($datetime2);
echo $interval->format('%Y лет, %m месяцев, %d дней');
?>

