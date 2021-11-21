<?php
class Check
{
  private $backId;
  private $name;

 
  public function __construct($backId, $name)
  {
    $this->backId = $backId;
    $this->name = $name;
 
  }
  public function getbackId()
  {
    return $this->backId;
  }

  public function getname()
  {
    return $this->name;
  }

}
?>