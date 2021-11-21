<? php 
class Laptop {
  
  private $system;
  private $ram;
  private $cpu;
  private $card;
  

  public function__construct($system, $ram, $cpu, , $card){
    $this->system = $system;
    $this->ram = $ram;
    $this->cpu = $cpu;
    $this->card = $card;
    
  }

  public function getSystem(){
    return $this->system;
  }

  public function getRam(){
    return $this->ram;
  }

  public function getCpu(){
    return $this->cpu;
  }

  public function getCard(){
    return $this->card;
  }
  
}
?>