
    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-4 text-center mb-5 mb-lg-0">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/logo-white.png" alt="logo da hagile versão empilhada" class="img-fluid">

                    <ul class="footer__mediaList">
                        <li>
                            <a class="icon-footer" href="https://www.facebook.com/HagileAgenciaDigital" target="_blank" aria-label="facebook da hagile" rel="noopener"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a class="icon-footer" href="https://www.instagram.com/hagiledigital/" target="_blank" aria-label="instagram da hagile" rel="noopener"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a class="icon-footer" href="https://br.linkedin.com/company/hagile-ag-ncia-digital" target="_blank" aria-label="linkedIn da hagile" rel="noopener"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-12 text-lg-left text-center mb-5 mb-lg-0">
                    <ul class="footer__siteMap pl-0">
                        <li><a href="home#home">Home</a></li>
                        <li><a href="home#solucoes">Soluções</a></li>
                        <li><a href="home#estrategia">Estratégias</a></li>
                        <li><a href="home#portfolio">Portfólio</a></li>
                        <li><a href="home#clientes">Clientes</a></li>
                        <li><a href="blog">Blog</a></li>
                        <li><a href="home#contato">Contato</a></li>
                    </ul>
                </div>

                <div class="col-lg-6 text-lg-left text-center">
                    <address class="footer__address">
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i> Empresarial Wecon IV - Salas 704 a 706, Rua José Aderval Chaves, Nº 78 - Boa Viagem, Recife - PE, CEP: 51.111-030</li>
                            <li><i class="fas fa-phone"></i> (81) 3326-4042 | (81) 3034-4042 | (81) 98814-1162</li>
                            <li><i class="far fa-envelope"></i> contato@hagile.com.br</li>
                        </ul>
                    </address>
                </div>
            </div>
        </div>
    </footer>

    <div class="nos py-3 text-center">
        <span>Desenvolvido por nós <i class="fas fa-heart text-danger"></i></span>                                   
    </div>

    <!-- ADD FOOTER WORDPRESS -->
    <?php wp_footer(); ?>

    <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
    <script>
      $(function(){
        $('.testimonial__list').slick({
            infinite: true,
            slidesToShow: 1,
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
                  }
                },
                {
                  breakpoint: 600,
                  settings: {
                      centerMode: false,
                  }
                },
                {
                  breakpoint: 460,
                  settings: {
                    centerMode: false,
                  }
                }
            ]
        });

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
    </script>
    
  </body>
</html>