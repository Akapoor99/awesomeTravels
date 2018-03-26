<?php
require_once("Booking.php");

class Customer
{
	protected $customerID;
	protected $bookings;

	function __construct(){
		//settype($customerID, "string");
		//settype($bookings, "array");
		$this->customerID = uniqid("", true);
	}

	function getCustomerID(){
		return $customerID;
	}

	function getBooking($index){
		return $bookings[$index];
	}

	function addBooking($newBooking){
		$bookings[] = $newBooking;
	}

}

?>
