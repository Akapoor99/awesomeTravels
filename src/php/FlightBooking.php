<?php

class FlightBooking
{
	private $flight;
	private $flightTicketID;
	settype($flightTicketID, "string");
	private $price;
	settype($price, "float");
	private $porterService;
	settype($porterService, "boolean");

	function __construct($_flight, $_ID, $_price, $_porter){
		$this->flight = $_flight;
		$this->flight->changeSeatNumbers(-1);
		$this->flightTicketID = $_ID;
		$this->price = $_price;
		$this->porterService = $_porter;
	}

	function getTicketID(){
		return $this->flightTicketID;
	}

	function getPrice(){
		return $this->price;
	}

	function hasPorter(){
		return $this->porterService;
	}

	function getFlightInfo(){
		return $this->flight->getAllInfo();
	}
}

?>