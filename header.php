<!doctype html>
<html  <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta <?php bloginfo('charset'); ?>>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v8.0&appId=269793114422068&autoLogAppEvents=1" nonce="mTFx7NDw"></script>

    <!-- ADD HEAD WORDPRESS -->
    <?php wp_head(); ?>
  </head>
  <body>

    <!-- HEADER -->
    <?php 
        global $post;
        $post_slug = $post->post_name;

        $title = "";
        $subtitle = "";

        switch($post_slug) {
            case 'clientes': 
                echo '<header class="header--intern" id="home">';
                $title = "Nossos clientes";
                $subtitle = "Há décadas inovando os projetos digitais para as diversas áreas de negócios.";
            break;

            case 'portfolios':
                echo '<header class="header--intern" id="home">';
                $title = "Confira nosso Portfólio";
                $subtitle = "Há mais de 10 anos fazendo o seu projeto sair do papel!";
            break;

            case 'blog':
                echo '<header class="header--intern" id="home">';
                $title = "Blog";
                $subtitle = "Confira todas as notícias da Hagile no meio digital";
            break;

            default: 
                if(is_singular('post')) {
                    echo '<header class="header--single" id="home">';
                } elseif (is_singular('servico')) {
                    echo '<header class="header--servico" id="home">';
                } else {
                    echo '<header class="header" id="home">';
                }
            break;
        }
    ?>

        <div class="expand-container">
            
            <?php get_template_part('components/navbar'); ?>

            <?php if(is_home()) { ?>
            
                <!-- HERO MAIN -->
                <div class="row hero">
                    <div class="col-lg-5 text-lg-left text-md-center order-1 order-lg-0">
                            
                        <div class="hero__text">
                            <header>
                                <div class="bg-title">
                                    <h2><span>Criatividade</span> e <span>Precisão</span></h2>    
                                </div>
                                <h3>Para maiores resultados!</h3>
                                <p>Sua empresa com maior alcance nas redes sociais e sites com as tecnologias mais recentes do mercado.</p>
                            </header>

                            <?php get_template_part('components/form'); ?>
                        </div>

                    </div>

                    <div class="col-lg-7 text-center order-0 order-lg-1 mb-5 mb-lg-0">
                        <div class="hero__img">
                            <div class="icon-right">
                                <!-- man above video -->
                                <div class="box">
                                </div>

                                <!-- woman bellow video -->
                                <div class="box">
                                </div>
                            </div>
                            
                            <a href="https://www.youtube.com/watch?v=JH3VPrtvS00" data-lity>
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/hero-image/video-hero-img.png" alt="ola" class="img-fluid w-75">
                            </a>

                            <div class="icons-left">
                            </div>
                        </div>
                    </div>
                </div>

            <?php } else { ?>

                <div class="row hero--intern cursiveTxt">
                    
                    <?php
                        if (is_singular('servico')) {
                    ?> 
                    
                        <div class="col-lg-8">
                            <header>
                                <span>Solução rápida para você</span>
                                <h2><?php the_field('titulo'); ?></h2>
                                <p><?php the_field('subtitulo'); ?></p>
                            </header>
                        </div>

                    <?php } else { ?>

                        <div class="col-12">
                            <header>
                                <h2><?php echo $title; ?></h2>
                                <p><?php echo $subtitle; ?></p>
                            </header>
                        </div>

                    <?php } ?>
                        
                </div>

            <?php } ?>

        </div>
    </header>
  

 
