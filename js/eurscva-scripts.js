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
    if ($('.wp-block-file.wp-block-file--boxed').length > 0) {
        $('.wp-block-file.wp-block-file--boxed').find('a').addClass('fancybox-pdf');
    }
})( jQuery );
