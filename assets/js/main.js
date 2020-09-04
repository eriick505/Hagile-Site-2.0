$(document).ready(function () {
    /*ANIMAÇÃO DO HAMBURGER BUTTON*/
    $('#main-button').on('click', function () {
        $('#main-animated').toggleClass('open');
    })

    $('#categoria-button').on('click', function () {
      $('#categoria-animated').toggleClass('open');
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


    // Adiciona smoth scroll ao navlink dentro do menu
    $(".nav-link").on('click', function(event) {
      // Certifica que this.hash tem valor antes de substituir o comportamento padrão
      if (this.hash !== "") {
        // Previne o comportamento padrão do clique da âncora
        event.preventDefault();

        // Armazena a hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // Usando o metodo animate do jquery para adicionar o smoth scroll
        // O número opcional (800) especifica o número de milissegundos que leva para rolar para a área especificada
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){

          // Adicionar hash (#) ao URL quando terminar de rolar (comportamento de clique padrão)
          window.location.hash = hash;
        });
      } // fim do if
    });

    // FECHA O MENU DE CATEGORIAS AO CLICAR 
    $(".nav-link").on('click', function(){
      $('#menuCategorias').toggleClass('show');
      $('#categoria-animated').toggleClass('open');
    })

}); 
