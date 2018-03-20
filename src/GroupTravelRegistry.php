<?php
require 'Member.php';

class GroupTravelRegistry
{
	private $instance;
	private $participantListUnder21;
	//settype($participantListUnder21, "array");
	private $participantList21to25;
	//settype($participantList21to25, "array");
	private $participantList26to30;
	//settype($participantList26to30, "array");

	function __construct(){
		$this->participantListUnder21 = array();
		$this->participantList21to25 = array();
		$this->participantList26to30 = array();
	}

	public static function getInstance(){
		if(!isset(self::$instance)){
			self::$instance = new GroupTravelRegistry();
		}
		return self::$instance;
	}

	function addParticipant($newParticipant){
		if($newParticipant->getAge() < 21){
			$participantListUnder21[] = $newParticipant;
		}
		else if($newParticipant->getAge() >= 21 && $newParticipant->getAge() <=25){
			$participantList21to25[] = $newParticipant;
		}
		else{
			$participantList26to30[] = $newParticipant;
		}
	}

	function filterByAge($member){
		$filterResults = array();
		if($member->getAge() < 21){
			foreach ($participantListUnder21 as $value) {
				if($value->getUsername() != $member->getUsername()){
					$filterResults[] = $value;
				}
			}
			return $filterResults;
		}
		else if($member->getAge() >= 21 && $member->getAge() <=25){
			foreach ($participantList21to25 as $value) {
				if($value->getUsername() != $member->getUsername()){
					$filterResults[] = $value;
				}
			}
			return $filterResults;
		}
		else{
			foreach ($participantList26to30 as $value) {
				if($value->getUsername() != $member->getUsername()){
					$filterResults[] = $value;
				}
			}
			return $filterResults;
		}
	}

	function filterByLocation($location){

	}
}

?>
