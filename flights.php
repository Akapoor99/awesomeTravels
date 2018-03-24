<!doctype html>
<!--Hello earthlings-->
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="description" content="This is a online travel booking system making booking much easier !">
    <meta name="author" content="Ayushman">
    <!--StyleSheet-->
    <link href="css/searchResult/style.css" rel="stylesheet">
    <link href="css/searchResult/navbar.css" rel="stylesheet">
    <link href="css/searchResult/header.css" rel="stylesheet">
    <link href="css/searchResult/flightdivs.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,900" rel="stylesheet">


    <title>Awesome Travels- nobody does it !</title>
  </head>
  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-light fixed-top" id="mainNav">
      <div class="container">
        <div class="nav-head">
          <a class="navbar-brand">Awesome Travels</a>
        </div>
        <div class="nav-body">
          <div class="nav-container">
          <a class="nav-item" href="flights.html">Fights</a> |
          <a class="nav-item" href="hotels.html">Hotels</a> |
          <a class="nav-item" href="taxis">Taxi</a> |
          <a class="nav-item" href="complete.html">complete</a>
        </div>
        <div class="nav-footer">
          <button class="btn-login">Log in</button>
        </div>
      </div>
      </div>
    </nav>

    <!-- This section contains the flight booking process uses infodivs css-->
    <section id="booking">
      <div class="container">
        <div class="top-bar">
        </div>
        <div class="">
        </div>
      </div>
    </section>


    <section id="flights">
      <div class = "container-fluid">

<!--require 'src/php/Flight.php';
require 'src/php/FlightRegistry.php';
$pointA = $_POST["flightFrom"];
$pointB = $_POST["flightTo"];
$dateStart = $_POST["departureDate"];
$dateEnd = $_POST["returnDate"];
$numOfP = $_POST["passengers"];
$class = $_POST["classType"];
$fRegS = file_get_contents('flightRegistryStore');
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
  ?>-->
<div class ="row">
<div class = "col-8 flightcontainer" id ="fcont'.$i.'">
      <div class = "flight row"  id ="fsimple'.$i.'">
        <div class = "simpinfo col-10">
          <img src="icons/plane.png" alt="plane icn"/>
          <div class = "flighttextcontainer">
            <span id="airportcode">
              <?php
              echo "LON";
              ?></span><span id="timestyle">16:00</span>
            <div class = "dividerline">
            </div>
            <span id="airportcode">LAX</span><span id="timestyle">20:00</span>
          </div>
        </div>
        <button class = "col-2"  onclick="toggleinfo('minfo'.$i.'', 'fsimple'.$i.''','fcont'.$i.''','rotatearr'.$i.''')">
          <img src="icons/down-arrow.png" alt="down icn" id="rotatearr".$i""/>
        </button>
      </div>
      <div class = "moreinfo col" id="minfo'.$i.'" style = "visibility: collapse;">
        <div class = "row minforow">
          <div class ="col-3">
            <span id="airportcode">Tue 13 Mar</span>
          </div>
          <div class ="col-6">
            <div class = "row">
              <div class = "col-5">
                <span id="airportcode">LHR</span></br>
                <span id="timestyle">16:00</span>
              </div>
              <div class = "col-2" style="padding-left:0; padding-right:0; padding-top: 22px;">
                <div class = "dividerline" id="divlinminfo"></div>
              </div>
              <div class = "col-5">
                <span id="airportcode">LAX</span></br>
                <span id="timestyle">20:00</span>
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

    </div>
  </div>

  <!--      <div class ="row">
          <div class = "col-8 flightcontainer" id ="fcont1">
            <div class = "flight row"  id ="fsimple1">
              <div class = "simpinfo col-10">
                <img src="icons/plane.png" alt="plane icn"/>
                <div class = "flighttextcontainer">
                  <span id="airportcode">LHR</span><span id="timestyle">16:00</span>
                  <div class = "dividerline">
                  </div>
                  <span id="airportcode">LAX</span><span id="timestyle">20:00</span>
                </div>
              </div>
              <button class = "col-2"  onclick="toggleinfo('minfo1', 'fsimple1','fcont1','rotatearr1')">
                <img src="icons/down-arrow.png" alt="down icn" id="rotatearr1"/>
              </button>
            </div>
            <div class = "moreinfo col" id="minfo1" style = "visibility: collapse;">
              <div class = "row minforow">
                <div class ="col-3">
                  <span id="airportcode">Tue 13 Mar</span>
                </div>
                <div class ="col-6">
                  <div class = "row">
                    <div class = "col-5">
                      <span id="airportcode">LHR</span></br>
                      <span id="timestyle">16:00</span>
                    </div>
                    <div class = "col-2" style="padding-left:0; padding-right:0; padding-top: 22px;">
                      <div class = "dividerline" id="divlinminfo"></div>
                    </div>
                    <div class = "col-5">
                      <span id="airportcode">LAX</span></br>
                      <span id="timestyle">20:00</span>
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

          </div>
        </div>

        <div class ="row">
          <div class = "col-8 flightcontainer" id ="fcont2">
            <div class = "flight row"  id ="fsimple2">
              <div class = "simpinfo col-10">
                <img src="icons/plane.png" alt="plane icn"/>
                <div class = "flighttextcontainer">
                  <span id="airportcode">LHR</span><span id="timestyle">16:00</span>
                  <div class = "dividerline">
                  </div>
                  <span id="airportcode">LAX</span><span id="timestyle">20:00</span>
                </div>
              </div>
              <button class = "col-2"  onclick="toggleinfo('minfo2', 'fsimple2','fcont2','rotatearr2')">
                <img src="icons/down-arrow.png" alt="down icn" id="rotatearr2"/>
              </button>
            </div>
            <div class = "moreinfo col" id="minfo2" style = "visibility: collapse;">
              <div class = "row minforow">
                <div class ="col-3">
                  <span id="airportcode">Tue 13 Mar</span>
                </div>
                <div class ="col-6">
                  <div class = "row">
                    <div class = "col-5">
                      <span id="airportcode">LHR</span></br>
                      <span id="timestyle">16:00</span>
                    </div>
                    <div class = "col-2" style="padding-left:0; padding-right:0; padding-top: 22px;">
                      <div class = "dividerline" id="divlinminfo"></div>
                    </div>
                    <div class = "col-5">
                      <span id="airportcode">LAX</span></br>
                      <span id="timestyle">20:00</span>
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

          </div>
        </div>
        <div class = "row">
          <div class = "col-8 flightcontainer" id ="fcont3">
          <div class = "flight row"  id ="fsimple3">
            <div class = "simpinfo col-10">
              <img src="icons/plane.png" alt="plane icn"/>
              <div class = "flighttextcontainer">
                <span id="airportcode">LHR</span><span id="timestyle">16:00</span>
                <div class = "dividerline">
                </div>
                <span id="airportcode">LAX</span><span id="timestyle">20:00</span>
              </div>
            </div>
            <button class = "col-2" onclick="toggleinfo('minfo3', 'fsimple3','fcont3','rotatearr3')">
              <img src="icons/down-arrow.png" alt="down icn" id="rotatearr3"/>
            </button>
          </div>
          <div class = "moreinfo col" id="minfo3" style = "visibility: collapse;">
            <div class = "row minforow">
              <div class ="col-3">
                <span id="airportcode">Tue 13 Mar</span>
              </div>
              <div class ="col-6">
                <div class = "row">
                  <div class = "col-5">
                    <span id="airportcode">LHR</span></br>
                    <span id="timestyle">16:00</span>
                  </div>
                  <div class = "col-2" style="padding-left:0; padding-right:0; padding-top: 22px;">
                    <div class = "dividerline" id="divlinminfo"></div>
                  </div>
                  <div class = "col-5">
                    <span id="airportcode">LAX</span></br>
                    <span id="timestyle">20:00</span>
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
        </div>
        </div>-->

      </div>
    </section>
    <script>
      rotate = document.getElementById('rotateonhover');
      function toggleinfo(minfo, fsimple, fcont, rotate){
        var toggled = document.getElementById(minfo);
        console.log(toggled.style.visibility);
        if(toggled.style.visibility === "collapse"){
          document.getElementById(fcont).style.height = "auto";
          document.getElementById(minfo).style.visibility = "visible";
          document.getElementById(fsimple).style.borderRadius = "25px 25px 0 0";
          document.getElementById(rotate).className='pointdown';
        }
        else{
          document.getElementById(fcont).style.height = "60px";
          document.getElementById(minfo).style.visibility = "collapse";
          document.getElementById(fsimple).style.borderRadius = "25px";
          document.getElementById(rotate).className='pointup';
        }
      }
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
