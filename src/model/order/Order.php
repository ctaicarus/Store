<?php
class Order
{
  private $cart = new Cart;
  private $shipment = new Shipment;
  private $status;
  
  public function __construct($status, $cart, $shipment )
  {
    $this->status = $status;
    $this->cart = $cart;
    $this->shipment = $shipment;
  }
  public function getStatus()
  {
    return $this->status;
  }


}
?>