<?php

class PaymentInfo
{
	private $cardNumber;
	//settype($cardNumber, "string");
	private $expirationMonth;
	//settype($expirationMonth, "string");
	private $expirationYear;
	//settype($expirationYear, "string");
	private $name;
	//settype($name, "string");

	function __construct($cardNum, $expMonth, $expYear, $name){
		$this->cardNumber = $cardNum;
		$this->expirationMonth = $expMonth;
		$this->expirationYear = $expYear;
		$this->name = $name;
	}

	function setAllPaymentInfo($cn, $em, $ey, $n){
		$this->cardNumber = $cn;
		$this->expirationMonth = $em;
		$this->expirationYear = $ey;
		$this->name = $n;
	}

	function getPaymentInfo(){
		$allPaymentInfo = array($cardNumber, $expirationMonth, $expirationYear, $name);
		return $allPaymentInfo;
	}
}

?>
