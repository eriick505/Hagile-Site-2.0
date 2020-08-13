<!doctype html>
<html  <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta <?php bloginfo('charset'); ?>>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- ADD HEAD WORDPRESS -->
    <?php wp_head(); ?>
  </head>
  <body>

    <!-- HEADER -->
    <header class="header" id="home">
        <div class="expand-container">
            
            <?php get_template_part('partials/navbar'); ?>

            <?php if(is_home()) { ?>
            
                <!-- HERO MAIN -->
                <div class="row hero">
                    <div class="col-lg-5 col-md-12 text-lg-left text-md-center order-1 order-lg-0">
                            
                        <div class="hero__text">
                            <header>
                                <div class="bg-title">
                                    <h2><span>Criatividade</span> e <span>Precisão</span></h2>    
                                </div>
                                <h3>Para maiores resultados!</h3>
                                <p>Sua empresa com maior alcance nas redes sociais e sites com as tecnologias mais recentes do mercado.</p>
                            </header>

                            <div class="patternForm">
                                <form class="form" action="enviaContatoCaptcha.php" id="contact-form" method="post">
                                    <div class="form-group">
                                        <input type="text" name="nome" class="form-control rounded-pill" aria-label="nome" placeholder="Nome ou Empresa">
                                    </div>

                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control rounded-pill" aria-label="e-mail" placeholder="E-mail">
                                    </div>

                                    <div class="form-group">
                                        <input type="tel" name="telefone" class="form-control rounded-pill" aria-label="telefone" placeholder="Telefone">
                                    </div>

                                    <div class="form-group">
                                        <textarea class="form-control" name="recebemsg" placeholder="Mensagem..." id="mensagem" rows="3"></textarea>
                                    </div>

                                    <div class="g-recaptcha mb-2" data-sitekey="6LcYje4UAAAAAFINgIkW70onFmHmwl6uLju7qDxY"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcYje4UAAAAAFINgIkW70onFmHmwl6uLju7qDxY&amp;co=aHR0cHM6Ly93d3cuaGFnaWxlLmNvbS5icjo0NDM.&amp;hl=pt-BR&amp;v=IU7gZ7o6RDdDE6U4Y1YJJWnN&amp;size=normal&amp;cb=9gla7z1ickoi" width="304" height="78" role="presentation" name="a-3qlxs6tx5dbc" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div>

                                    <button type="submit" class="btn btn-primary w-100 rounded-pill mt-3" aria-label="comece agora"><b>Fale Conosco!</b></button>
                                </form>

                                <div class="another-option">
                                    <span>Ou se preferir... <br> Fale Conosco via <a href="https://api.whatsapp.com/send?phone=5581988141162&text=Ol%C3%A1,%20estou%20entrando%20em%20contato%20atrav%C3%A9s%20do%20site,%20voc%C3%AA%20poderia%20ajudar?" target="_blank" rel="noopener noreferrer"><b>WhatsApp <i class="fab fa-whatsapp"></i></b></a></span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-7 text-center order-0 order-lg-1 mb-5 mb-lg-0">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/hero-image/teste2.png" alt="ola" class="img-fluid w-75">
                    </div>
                </div>

            <?php } else { ?>

                <div class="row">
                    <div class="col-12">

                        <h2><?php the_title(); ?></h2>

                    </div>
                </div>

            <?php } ?>

        </div>
    </header>
  

 
