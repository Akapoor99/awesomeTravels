<?php
require_once 'Hotel.php';

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

	function addHotel($newHotel){
		$this->hotelList[] = $newHotel;
	}

	function searchHotels($location){
		$searchResults = array();
		foreach ($$hotelList as $value) {
			if($value->getLocation()==$location){
				$searchResults[] = $value;
			}
		}
		return $searchResults;
	}
}

?>
