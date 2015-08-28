$(document).ready(function() {
  var caro = $("#owl-demos");
  var owl = $("#owl-demo");
  // var owl2 = $("#midem");
 
  owl.owlCarousel({
      items : 3, //10 items above 1000px browser width
      itemsDesktop : [800,5], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,3], // betweem 900px and 601px
      itemsTablet: [600,2], //2 items between 600 and 0
      itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
      vertical : true
  });

  caro.owlCarousel({
      items : 3, //10 items above 1000px browser width
      itemsDesktop : [800,5], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,3], // betweem 900px and 601px
      itemsTablet: [600,2], //2 items between 600 and 0
      itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
      vertical : true
  });
 
 owl.trigger('owl.play',2000); //owl.play event accept autoPlay speed as second parameter
 caro.trigger('owl.play',2000);
});