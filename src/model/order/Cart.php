<?php
class Cart
{
  private $dateCreated;
  private $quantity;
  private $totalPrice;
 
  public function __construct($dateCreated, $quantity, $totalPrice)
  {
    $this->dateCreated = $dateCreated;
    $this->quantity = $quantity;
    $this->totalPrice = $totalPrice;
  }
  public function getDateCreated()
  {
    return $this->dateCreated;
  }

  public function getQuantity()
  {
    return $this->quantity;
  }

  public function getTotalPrice()
  {
    return $this->totalPrice;
  }

}
?>