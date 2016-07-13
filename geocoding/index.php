<?php
  require_once("Geocoder.php");
  $address = fgets(STDIN);
  $geocoder = new Geocoder('AIzaSyDPnXKRnvXqV92OWcK9acaeKX0b723xJXk');
  $placemarks = $geocoder->lookup($address);

  print_r ($placemarks).PHP_EOL;
?>
