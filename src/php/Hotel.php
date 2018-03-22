<?php

class Hotel
{
	private $hotelName;
	settype($hotelName, "string");
	private $location;
	settype($location, "string");
	private $availableRooms;
	settype($availableRooms, "array");

	function __construct($name, $loc, $rooms){
		$this->hotelName = $name;
		$this->location = $loc;
		$this->availableRooms = $rooms;
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

	function getAllInfo(){
		$allInfo = array($this->hotelName, $this->location, $this->availableRooms);
		return $allInfo;
	}
}

?>