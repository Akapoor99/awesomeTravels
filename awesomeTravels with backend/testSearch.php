<?php

require_once 'php/FlightRegistry.php';

$flight1 = new Flight('2814', 150, '25 April 2018', 'London', '15:30','Paris', '16:30', 'BA', 'LHR', 'LBG', 100.00);
$flight2 = new Flight('2452', 100, '25 April 2018', 'London', '07:45','Paris', '09:00', 'BA', 'LHR', 'LBG', 85.00);
$flight3 = new Flight('3521', 140, '25 April 2018', 'London', '12:00','Paris', '13:00', 'AF', 'LGW', 'LBG', 100.00);
$flight4 = new Flight('1895', 150, '24 May 2018', 'London', '15:30','Paris', '16:30', 'BA', 'LHR', 'LBG', 100.00);
$flightRegistry = FlightRegistry::getInstance();
$flightRegistry->addFlight($flight1);
$flightRegistry->addFlight($flight2);
$flightRegistry->addFlight($flight3);
$flightRegistry->addFlight($flight4);
//echo serialize($flight1);
//$results = $flightRegistry->searchFlights("25 April 2018", "London", "Paris");
var_dump($flightRegistry->searchFlights("25 April 2018", "London", "Paris"));

?>
