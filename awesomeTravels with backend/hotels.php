<?php
session_start();

?>

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
    <link href="css/searchResult/hoteldivs.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--for stars-->


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
          <a class="nav-item" href="taxis.html">Taxi</a> |
          <a class="nav-item" href="complete.html">complete</a>
        </div>
        <div class="nav-footer">
          <button class="btn-login">Log in</button>
        </div>
      </div>
      </div>
    </nav>


    <section id="booking" style = "background-color: rgba(219,80, 74, 1);">
      <div class="container">
        <div class="top-bar">
        </div>
        <div class="">
        </div>
      </div>
    </section>

    <section id="hotels">
      <div id="bigtitle" style = "margin-bottom: 30px;">
        <span>Hotels</span>
      </div>
      <div class = "container-fluid">


<?php
$path = dirname(dirname(__FILE__)).'/awesomeTravels-patch-2/php/HotelRegistry.php';
require_once($path);
  $location = $_POST["location"];
  $checkIn = $_POST["checkIn"];
  $checkOut = $_POST["checkOut"];
  $numOfA = $_POST["numOfAdults"];
  $numOfC = $_POST["numOfChildren"];
  $hRegS = file_get_contents(dirname(dirname(__FILE__)).'/awesomeTravels-patch-2/php/HotelRegistryStore');
  $hotelRegistry = unserialize($hRegS);
  $searchResults = $hotelRegistry->searchHotels("Paris");

    $i=0;
  foreach($searchResults as $hotel) {
    $hotelName = $hotel->getHotelName();
    $hotelLocation = $hotel->getLocation();
    $pricePerNight = $hotel->getPricePerNight();
    $availableRooms = $hotel->getAvailableRooms();
    $hotelAddress = $hotel->getAddress();
    echo'
        <div class ="row">
          <div class = "col-8 hotelcontainer" id ="fcont'.$i.'">
            <div class = "hotel row"  id ="fsimple'.$i.'">
              <div class = "simpinfo col-10">
                <div class = "row" style="margin:0; padding: 0;">
                  <div class = "col-2">
                    <img src="icons/hotel.png"class="img-fluid mx-auto d-block" alt="hotel icn"/>
                  </div>
                  <div class = "hoteltextcontainer col-4">
                      <div class="text-center" style="margin-top:15px;">
                        <span id="airportcode">'.$hotelName.'</span></br>
                        <span id="timestyle">'.$hotelLocation.'</span>
                      </div>
                  </div>
                  <div class = "starratings col-3">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </div>
                  <div class = "price col-3" >
                    <span id="airportcode">'.$pricePerNight.'</span></br>
                  </div>


                </div>
              </div>
              <button class = "col-2"  onclick="toggleinfo(\'minfo'.$i.'\', \'fsimple'.$i.'\',\'fcont'.$i.'\',\'rotatearr'.$i.'\')">
                <img src="icons/down-arrow.png" alt="down icn" id="rotatearr'.$i.'"/>
              </button>
            </div>
            <div class = "moreinfo col" id="minfo'.$i.'" style = "visibility: collapse;">
              <div class = "row minforow">

                <div class ="offset-2 col-8">
                  <div class = "row">
                    <div class = "col-5">
                      <span id="airportcode">Check In</span></br>
                      <span id="timestyle">'.$checkIn.'</span>
                    </div>
                    <div class = "col-2" style="padding-left:0; padding-right:0; padding-top: 22px;">
                      <div class = "dividerline" id="divlinminfo"></div>
                    </div>
                    <div class = "col-5">
                      <span id="airportcode">Check Out</span></br>
                      <span id="timestyle">'.$checkOut.'</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class = "row minforow">
                <div class ="col-3">
                  <img src="icons/hotel.png"class="img-fluid mx-auto d-block" alt="hotel icn"/>
                </div>
                <div class ="col-6">
                  <span id="timestyle">Available Rooms: '.$availableRooms.'</span> </br>
                  <span id="timestyle">Number of Adults: '.$numOfA.'</span> </br>
                  <span id="timestyle">Number of Children: '.$numOfC.'</span> </br>
                  <span id="timestyle">Address: '.$hotelAddress.'</span>
                </div>
              </div>
              <div class = "row minforow">
                <div class ="col text-center" style="margin-bottom: 20px">
                  <button type="button" class="btn btn-danger">Add To Plan</button>
                </div>

              </div>
            </div>

          </div>
        </div>';
        $i++;
      }
      ?>

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