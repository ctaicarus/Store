<? php 
class Electronic {
  
  private $manufacturer = new Manufacturer;
  private $laptop = new Laptop;
  private $mobile = new Mobile;
  private $brand;
  private $screencapacity;
  private $capacity;
  private $model;
  

  public function__construct($brand, $screencapacity, $capacity, $manufacturer, $model){
    $this->brand = $brand;
    $this->screencapacity = $screencapacity;
    $this->capacity = $capacity;
    $this->model = $model;
    $this->manufacturer = $manufacturer;
    $this->laptop = $laptop;
    $this->mobile = $mobile;
    
  }

  public function getBrand(){
    return $this->brand;
  }

  public function getScreencapacity(){
    return $this->screencapacity;
  }

  public function getCapacity(){
    return $this->capacity;
  }

  public function getModel(){
    return $this->model;
  }
  
}
?>