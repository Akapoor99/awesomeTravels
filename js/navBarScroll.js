// This is where the java script code for the file index.html goes !
(function($) {
  // Collapse the navbar when page is scrolled
  $(window).scroll(function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-change");
    } else {
      $("#mainNav").removeClass("navbar-change");
    }
    if ($("#searchBar").offset().bottom > 100) {
      $("#searchBar").addClass("sbar-change");
    } else {
      $("#searchBar").removeClass("sbar-change");
    }

  });

    $( "#departureDpicker" ).datepicker();
    $( "#returnDpicker" ).datepicker();

})(jQuery);
