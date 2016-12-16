(function($) {

  $.fn.setAllToMaxHeight = function(){
    return this.height( Math.max.apply(this, $.map( this , function(e){ return $(e).height() }) ) );
  }

  // equial heights for homepage options
  $('#options .desc').setAllToMaxHeight();

  // responsive reactions
  $(window).resize(function(){

    // equial heights for homepage options
    $('#options .desc').setAllToMaxHeight();

  });

  // testimonials carousel
  $('#testimonials-carousel').owlCarousel({
      loop:true,
      margin:10,
      items: 1,
      autoplay:true,
      autoplayHoverPause:true
  });

  // fix header on scroll
  var header = $("#masthead"),
  brand = $(".navbar-brand");

  $(window).on("scroll", function(e) {
    //console.log($(window).scrollTop());
    if ($(window).scrollTop() >= 55 && $(window).scrollTop() < 104) {
      header.removeClass("fixed-header").addClass("fixed-header-step");
    } else if ($(window).scrollTop() >= 105) {
      header.removeClass("fixed-header-step").addClass("fixed-header");
    } else {
      header.removeClass("fixed-header-step fixed-header");
    }

  });


  // dropdown on hover
  /*$('ul.nav li.dropdown').hover(
    function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(300);
    },
    function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(300);
    }
  );*/



})(jQuery);
