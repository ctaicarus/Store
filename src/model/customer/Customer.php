<? php 
class Customer {
	private $fullname = new FullName;
	private $account = new Account;
	private $address = new Address;
	private $id;
	private $phone;
	private $sex;
	private $dob;

	public function__construct($fullname, $account, $address, $id, $phone, $sex, $dob){
		$this->fullname = $fullname;
		$this->account = $account;
		$this->address = $address;
		$this->id = $id;
		$this->phone = $phone;
		$this->sex = $sex;
		$this->dob = $dob;
	}

	public function getId(){
		return $this->id;
	}

	public function getPhone(){
		return $this->phone;
	}

	public function getSex(){
		return $this->sex;
	}

	public function getDob(){
		return $this->dob;
	}
}
?>