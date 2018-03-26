<?php

class Hotel
{
	private $hotelName;
	//settype($hotelName, "string");
	private $location;
	//settype($location, "string");
	private $availableRooms;
	//settype($availableRooms, "array");
	private $price;
	private $address;

	function __construct($name, $loc, $rooms, $ppn, $_address){
		$this->hotelName = $name;
		$this->location = $loc;
		$this->availableRooms = $rooms;
		$this->price = $ppn;
		$this->address = $_address;
	}

	function getHotelName(){
		return $this->hotelName;
	}

	function getLocation(){
		return $this->location;
	}

	function getAvailableRooms(){
		return $this->availableRooms;
	}

	function getPricePerNight(){
		return $this->price;
	}

	function getAddress(){
		return $this->address;
	}

	function getAllInfo(){
		$allInfo = array($this->hotelName, $this->location, $this->availableRooms, $this->price);
		return $allInfo;
	}
}

?>
