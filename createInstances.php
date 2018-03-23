<?php
require 'Booking.php';
require 'ContactInfo.php';
require 'Customer.php';
require 'Flight.php';
require 'FlightBooking.php';
require 'FlightRegistry.php';
require 'HotelRegistry.php';
require 'HotelBooking.php';
require 'HotelRegistry.php';
require 'Member.php';
require 'Member.php';
require 'PaymentInfo.php';
require 'TaxiService.php';

$member1 = new Member('User1', '1234', 20, 'Tasdiq', 'Dewan', 'tasdiqd@gmail.com', '07466448234');
$memberRegistry = MemberRegistry::getInstance();
$memberRegistry->addMember($member1);
$sMR = serialize($memberRegistry);
file_put_contents('MemberRegistryStore', $sMR);

$flight1 = new Flight('2814', 150, '25 April 2018', 'London', '15:30','Paris', '16:30', 'BA', 'LHR', 'LBG', 100.00);
$flight2 = new Flight('2452', 100, '25 April 2018', 'London', '07:45','Paris', '09:00', 'BA', 'LHR', 'LBG', 85.00);
$flight3 = new Flight('3521', 140, '25 April 2018', 'London', '12:00','Paris', '13:00', 'AF', 'LGW', 'LBG', 100.00);
$flight4 = new Flight('1895', 150, '24 May 2018', 'London', '15:30','Paris', '16:30', 'BA', 'LHR', 'LBG', 100.00);
$flightRegistry = FlightRegistry::getInstance();
$flightRegistry->addFlight($flight1);
$flightRegistry->addFlight($flight2);
$flightRegistry->addFlight($flight3);
$flightRegistry->addFlight($flight4);
$sFR = serialize($flightRegistry);
file_put_contents('FlightRegistryStore', $sFR);

?>
