<?php

class Flight
{
	private $flightNumber;
	//settype($flightNumber, "string");
	private $availabaleSeats;
	private $flightDate;
	//settype($availabaleSeats, "integer");
	private $departureLocation;
	//settype($departureLocation, "string");
	private $departureTime;
	//settype($departureTime, "string");
	private $arrivalLocation;
	//settype($arrivalLocation, "string");
	private $arrivalTime;
	//settype($arrivalTime, "string");
	private $airline;
	//settype($airline, "string");
	private $airport;
	private $price;

	function __construct($number, $seats, $fdate, $dlocation, $dtime, $alocation, $atime, $airl, $airp, $price){
		$this->flightNumber = $number;
		$this->availabaleSeats = $seats;
		$this->flightDate = new DateTime($fdate);
		$this->departureLocation = $dlocation;
		$this->departureTime = new DateTime($dtime);
		$this->arrivalLocation = $alocation;
		$this->arrivalTime = new DateTime($atime);
		$this->airline = $airl;
		$this->airport = $airp;
		$this->price = $price;
	}

	function getAllInfo(){
		$allInfo = array($this->flightNumber, $this->availabaleSeats,$this->flightDate, $this->departureLocation, $this->departureTime->format('Y-m-d H:i:s'), $this->arrivalLocation, $this->arrivalTime->format('Y-m-d H:i:s'), $this->airline, $this->airport, $this->price);
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


	function getDate(){
		return $this->flightDate;
	}

	function getDepartureLocation(){
		return $this->departureLocation;
	}

	function getArrivalLocation(){
		return $this->arrivalLocation;
	}
	
	function getAirline(){
		return $this->airline;
	}
	
	function getAirport(){
		return $this->airport;
	}
	
	function getPrice(){
		return $this->price;
	}
}

?>
