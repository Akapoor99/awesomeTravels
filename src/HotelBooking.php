<?php
require 'Hotel.php';

class HotelBooking
{
	private $hotel;
	private $hotelRooms;
	//settype($hotelRooms, "array");
	private $numberOfPeople;
	//settype($numberOfPeople, "int");
	private $startDate;
	private $duration;
	//settype($duration, "int");
	private $price;
	//settype($price, "float");

	function __construct($_hotel, $_rooms. $_number, $_start, $_duration, $_price){
		$this->hotel = $_hotel;
		$this->hotelRooms = $_rooms;
		$this->numberOfPeople = $_number;
		$this->duration = $_duration;
		$this->startDate = new DateTime($_start);
		$this->price = $_price;
	}

	function getHotelInfo(){
		return $this->hotel->getAllInfo();
	}

	function getStartDate(){
		return $this->startDate;
	}

	function getRooms(){
		return $this->hotelRooms;
	}

	function getNumber(){
		return $this->numberOfPeople;
	}

	function getDuration(){
		return $this->duration;
	}

	function getPrice(){
		return $this->price;
	}
}

?>
