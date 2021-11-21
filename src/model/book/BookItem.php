<? php 
class BookItem {
  
  private $book = new book;
  private $barcode;
  private $price;
  private $discount;
 
  

  public function__construct($barcode, $price, $discount, $book){
    $this->barcode = $barcode;
    $this->price = $price;
    $this->discount = $discount;
    $this->book = $book;
  }

  public function getBarcode(){
    return $this->barcode;
  }

  public function getPrice(){
    return $this->price;
  }

  public function getDiscount(){
    return $this->discount;
  }
  
}
?>