
window.onscroll = function() {myFunction()};

var booking = document.getElementById("top");
var navbar = document.getElementById("searchBar");
var divTop = booking.offsetTop +10;

function myFunction() {
if (divTop >= window.pageYOffset) {
navbar.classList.add("sticky");
} else {
  navbar.classList.remove("sticky");
}
}
