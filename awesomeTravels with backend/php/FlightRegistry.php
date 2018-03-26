<?php
require_once 'Flight.php';

class FlightRegistry
{

	private static $instance;
	private $flightList;

	private function __construct(){
		$this->flightList = array();
	}

	public static function getInstance(){
		if(!isset(self::$instance)){
			self::$instance = new FlightRegistry();
		}
		return self::$instance;
	}

	function addFlight($newFlight){
		$this->flightList[] = $newFlight;
		//echo serialize($this->flightList[0]);
	}

	function searchFlights($_date, $dloc, $aloc){
		$searchResults = array();
		//$list = $this->flightList;
		foreach ($this->flightList as $value) {
			if($value->getDate()->format("d F Y")==$_date && $value->getDepartureLocation()==$dloc && $value->getArrivalLocation()==$aloc){
				$searchResults[] = $value;
			}
		}
		return $searchResults;
	}


}

?>
