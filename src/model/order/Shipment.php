<?php
class Shipment
{
  private $name;
  private $price;
  private $address;
 
  public function __construct($name, $price, $address)
  {
    $this->name = $name;
    $this->price = $price;
    $this->address = $address;
  }
  public function getName()
  {
    return $this->name;
  }

  public function getPrice()
  {
    return $this->price;
  }

  public function getAddress()
  {
    return $this->address;
  }

}
?>