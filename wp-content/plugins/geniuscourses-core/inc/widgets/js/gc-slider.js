(function($){
  $(window).on("elementor/frontend/init", function(){
    elementorFrontend.hooks.addAction("frontend/element_ready/geniuscourses_slider.default", function($scope,$){
      $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        margin: 30,
        dots: true,
        loop: true,
        center: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
      });
    });
  });
})(jQuery);
