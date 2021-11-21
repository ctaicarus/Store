<? php 
class ClothesItem {
  
  private $clothes = new clothes;
  private $id;
  private $price;
  private $discount;
 
  

  public function__construct($id, $price, $discount, $clothes){
    $this->id = $id;
    $this->price = $price;
    $this->discount = $discount;
    $this->clothes = $clothes;
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