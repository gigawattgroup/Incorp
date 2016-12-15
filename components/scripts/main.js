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
