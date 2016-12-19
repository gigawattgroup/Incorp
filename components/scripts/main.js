(function($) {

  // set vars:
  var header = $("#masthead"),
  brand = $(".navbar-brand"),
  nav = $(".navbar"),
  expert_btn1 = $(".header .btn-expert"),
  expert_btn2 = $("#intro .btn-expert"),
  breakpointSM = 769,
  breakpointHeader = 613,
  minWidth =  '(min-width: '+breakpointSM+'px)';

  // dropdown on hover
  toggleMenuHover(minWidth);

  hideExpertBTN(minWidth);

  // on page load remove "talk to an expert" button on the homepage
  function hideExpertBTN(size) {
    if($("#intro").length) {
      if (window.matchMedia(size).matches && $("#masthead.fixed-header").length == 0) {
        expert_btn1.addClass('invisible');
      } else {
        expert_btn1.removeClass('invisible');
      }
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

  // animate hamburger menu
  $('.navbar-toggle').click(function(){
		$(this).toggleClass('open');
	});

  // responsive reactions
  $(window).resize(function(){

    // equial heights for homepage options
    $('#options .desc').setAllToMaxHeight();

    // dropdown on hover
    toggleMenuHover(minWidth);

    hideExpertBTN(minWidth);

  });




  // window scroll reactions
  $(window).on("scroll", function(e) {
    //console.log($(window).scrollTop());

    // fix header on scroll
    fixHeader();

    // toggle "talk to an expert" button
    ToggleExpertBTN(minWidth);
  });



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

  //toggle homepage "talk to an expert" button
  function ToggleExpertBTN(size) {
    var first = expert_btn2.offset().top + expert_btn2.outerHeight();
    var second = nav.offset().top + nav.outerHeight();
    var distance = parseInt(second) - parseInt(first);

    if (distance > 0) {
      expert_btn1.removeClass('invisible');
    } else {
      if (window.matchMedia(size).matches) {
        expert_btn1.addClass('invisible');
      }
    }

  }

  // dropdown on hover
  function toggleMenuHover(size) {

    $('ul.nav li.dropdown').on("hover", function(e) {
      console.log("hover detected");
        if (e.type == "mouseenter") {
          if (window.matchMedia(size).matches) {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(300);
          }
        } else {
          if (window.matchMedia(size).matches) {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(300);
          }
        }
    });

  }


})(jQuery);
