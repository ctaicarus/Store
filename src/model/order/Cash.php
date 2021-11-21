<?php
class Cash
{
  
  private $cashtendered;
  
  public function __construct($cashtendered)
  {
    $this->cashtendered = $cashtendered;
    
  }
  public function getCashtendered()
  {
    return $this->cashtendered;
  }


}
?>