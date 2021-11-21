<?php
class Bikini
{
  private $bustSize;
  private $waistSize;

 
  public function __construct($bustSize, $waistSize)
  {
    $this->bustSize = $bustSize;
    $this->waistSize = $waistSize;
 
  }
  public function getBustSize()
  {
    return $this->bustSize;
  }

  public function getWaistSize()
  {
    return $this->waistSize;
  }

}
?>