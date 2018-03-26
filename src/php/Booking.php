<?php
require_once 'FlightBooking.php';
require_once 'HotelBooking.php';
require_once 'TaxiService.php';

class Booking
{
	private $flightBookings;
	private $hotelBookings;
	private $taxiHires;

	function __construct(){
		settype($flightBookings, "array");
		settype($hotelBookings, "array");
	  settype($taxiHires, "array");
	}

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

	function getTaxiServiceInfo($index){
		return $this->taxiHires[$index]->getTaxiInfo();
	}
}

?>
