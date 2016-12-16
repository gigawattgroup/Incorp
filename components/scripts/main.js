(function($) {

  // set vars:
  var header = $("#masthead"),
  brand = $(".navbar-brand"),
  nav = $(".navbar"),
  expert_btn1 = $(".header .btn-expert"),
  expert_btn2 = $("#intro .btn-expert");

  // fix header on scroll
  function fixHeader() {
    if ($(window).scrollTop() >= 55 && $(window).scrollTop() < 104) {
      header.removeClass("fixed-header").addClass("fixed-header-step");
    } else if ($(window).scrollTop() >= 105) {
      header.removeClass("fixed-header-step").addClass("fixed-header");
    } else {
      header.removeClass("fixed-header-step fixed-header");
    }
  }

  $.fn.setAllToMaxHeight = function(){
    return this.height( Math.max.apply(this, $.map( this , function(e){ return $(e).height() }) ) );
  }

  // equial heights for homepage options
  $('#options .desc').setAllToMaxHeight();

  // testimonials carousel
  $('#testimonials-carousel').owlCarousel({
      loop:true,
      margin:10,
      items: 1,
      autoplay:true,
      autoplayHoverPause:true
  });

  // responsive reactions
  $(window).resize(function(){

    // equial heights for homepage options
    $('#options .desc').setAllToMaxHeight();

  });


  // window scroll reactions
  $(window).on("scroll", function(e) {
    //console.log($(window).scrollTop());

    // fix header on scroll
    fixHeader();

    // toggle "talk to an expert" button

  });


  // function ToggleExpertBTN() {
  //
  // }
  //
  // var first = expert_btn2.offset().top;
  // var second = nav.offset().top;
  // var distance = parseInt(first) – parseInt(second);
  // remove homepage "talk to an expert" button



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
