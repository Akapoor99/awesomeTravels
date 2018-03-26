<?php

require_once 'Booking.php';
require_once 'ContactInfo.php';
require_once 'Customer.php';
require_once 'FlightRegistry.php';
require_once 'FlightBooking.php';
require_once 'Flight.php';
require_once 'HotelRegistry.php';
require_once 'HotelBooking.php';
require_once 'Hotel.php';
require_once 'MemberRegistry.php';
require_once 'Member.php';
require_once 'PaymentInfo.php';
require_once 'TaxiService.php';

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

$hotel1 = new Hotel('Hotel French-name', 'Paris', 52, 95.00, "1 French Road, Paris, 75052");
$hotel2 = new Hotel('Some British Place', 'Hull', 27, 00.05, "2 Boring Garden, Hull, HU2 9EZ");
$hotel3 = new Hotel('More French Names', 'Paris', 30, 100.00, "3 Froggy Lane, Paris, 75097");
$hotel4 = new Hotel('One More Hotel', 'Paris', 100, 80.00, "4 Frenchy Street, Paris, 75109");
$hotelRegistry = HotelRegistry::getInstance();
$hotelRegistry->addHotel($hotel1);
$hotelRegistry->addHotel($hotel2);
$hotelRegistry->addHotel($hotel3);
$hotelRegistry->addHotel($hotel4);
$sHR = serialize($hotelRegistry);
file_put_contents('HotelRegistryStore', $sHR);

?>
