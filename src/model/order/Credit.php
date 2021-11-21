<?php
class Credit
{
  private $numberCredit;
  private $type;
  private $expDate;
 
  public function __construct($numberCredit, $type, $expDate)
  {
    $this->numberCredit = $numberCredit;
    $this->type = $type;
    $this->expDate = $expDate;
  }
  public function getnumberCredit()
  {
    return $this->numberCredit;
  }

  public function gettype()
  {
    return $this->type;
  }

  public function getexpDate()
  {
    return $this->expDate;
  }

}
?>