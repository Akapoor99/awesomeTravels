<?php
require 'Customer.php';
require 'PaymentInfo.php';
require 'ContactInfo.php';

class Member extends Customer
{
	private $userName;
	//settype($userName, "string");
	private $password;
	//settype($password, "string");
	private $paymentInfo;
	private $contactInfo;
	private $age;
	//settype($age, "int");

	function __construct($u, $p, $a, $fn, $ln, $e, $pn){
		parent::__construct();
		$this->userName = $u;
		$this->password = $p;
		$this->age = $a;
		$contactInfo = new ContactInfo($fn, $ln, $e, $pn);
	}

	function setPaymentInfo($cn, $em, $ey, $n){
		if($paymentInfo instanceof PaymentInfo){
			$paymentInfo->setAllPaymentInfo($cn, $em, $ey, $n);
		}
		else{
			$paymentInfo = new PaymentInfo($cn, $em, $ey, $n);
		}
	}

	function getUsername(){
		return $this->userName;
	}

	function changePassword($newPassword){
		$this->password = $newPassword;
	}

	function changeEmail($newEmail){
		$contactInfo->setEmail($newEmail);
	}

	function changePhoneNumber($newNumber){
		$contactInfo->setPhoneNumber($newNumber);
	}

	function changeAddress($newAddress){
		$contactInfo->setAddress($newAddress);
	}

	function getAllContactInfo(){
		return $contactInfo->getContactInfo();
	}

	function getAllPaymentInfo(){
		return $paymentInfo->getPaymentInfo();
	}

	function getAge(){
		return $this->age;
	}

	function checkUserName($inputUserName){
		if($this->userName == $inputUserName){
			return true;
		}
		else{
			return false;
		}
	}

	function checkPassword($inputPassword){
		if($this->password == $inputPassword){
			return true;
		}
		else{
			return false;
		}
	}
}

?>
