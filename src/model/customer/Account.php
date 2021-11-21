<?php
class Account
{
	private $username;
	private $password;
	public function__construct($username, $password){
		$this->username = $username;
        $this->password = $password;
	}
	public function getUserName() {
       return $this->username;
    }

    public function getPassWord(){
       return $this->password;
    }
    
}
?>