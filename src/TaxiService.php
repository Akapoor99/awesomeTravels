<?php

class TaxiService
{
  private $pickupLocation;
  settype($pickupLocation, "string");
  private $destination;
  settype($destination, "string");
  private $numberOfPassengers;
  settype($numberOfPassengers, "int");
  private $price;
  settype($price, "float");

  function __construct($pickup, $dest, $number, $_price){
    $this->pickupLocation = $pickup;
    $this->destination = $dest;
    $this->numberOfPassengers = $number;
    $this->price = $_price;
  }

  function getTaxiInfo(){
    $allInfo = array($this->pickupLocation, $this->destination, $this->numberOfPassengers, $this->price);
    return $allInfo;
  }
}

?>
