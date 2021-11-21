<?php
class Mobile
{
  private $id;
  private $ram;
  private $cpu;
 
  public function __construct($id, $ram, $cpu)
  {
    $this->id = $id;
    $this->ram = $ram;
    $this->cpu = $cpu;
  }
  public function getId()
  {
    return $this->id;
  }

  public function getRam()
  {
    return $this->ram;
  }

  public function getCpu()
  {
    return $this->cpu;
  }

}
?>