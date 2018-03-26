function startTime() {
  var weeks=[,"Mon","Tue","Web","Thur","Fri","Sat","Sun"];
    var today = new Date();
    var d=today.getDay();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('date').innerHTML =
    "&nbsp" +weeks[d] + "&nbsp";
    document.getElementById('time').innerHTML =
    h + ":" + m ;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
function openBookingType(evt, searchType) {
    var i, searchBox;
    searchBox = document.getElementsByClassName("bookingBox");
    for (i = 0; i < searchBox.length; i++) {
        searchBox[i].style.display = "none";
    }
    document.getElementById(searchType).style.display = "block";
    evt.currentTarget.className += " active";
    document.getElementById('content1').style.display = "none";
    document.getElementById('content2').style.display = "none";
  }
  function closeBookingType() {
      var i, searchBox;
      searchBox = document.getElementsByClassName("bookingBox");
      for (i = 0; i < searchBox.length; i++) {
          searchBox[i].style.display = "none";
        }
      document.getElementById('content1').style.display = "block";
      document.getElementById('content2').style.display = "inline";
    }
    function openLogin() {
        document.getElementById('logIn').style.display = "flex";
      }
      function closeLogin() {
          document.getElementById('logIn').style.display = "none";
        }
