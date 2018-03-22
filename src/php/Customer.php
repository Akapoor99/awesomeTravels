<?php
require("Booking.php");

class Customer
{
	protected $customerID;
	settype($customerID, "string");
	protected $bookings;
	settype($bookings, "array");

	function __construct(){
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