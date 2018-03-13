<?php

class Flight
{
	private $flightNumber;
	settype($flightNumber, "string");
	private $availabaleSeats;
	settype($availabaleSeats, "integer");
	private $departureLocation;
	settype($departureLocation, "string");
	private $departureTime;
	//settype($departureTime, "string");
	private $arrivalLocation;
	settype($arrivalLocation, "string");
	private $arrivalTime;
	//settype($arrivalTime, "string");
	private $airline;
	settype($airline, "string");

	function __construct($number, $seats, $dlocation, $dtime, $alocation, $atime, $air){
		$this->flightNumber = $number;
		$this->availabaleSeats = $seats;
		$this->departureLocation = $dlocation;
		$this->departureTime = new DateTime($dtime);
		$this->arrivalLocation = $alocation;
		$this->arrivalTime = new DateTime($atime);
		$this->airline = $air;
	}

	function getAllInfo(){
		$allInfo = array($this->flightNumber, $this->availabaleSeats, $this->departureLocation, $this->departureTime->format('Y-m-d H:i:s'), $this->arrivalLocation, $this->arrivalTime->format('Y-m-d H:i:s'), $this->airline);
		return $allInfo;
	}

	function changeSeatNumbers($change){
		$this->availabaleSeats = $this->availabaleSeats + $change;
	}

	function getAvailableSeats(){
		return $this->availabaleSeats;
	}

	function getFlightNumber(){
		return $this->flightNumber;
	}

	

}

?>