$(document).ready(function () {
    /*ANIMAÇÃO DO HAMBURGER BUTTON*/
    $('.animated-button').on('click', function () {

        $('.animated-icon').toggleClass('open');
    })


    $('.testimonial__list').slick({
        infinite: true,
        slidesToShow: 2,
        autoplay: true,
        autoplaySpeed: 3000,
        centerMode: true,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        responsive: [
            {
              breakpoint: 768,
              settings: {
                centerMode: false,
                slidesToShow: 2,
              }
            },
            {
              breakpoint: 600,
              settings: {
                  centerMode: false,
                  slidesToShow: 1,
              }
            },
            {
              breakpoint: 460,
              settings: {
                centerMode: false,
                slidesToShow: 1,
              }
            }
        ]
    });

    // RESPONSIVE RECAPTCHA 
    function rescaleCaptcha(){
      var width = $('.g-recaptcha').parent().width();
      var scale;
      if (width < 302) {
        scale = width / 302;
      } else{
        scale = 1.0; 
      }

      $('.g-recaptcha').css('transform', 'scale(' + scale + ')');
      $('.g-recaptcha').css('-webkit-transform', 'scale(' + scale + ')');
      $('.g-recaptcha').css('transform-origin', '0 0');
      $('.g-recaptcha').css('-webkit-transform-origin', '0 0');
    }
    rescaleCaptcha();
    $( window ).resize(function() { rescaleCaptcha(); });


}); 
