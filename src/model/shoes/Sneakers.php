<?php
class Sneakers
{
	private $sinph;
	private $sole;
	public function__construct($sinph, $sole){
		$this->sinph = $sinph;
        $this->sole = $sole;
	}
	public function getSinph() {
       return $this->sinph;
    }

    public function getSole(){
       return $this->sole;
    }
    
}
?>