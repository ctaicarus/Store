<?php
class FullName
{
  private $first_name;
  private $last_name;
 
  public function __construct($first_name, $last_name)
  {
    $this->first_name = $first_name;
    $this->last_name = $last_name;
  }

  public function getFirstName()
  {
    return $this->first_name;
  }

  public function getLastName()
  {
    return $this->last_name;
  }

}
?>