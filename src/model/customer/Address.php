<?php
class Address{
	private $number;
	private $street;
	private $district;
	private $city;
	public function__construct($number, $street, $district, $city){
		$this->number = $number;
		$this->street = $street;
		$this->district = $district;
		$this->city = $city;
	}
	public function getNumber(){
		return $this->number;
	}
	public function getStreet(){
		return $this->street;
	}
	public function getDistrict(){
		return $this->district;
	}
	public function getCity(){
		return $this->city;
	}
}
?>