<? php 
class Clothes {
	
	private $bikini = new Bikini;
  	private $jean = new Jean;
	private $type;
	private $address;
	private $size;
	private $color;
	private $material;
	

	public function__construct($type, $address, $size, $color, $material,$bikini, $jean){
		$this->type = $type;
		$this->address = $address;
		$this->size = $size;
		$this->material = $material;
		$this->color = $color;
		$this->bikini = $bikini;
   		$this->jean = $jean;
	}

	public function getType(){
		return $this->type;
	}

	public function getAddress(){
		return $this->address;
	}

	public function getSize(){
		return $this->size;
	}

	public function getMaterial(){
		return $this->material;
	}

	public function getColor(){
		return $this->color;
	}
	
}
?>