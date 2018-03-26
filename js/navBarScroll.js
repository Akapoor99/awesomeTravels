// This is where the java script code for the file index.html goes !
(function($) {
  // Collapse the navbar when page is scrolled
  var navbar = document.getElementById("mainNav");
  var header = document.getElementById("top");
  var sticky = navbar.offsetTop +10;
  $(window).scroll(function() {
    if (window.pageYOffset >= sticky) {
      $("#mainNav").addClass("navbar-change");
      $("#logo").addClass("logo_onMove");
    } else {
      $("#mainNav").removeClass("navbar-change");
        $("#logo").removeClass("logo_onMove");
    }
    /*if ($("#searchBar").offset().bottom > 500) {
      $("#searchBar").addClass("sbar-change");
    } else {
      $("#searchBar").removeClass("sbar-change");
    }*/

  });

})(jQuery);
