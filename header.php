<!doctype html>
<html  <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta <?php bloginfo('charset'); ?>>
    <meta name="author" content="E.S Design">
    <meta name="description" content="Somos a Hagile Agência digital, especialista em Criação de Sites, Portais, Lojas Virtuais,  Gerenciamento de redes sociais, Marketing Digital e SEO em Recife."/>
    <meta name="title" content="Criação de Sites em Recife | Hagile Agência Digital" />
    <meta name="keywords" content="criação de sites recife, criação de sites em recife, desenvolvimento de sites, desenvolvimento de sites em recife, social media recife, sites recife, sites em recife, criação de site, sites recife, criar loja virtual, criação de website, criar websites, website recife, desenvolvimento de website recife, e-commerce recife, ecommerce recife, criar ecommerce recife, criar e-commerce recife, criação de e-commerce recife, criação de e-commerce em recife, quero criar site em recife" />
    <meta name="reply-to" content="http://www.hagile.com.br">
    <meta name="copyright" content="http://www.hagile.com.br" />
    <meta name="author" content="Hagile | Agência Digital"/>
    <meta name="creator" content="Hagile | Agência Digital"/>
    <meta name="creator.adress" content="atendimento@hagile.com.br" />
    <meta name="resource-type" content="document" />  
    <meta name="robots" content="index, follow" />
    <meta name="rating" content="General" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta property="og:locale" content="pt_BR">
    <meta property="og:image" content="http://www.hagile.com.br/cover.png">
    <meta property="og:type" content="website">    
    <meta property="og:url" content="http://www.hagile.com.br">
    <meta property="og:title" content="Desenvolvimentos de sites, conteúdo digital, social media, otimização de site SEO | +55 81 3034.4042">
    <meta property="og:site_name" content="Hagile Agência Digital">
    <meta property="og:description" content="Somos a Hagile Agência digital, especialista em Criação de Sites, Portais, Lojas Virtuais,  Gerenciamento de redes sociais, Marketing Digital e SEO em Recife.">
    <meta property="og:image" content="img/hagile.jpg">

    <!-- FAV ICONS -->
    <link rel="canonical" href="http://www.hagile.com.br/" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_url'); ?>/assets/img/favicon/manifest.json">
    <link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/assets/img/favicon/favicon-32x32.png" color="#007ef4">
    <meta name="msapplication-TileColor" content="#007ef4">
    <meta name="theme-color" content="#007ef4">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/img/favicon/favicon-32x32.png" type="image/x-icon">
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/img/favicon/favicon.ico" type="image/x-icon">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-32688820-1"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1000905822"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-32688820-1');
    gtag('config'. 'AW-1000905822');
    </script>

    <!-- Event snippet for [Lead] Cadastro Hagile conversion page
    In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
        function gtag_report_conversion(url) {
            var callback = function () {
                if (typeof(url) != 'undefined') {
                window.location = url;
                }
            };
            gtag('event', 'conversion', {
                'send_to': 'AW-1000905822/vdodCK6QobQBEN64ot0D',
                'event_callback': callback
            });
            return false;
        }
    </script>

    <!-- COMMENTS FACEBOOK -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v8.0&appId=269793114422068&autoLogAppEvents=1" nonce="mTFx7NDw"></script>
    
    <!-- RECAPTCHA -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

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
                } elseif (is_home()) {
                    echo '<header class="header" id="home">';
                } else {
                    echo '<header class="header--single" id="home">';
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
                            <div class="icons-left">
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

                            <div class="icons-right">
                                <!-- iGile -->
                                <a href="#">
                                    <div class="box">
                                    </div>
                                </a>

                                <div class="man">
                                </div>
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
  

 
