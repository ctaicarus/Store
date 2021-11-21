<? php 
class Shoes {
  
  private $sneakers = new Sneakers;
  private $pums = new Pums;
  private $name;
  private $address;
  private $size;
  private $attribute;
  

  public function__construct($name, $address, $size, , $attribute, $sneakers, $pums){
    $this->name = $name;
    $this->address = $address;
    $this->size = $size;
    $this->attribute = $attribute;
    $this->sneakers = $sneakers;
    $this->pums = $pums;
  }

  public function getName(){
    return $this->name;
  }

  public function getAddress(){
    return $this->address;
  }

  public function getSize(){
    return $this->size;
  }

  public function getAttribute(){
    return $this->attribute;
  }
  
}
?>