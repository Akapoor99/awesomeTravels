<?php
require 'Hotel.php';

class HotelRegistry
{
	private $hotelList;
	//settype($hotelList, "array");
	private $instance;

	private function __construct(){
		$this->hotelList = array();
	}

	public static function getInstance(){
		if(!isset(self::$instance)){
			self::$instance = new HotelRegistry();
		}
		return self::$instance;
	}

	function searchHotels($location, $number){
		$searchResults = array();
		foreach ($$hotelList as $value) {
			if($value->getLocation()==$location && count($value->getAvailableRooms())>=$number){
				$searchResults[] = $value;
			}
		}
		return $searchResults;
	}
}

?>
