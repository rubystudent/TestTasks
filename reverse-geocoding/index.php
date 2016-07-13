<?php
  require_once("Geocoder.php");

  echo "Enter the latitude : ";
  $lat = (int)fgets(STDIN);
  echo "Enter the longitude : ";
  $lng = (int)fgets(STDIN);

  $geocoder = new Geocoder('AIzaSyDPnXKRnvXqV92OWcK9acaeKX0b723xJXk');
  $address = $geocoder->lookup($lat, $lng);

  echo $address.PHP_EOL;
?>
