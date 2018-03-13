<?php 
require("FlightBooking.php");
require("HotelBooking.php");
require("TaxiService.php");

class Booking
{
	private $flightBookings;
	settype($flightBookings, "array");
	private $hotelBookings;
	settype($hotelBookings, "array");
	private $taxiHires;
	settype($taxiHires, "array");

	function addFlightBooking($newFlightBooking){
		$this->flightBookings[] = $newFlightBooking;
	}

	function getFlightBookingInfo($index){
		$allInfo = array($this->flightBookings[$index]->getTicketID(), $this->flightBookings[$index]->getPrice(), $this->flightBookings[$index]->hasPorter(), $this->flightBookings[$index]->getFlightInfo());
		return $allInfo;
	}

	function addHotelBooking($newHotelBooking){
		$this->hotelBookings[] = $newHotelBooking;
	}

	function getHotelBookingInfo($index){
		$allInfo = array($this->hotelBookings[$index]->getRooms(), $this->hotelBookings[$index]->getNumber(), $this->hotelBookings[$index]->getDuration(), $this->hotelBookings[$index]->getPrice(), $this->hotelBookings[$index]->getHotelInfo());
		return $allInfo;
	}

	function addTaxiService($newTaxiService){
		$this->taxiHires[] = $newTaxiService;
	}

	function getTaxiService($index){
		return $this->taxiHires[$index]->getTaxiInfo();
	}
}

?>