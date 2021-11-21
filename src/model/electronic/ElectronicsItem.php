<? php 
class ElectronicsItem {
  
  private $Electronics = new Electronics;
  private $id;
  private $price;
  private $discount;
 
  

  public function__construct($id, $price, $discount, $Electronics){
    $this->id = $id;
    $this->price = $price;
    $this->discount = $discount;
    $this->Electronics = $Electronics;
  }

  public function getId(){
    return $this->id;
  }

  public function getPrice(){
    return $this->price;
  }

  public function getDiscount(){
    return $this->discount;
  }
  
}
?>