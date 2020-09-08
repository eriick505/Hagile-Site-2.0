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
                        <li><a href="<?php echo get_site_url(); ?>/#home">Home</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/#solucoes">Soluções</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/#estrategia">Estratégias</a></li>
                        <li><a href="portfolios">Portfólio</a></li>
                        <li><a href="clientes">Clientes</a></li>
                        <li><a href="blog">Blog</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/#contato">Contato</a></li>
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

    <a class="wa" href="https://api.whatsapp.com/send?phone=5581988141162&amp;text=Olá,%20estou%20entrando%20em%20contato%20através%20do%20site,%20você%20poderia%20ajudar?" target="_blank" title="botão do whatsapp">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/ico-whatsapp.png" alt="Botão do WhatsApp">
    </a>

    <!-- ADD FOOTER WORDPRESS -->
    <?php wp_footer(); ?>
    
    <!-- MASK -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

    <!-- MODAL FORM -->
    <?php get_template_part('components/modal-form'); ?>

  </body>
</html>