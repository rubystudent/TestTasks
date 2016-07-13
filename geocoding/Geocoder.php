<?php
  class Geocoder
  {
    public static $url = "https://maps.googleapis.com/maps/api/geocode/";

    protected $_apiKey;

    public function __construct($key)
    {
        $this->_apiKey = $key;
    }

    public function performRequest($search, $output = 'xml')
    {
      $url = sprintf("%s%s?address=%s&key%s", self::$url,  $output,urlencode($search),$this->_apiKey);
      $ch = curl_init($url);
      curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
      $response = curl_exec($ch);
      curl_close($ch);
      return $response;
    }

    public function lookup($search)
    {
      $response = $this->performRequest($search, "xml");
      $xml = new SimpleXMLElement($response);
      $status =(string)$xml->status;
      if ($status == "OK")
      {
          $lat =(float) $xml->result->geometry->location->lat;
          $lng =(float) $xml->result->geometry->location->lng;
          $lt = (string)$xml->result->geometry->location_type;
          $placemarks = array(
            "latitude" => $lat,
            "longitude" => $lng,
            "location_type" => $lt,
          );

           return $placemarks;
      }
      else
      {
        echo $xml->error_message.PHP_EOL;
      }
    }
  }
?>
