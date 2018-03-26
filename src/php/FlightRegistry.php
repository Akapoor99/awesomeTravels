<?php
require_once 'Flight.php';

class FlightRegistry
{
	private $flightList;
	private $instance;

	private function __construct(){
		$this->flightList= array();
	}

	public static function getInstance(){
		if(!isset(self::$instance)){
			self::$instance = new FlightRegistry();
		}
		return self::$instance;
	}

	function addFlight($newFlight){
		$this->flightList[$newFlight->getFlightNumber()] = $newFlight;
	}

	function searchFlights($_date, $dloc, $aloc){
		$searchResults = array();
		foreach ($this->flightList as $value) {
			if($value->getDate()==$_date && $value->getDepartureLocation()==$dloc && $value->getArrivalLocation()==$aloc){
				$searchResults[] = $value;
			}
		}
		return $searchResults;
	}
}

?>
