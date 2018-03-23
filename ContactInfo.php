<?php

class ContactInfo
{
	private $firstName;
	private $lastName;
	private $email;
	private $phoneNumber;
	private $address;

	function __construct($f, $l, $e, $p){
		//settype($firstName, "string");
		//settype($lastName, "string");
		//settype($email, "string");
		//settype($phoneNumber, "string");
		//settype($address, "array");
		$this->firstName = $f;
		$this->lastName = $l;
		$this->email = $e;
		$this->phoneNumber = $p;
	}

	function getFirstName(){
		return $this->firstName;
	}

	function getLastName(){
		return $this->lastName;
	}

	function getEmail(){
		return $this->email;
	}

	function setEmail($newEmail){
		$this->email = $newEmail;
	}

	function getPhoneNumber(){
		return $this->phoneNumber;
	}

	function setPhoneNumber($newNumber){
		$this->phoneNumber = $newNumber;
	}

	function getAddress(){
		return $this->address;
	}

	function setAddress($newAddress){
		$this->address = $newAddress;
	}

	function getContactInfo(){
		$allContactInfo = array($firstName, $lastName, $email, $phoneNumber, $address);
		return $allContactInfo;
	}
}

?>
