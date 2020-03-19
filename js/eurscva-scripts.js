(function( $ ) {
    // sticky menu
    $(window).scroll(function () {
      if($(window).scrollTop() > 200) {
        $("#masthead").addClass('site-header--sticky');
      } else {
        $("#masthead").removeClass('site-header--sticky');
      }
    });

    // lightbox for PDF
    if ($('.wp-block-file').length > 0) {
      if ($(window).width() > 1025) {
        $('.wp-block-file').find('a').addClass('fancybox-pdf');
      }
    }
})( jQuery );
