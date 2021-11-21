<? php 
class ShoesItem {
  
  private $shoes = new Shoes;
  private $id;
  private $price;
  private $discount;
 
  

  public function__construct($id, $price, $discount, $shoes){
    $this->id = $id;
    $this->price = $price;
    $this->discount = $discount;
    $this->shoes = $shoes;
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