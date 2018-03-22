<?php
require 'Flight.php';
require 'FlightRegistry.php';

$pointA = $_POST["pointA"];
$pointB = $_POST["pointB"];
$dateStart = $_POST["datestart"];
$dateEnd = $_POST["dateend"];
$fRegS = file_get_contents('flightRegistryStore');
$flightRegistry = unserialize('$fRegS');
$searchResults = $flightRegistry->searchFlights($dateStart, $pointA, $pointB);
$i = 0;
foreach ($searchResults as $flight) {
  $airportD = $flight->getAirportDeparture();
  $airportA = $flight->getAirportArrival();
  $airline = $flight->getAirline();
  $price = $flight->getPrice();
  $date = $flight->getDate();
  $depTime = $flight->getDepartureTime();
  $arrTime = $flight->getArrivalTime();

  echo '<div class = "col-8 flightcontainer" id ="fcont'.$i.'">';
      echo    '<div class = "flight row"  id ="fsimple'.$i.'">';
        echo    '<div class = "simpinfo col-10">';
        echo      '<img src="icons/plane.png" alt="plane icn"/>';
        echo      '<div class = "flighttextcontainer">';
        echo        '<span id="airportcode">'.$airportD.'</span><span id="timestyle">'.$depTime.'</span>';
        echo        '<div class = "dividerline">';
        echo        '</div>';
        echo        '<span id="airportcode">'.$airportA.'</span><span id="timestyle">'.$arrTime.'</span>';
        echo      '</div>';
        echo    '</div>';
        echo    '<button class = "col-2"  onclick="toggleinfo("minfo'.$i.'", "fsimple'.$i.'","fcont'.$i.'","rotatearr'.$i.'")">';
        echo      '<img src="icons/down-arrow.png" alt="down icn" id="rotatearr'.$i.'"/>';
        echo    '</button>';
        echo  '</div>';
        echo  '<div class = "moreinfo col" id="minfo'.$i.'" style = "visibility: collapse;">';
        echo    '<div class = "row minforow">';
        echo      '<div class ="col-3">';
        echo        '<span id="airportcode">'.$dateStart->format('d D M').'</span>';
        echo      '</div>
              <div class ="col-6">
                <div class = "row">
                  <div class = "col-5">
                    <span id="airportcode">'.$airportD.'</span></br>
                    <span id="timestyle">'.$depTime.'</span>
                  </div>
                  <div class = "col-2" style="padding-left:0; padding-right:0; padding-top: 22px;">
                    <div class = "dividerline" id="divlinminfo"></div>
                  </div>
                  <div class = "col-5">
                    <span id="airportcode">'.$airportA.'</span></br>
                    <span id="timestyle">'.$arrTime.'</span>
                  </div>
                </div>
              </div>
              <div class ="col-3">
                <span id="airportcode">Economy</span></br>
                <span id="timestyle">5hrs 00mins</span>
              </div>
            </div>
            <div class = "row minforow">
              <div class ="col-3">
                <img src = "icons/BAlogo.png" />
              </div>
              <div class ="col-6">
                <span id="timestyle">British Airways 824</span> </br>
                <span id="timestyle">Narrow-body jet Airbus A320-100/200</span> </br>
                <span id="timestyle">Operated by Aer Lingus</span>
              </div>
            </div>
            <div class = "row minforow">
              <div class ="col text-center" style="margin-bottom: 20px">
                <button type="button" class="btn btn-danger">Add To Plan</button>
              </div>

            </div>
          </div>

        </div>';
        $i++;
}

?>
