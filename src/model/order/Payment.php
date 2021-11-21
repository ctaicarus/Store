<?php
class Payment
{
  
  private $amount;
  
  public function __construct($amount)
  {
    $this->amount = $amount;
    
  }
  public function getamount()
  {
    return $this->amount;
  }


}
?>