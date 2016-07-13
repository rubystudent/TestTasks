<?php
  class Geocoder
  {
    public static $url = "https://maps.googleapis.com/maps/api/geocode/";

    protected $_apiKey;

    public function __construct($key)
    {
        $this->_apiKey = $key;
    }

    public function performRequest($lat,$lng,$output = 'xml')
    {
      $url = sprintf("%s%s?latlng=%s,%s&key%s", self::$url,  $output,$lat, $lng ,$this->_apiKey);
      $ch = curl_init($url);
      curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
      $response = curl_exec($ch);
      curl_close($ch);
      return $response;
    }

    public function lookup($lat,$lng)
    {
      $response = $this->performRequest($lat,$lng, "xml");
      $xml = new SimpleXMLElement($response);
      $status =(string)$xml->status;
      if ($status == "OK")
      {
        $address = $xml->result->formatted_address;
        return $address;
      }
      else
      {
        echo $xml->error_message.PHP_EOL;
      }
    }
  }
?>
