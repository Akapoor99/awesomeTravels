<?php

class ContactInfo
{
	private $firstName;
	settype($firstName, "string");
	private $lastName;
	settype($lastName, "string");
	private $email;
	settype($email, "string");
	private $phoneNumber;
	settype($phoneNumber, "string");
	private $address;
	settype($address, "array");

	function __construct($f, $l, $e, $p){
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