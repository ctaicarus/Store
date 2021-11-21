<?php
class Jean
{
  private $pipe;

 
  public function __construct($pipe)
  {
    $this->pipe = $pipe;
 
  }
  public function getPipe()
  {
    return $this->pipe;
  }


}
?>