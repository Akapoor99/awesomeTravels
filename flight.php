
  <head>
    <title>Awesome Travels- nobody does it !</title>
  </head>
  <body>

<?php
  /*require 'src/php/Flight.php';
  //require 'src/php/FlightRegistry.php';*/
  $pointA = $_POST["flightFrom"];
  $pointB = $_POST["flightTo"];
  $dateStart = $_POST["departureDate"];
  $dateEnd = $_POST["returnDate"];
  $jrnyType= $_POST["journey-type"];
  $numOfP = $_POST["passengers"];
  $class = $_POST["classType"];

  $lon="LONDON";

  echo("<p>FROm: $$lon</p>");
  echo'<p>TO: '.$pointB.'</p>';
  echo'<p>Departure date: '.$dateStart.'</p>';
  echo'<p>return date: '.$dateEnd.'</p>';
  echo'<p>Journey type: '.$jrnyType.'</p>' ;
  echo'<p>Number of passengers: '.$numOfP.'</p>' ;
  echo'<p>Travel class: '.$class.'</p>' ;
  /*$fRegS = file_get_contents('flightRegistryStore');
  $flightRegistry = unserialize('$fRegS');
  $searchResults = $flightRegistry->searchFlights($dateStart, $pointA, $pointB);
  $airportD =" Lon";
  for($i=0;$i<=3;$i++)$searchResults as $flight) {
    $flight->getAirportDeparture();
    $airportA = $flight->getAirportArrival();
    $airline = $flight->getAirline();
    $price = $flight->getPrice();
    $date = $flight->getDate();
    $depTime = $flight->getDepartureTime();
    $arrTime = $flight->getArrivalTime();
  }*/
  ?>
  </body>
