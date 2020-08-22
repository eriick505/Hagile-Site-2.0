<?php
    // Template name: testes
?>
<?php get_header(); ?>

<main class="internPage cursiveTxt portfolio">

    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand ">
            <span class="d-block d-lg-none">Acessar Categorias</span>
        </a>

        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#menuCategorias" aria-controls="menuCategorias" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="menuCategorias" style="">
            <ul class="navbar-nav flex-md-column">
                <li class="nav-item d-lg-block d-none">
                    <h3><i class="fas fa-sort"></i> Filtre por categoria:</h3>

                    <div class="search mt-3">
                        <?php get_search_form(); ?>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#alimentacao">Alimentação</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#associacao">Associações</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#comercio">Comércio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#concessionarias">Concessionárias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#construtoras">Construtoras</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#consultorias">Consultorias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#educacao">Educação</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#entretenimento">Entretenimento</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#industria">Indústria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#juridico">Jurídico</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#saude">Saúde</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#servicos">Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#telecom">Telecom</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#transportadora">Transportadora</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#turismo">Turismo</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- CONTENT START -->
    <div class="container">
        <div class="row">
            <div class="col-12">

                <!-- ALIMENTAÇÃO -->
                <section class="row" id="alimentacao">
                        
                    <div class="col-12 mb-4 text-center text-md-left">
                        <header>
                            <h2>Alimentação</h2>
                        </header>
                    </div>

                    <!-- TURN ON -->
                    <div class="col-12 my-4">
                        <span class="turn-on">
                            <i class="fas fa-toggle-off"></i> <b>Online</b>
                        </span>
                        <hr>
                    </div>

                    <!-- LOOP DO PORTFOLIO ONLINE -->
                    <?php 
                        $my_args_depo = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'category_name' => 'alimentacao+online',
                            'order' => 'asc',
                            'orderby' => 'name'
                        );

                        $my_query_depo = new WP_Query($my_args_depo);
                        
                        if($my_query_depo->have_posts()) : 
                        while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                    ?>

                            <div class="col-lg-3 col-md-4 col-12 mb-4 text-center">
                                <article class="portfolio__box">
                                    <a href="<?php the_field('link_externo_para_projeto'); ?>" target="_blank" rel="noopener">
                                        <header>
                                            <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                                            <div class="box-overlay">
                                                <span><?php the_field('nome_da_categoria_do_portfolio'); ?></span>
                                            </div>
                                        </header>

                                        <footer>
                                            <h4><?php the_title(); ?></h4>
                                        </footer>
                                    </a>
                                </article>
                            </div>

                    <?php endwhile; ?>

                    <?php else : get_404_template(); endif; ?>
                    <?php wp_reset_query(); ?>
                    

                    <!-- TURN OFF -->
                    <div class="col-12 my-4">
                        <span class="turn-off">
                            <i class="fas fa-toggle-off"></i> <b>Offline</b>
                        </span>
                        <hr>
                    </div>

                    <!-- LOOP DO PORTFOLIO OFFLINE -->
                    <?php 
                        $my_args_depo = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'category_name' => 'alimentacao+offline',
                            'order' => 'asc',
                            'orderby' => 'name'
                        );

                        $my_query_depo = new WP_Query($my_args_depo);
                        
                        if($my_query_depo->have_posts()) : 
                        while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                    ?>

                            <div class="col-lg-3 col-md-4 col-12 mb-4 text-center">
                                <article class="portfolio__box">
                                    <header>
                                        <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                                        <div class="box-overlay">
                                            <span><?php the_field('nome_da_categoria_do_portfolio'); ?></span>
                                        </div>
                                    </header>

                                    <footer>
                                        <h4><?php the_title(); ?></h4>
                                    </footer>
                                </article>
                            </div>

                    <?php endwhile; ?>

                    <?php else : get_404_template(); endif; ?>
                    <?php wp_reset_query(); ?>


                </section>

                <!-- ASSOCIAÇÕES -->
                <section class="row" id="associacao">
                    
                    <div class="col-12 mb-4 text-center text-md-left">
                        <header>
                            <h2>Assoaciações</h2>
                        </header>
                    </div>

                    <div class="col-12 my-4">
                        <span class="turn-on">
                            <i class="fas fa-toggle-off"></i> <b>Online</b>
                        </span>
                        <hr>
                    </div>

                    <!-- LOOP DO PORTFOLIO ONLINE -->
                    <?php 
                        $my_args_depo = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'category_name' => 'associacoes+online',
                            'order' => 'asc',
                            'orderby' => 'name'
                        );

                        $my_query_depo = new WP_Query($my_args_depo);
                        
                        if($my_query_depo->have_posts()) : 
                        while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                    ?>

                            <div class="col-lg-3 col-md-4 col-12 mb-4 text-center">
                                <article class="portfolio__box">
                                    <a href="<?php the_field('link_externo_para_projeto'); ?>" target="_blank" rel="noopener">
                                        <header>
                                            <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                                            <div class="box-overlay">
                                                <span><?php the_field('nome_da_categoria_do_portfolio'); ?></span>
                                            </div>
                                        </header>

                                        <footer>
                                            <h4><?php the_title(); ?></h4>
                                        </footer>
                                    </a>
                                </article>
                            </div>

                    <?php endwhile; ?>

                    <?php else : get_404_template(); endif; ?>
                    <?php wp_reset_query(); ?>
                    

                    <div class="col-12 my-4">
                        <span class="turn-off">
                            <i class="fas fa-toggle-off"></i> <b>Offline</b>
                        </span>
                        <hr>
                    </div>

                    <!-- LOOP DO PORTFOLIO OFFLINE -->
                    <?php 
                        $my_args_depo = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'category_name' => 'associacoes+offline',
                            'order' => 'asc',
                            'orderby' => 'name'
                        );

                        $my_query_depo = new WP_Query($my_args_depo);
                        
                        if($my_query_depo->have_posts()) : 
                        while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                    ?>

                            <div class="col-lg-3 col-md-4 col-12 my-4 text-center">
                                <article class="portfolio__box">
                                    <header>
                                        <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                                        <div class="box-overlay">
                                            <span><?php the_field('nome_da_categoria_do_portfolio'); ?></span>
                                        </div>
                                    </header>

                                    <footer>
                                        <h4><?php the_title(); ?></h4>
                                    </footer>
                                </article>
                            </div>

                    <?php endwhile; ?>

                    <?php else : get_404_template(); endif; ?>
                    <?php wp_reset_query(); ?>

                </section>

                <!-- COMERCIO -->
                <section class="row" id="comercio">
                    
                    <div class="col-12 mb-4 text-center text-md-left">
                        <header>
                            <h2>Comércio</h2>
                        </header>
                    </div>

                    <div class="col-12 my-4">
                        <span class="turn-on">
                            <i class="fas fa-toggle-off"></i> <b>Online</b>
                        </span>
                        <hr>
                    </div>

                    <!-- LOOP DO PORTFOLIO ONLINE -->
                    <?php 
                        $my_args_depo = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'category_name' => 'comercio+online',
                            'order' => 'asc',
                            'orderby' => 'name'
                        );

                        $my_query_depo = new WP_Query($my_args_depo);
                        
                        if($my_query_depo->have_posts()) : 
                        while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                    ?>

                            <div class="col-lg-3 col-md-4 col-12 mb-4 text-center">
                                <article class="portfolio__box">
                                    <a href="<?php the_field('link_externo_para_projeto'); ?>" target="_blank" rel="noopener">
                                        <header>
                                            <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                                            <div class="box-overlay">
                                                <span><?php the_field('nome_da_categoria_do_portfolio'); ?></span>
                                            </div>
                                        </header>

                                        <footer>
                                            <h4><?php the_title(); ?></h4>
                                        </footer>
                                    </a>
                                </article>
                            </div>

                    <?php endwhile; ?>

                    <?php else : get_404_template(); endif; ?>
                    <?php wp_reset_query(); ?>
                    

                    <div class="col-12 my-4">
                        <span class="turn-off">
                            <i class="fas fa-toggle-off"></i> <b>Offline</b>
                        </span>
                        <hr>
                    </div>

                    <!-- LOOP DO PORTFOLIO OFFLINE -->
                    <?php 
                        $my_args_depo = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'category_name' => 'comercio+offline',
                            'order' => 'asc',
                            'orderby' => 'name'
                        );

                        $my_query_depo = new WP_Query($my_args_depo);
                        
                        if($my_query_depo->have_posts()) : 
                        while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                    ?>

                            <div class="col-lg-3 col-md-4 col-12 my-4 text-center">
                                <article class="portfolio__box">
                                    <header>
                                        <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                                        <div class="box-overlay">
                                            <span><?php the_field('nome_da_categoria_do_portfolio'); ?></span>
                                        </div>
                                    </header>

                                    <footer>
                                        <h4><?php the_title(); ?></h4>
                                    </footer>
                                </article>
                            </div>

                    <?php endwhile; ?>

                    <?php else : get_404_template(); endif; ?>
                    <?php wp_reset_query(); ?>

                </section>

                <!-- CONCESSIONÁRIAS -->
                <section class="row" id="concessionarias">
                    
                    <div class="col-12 mb-4 text-center text-md-left">
                        <header>
                            <h2>Concessionárias</h2>
                        </header>
                    </div>

                    <div class="col-12 my-4">
                        <span class="turn-on">
                            <i class="fas fa-toggle-off"></i> <b>Online</b>
                        </span>
                        <hr>
                    </div>

                    <!-- LOOP DO PORTFOLIO ONLINE -->
                    <?php 
                        $my_args_depo = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'category_name' => 'concessionarias+online',
                            'order' => 'asc',
                            'orderby' => 'name'
                        );

                        $my_query_depo = new WP_Query($my_args_depo);
                        
                        if($my_query_depo->have_posts()) : 
                        while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                    ?>

                            <div class="col-lg-3 col-md-4 col-12 mb-4 text-center">
                                <article class="portfolio__box">
                                    <a href="<?php the_field('link_externo_para_projeto'); ?>" target="_blank" rel="noopener">
                                        <header>
                                            <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                                            <div class="box-overlay">
                                                <span><?php the_field('nome_da_categoria_do_portfolio'); ?></span>
                                            </div>
                                        </header>

                                        <footer>
                                            <h4><?php the_title(); ?></h4>
                                        </footer>
                                    </a>
                                </article>
                            </div>

                    <?php endwhile; ?>

                    <?php else : get_404_template(); endif; ?>
                    <?php wp_reset_query(); ?>
                    

                    <div class="col-12 my-4">
                        <span class="turn-off">
                            <i class="fas fa-toggle-off"></i> <b>Offline</b>
                        </span>
                        <hr>
                    </div>

                    <!-- LOOP DO PORTFOLIO OFFLINE -->
                    <?php 
                        $my_args_depo = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'category_name' => 'concessionarias+offline',
                            'order' => 'asc',
                            'orderby' => 'name'
                        );

                        $my_query_depo = new WP_Query($my_args_depo);
                        
                        if($my_query_depo->have_posts()) : 
                        while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                    ?>

                            <div class="col-lg-3 col-md-4 col-12 my-4 text-center">
                                <article class="portfolio__box">
                                    <header>
                                        <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                                        <div class="box-overlay">
                                            <span><?php the_field('nome_da_categoria_do_portfolio'); ?></span>
                                        </div>
                                    </header>

                                    <footer>
                                        <h4><?php the_title(); ?></h4>
                                    </footer>
                                </article>
                            </div>

                    <?php endwhile; ?>

                    <?php else : get_404_template(); endif; ?>
                    <?php wp_reset_query(); ?>

                </section>

                <!-- CONSTRUTORAS -->
                <section class="row" id="construtoras">
                    
                    <div class="col-12 mb-4 text-center text-md-left">
                        <header>
                            <h2>Construtoras</h2>
                        </header>
                    </div>

                    <div class="col-12 my-4">
                        <span class="turn-on">
                            <i class="fas fa-toggle-off"></i> <b>Online</b>
                        </span>
                        <hr>
                    </div>

                    <!-- LOOP DO PORTFOLIO ONLINE -->
                    <?php 
                        $my_args_depo = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'category_name' => 'construtoras+online',
                            'order' => 'asc',
                            'orderby' => 'name'
                        );

                        $my_query_depo = new WP_Query($my_args_depo);
                        
                        if($my_query_depo->have_posts()) : 
                        while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                    ?>

                            <div class="col-lg-3 col-md-4 col-12 mb-4 text-center">
                                <article class="portfolio__box">
                                    <a href="<?php the_field('link_externo_para_projeto'); ?>" target="_blank" rel="noopener">
                                        <header>
                                            <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                                            <div class="box-overlay">
                                                <span><?php the_field('nome_da_categoria_do_portfolio'); ?></span>
                                            </div>
                                        </header>

                                        <footer>
                                            <h4><?php the_title(); ?></h4>
                                        </footer>
                                    </a>
                                </article>
                            </div>

                    <?php endwhile; ?>

                    <?php else : get_404_template(); endif; ?>
                    <?php wp_reset_query(); ?>
                    

                    <div class="col-12 my-4">
                        <span class="turn-off">
                            <i class="fas fa-toggle-off"></i> <b>Offline</b>
                        </span>
                        <hr>
                    </div>

                    <!-- LOOP DO PORTFOLIO OFFLINE -->
                    <?php 
                        $my_args_depo = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'category_name' => 'construtoras+offline',
                            'order' => 'asc',
                            'orderby' => 'name'
                        );

                        $my_query_depo = new WP_Query($my_args_depo);
                        
                        if($my_query_depo->have_posts()) : 
                        while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                    ?>

                            <div class="col-lg-3 col-md-4 col-12 my-4 text-center">
                                <article class="portfolio__box">
                                    <header>
                                        <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                                        <div class="box-overlay">
                                            <span><?php the_field('nome_da_categoria_do_portfolio'); ?></span>
                                        </div>
                                    </header>

                                    <footer>
                                        <h4><?php the_title(); ?></h4>
                                    </footer>
                                </article>
                            </div>

                    <?php endwhile; ?>

                    <?php else : get_404_template(); endif; ?>
                    <?php wp_reset_query(); ?>

                </section>

                <!-- CONSULTORIA -->
                <section class="row" id="consultorias">
                    
                    <div class="col-12 mb-4 text-center text-md-left">
                        <header>
                            <h2>Consultoria</h2>
                        </header>
                    </div>

                    <div class="col-12 my-4">
                        <span class="turn-on">
                            <i class="fas fa-toggle-off"></i> <b>Online</b>
                        </span>
                        <hr>
                    </div>

                    <!-- LOOP DO PORTFOLIO ONLINE -->
                    <?php 
                        $my_args_depo = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'category_name' => 'consultorias+online',
                            'order' => 'asc',
                            'orderby' => 'name'
                        );

                        $my_query_depo = new WP_Query($my_args_depo);
                        
                        if($my_query_depo->have_posts()) : 
                        while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                    ?>

                            <div class="col-lg-3 col-md-4 col-12 mb-4 text-center">
                                <article class="portfolio__box">
                                    <a href="<?php the_field('link_externo_para_projeto'); ?>" target="_blank" rel="noopener">
                                        <header>
                                            <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                                            <div class="box-overlay">
                                                <span><?php the_field('nome_da_categoria_do_portfolio'); ?></span>
                                            </div>
                                        </header>

                                        <footer>
                                            <h4><?php the_title(); ?></h4>
                                        </footer>
                                    </a>
                                </article>
                            </div>

                    <?php endwhile; ?>

                    <?php else : get_404_template(); endif; ?>
                    <?php wp_reset_query(); ?>
                    

                    <div class="col-12 my-4">
                        <span class="turn-off">
                            <i class="fas fa-toggle-off"></i> <b>Offline</b>
                        </span>
                        <hr>
                    </div>

                    <!-- LOOP DO PORTFOLIO OFFLINE -->
                    <?php 
                        $my_args_depo = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'category_name' => 'consultorias+offline',
                            'order' => 'asc',
                            'orderby' => 'name'
                        );

                        $my_query_depo = new WP_Query($my_args_depo);
                        
                        if($my_query_depo->have_posts()) : 
                        while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                    ?>

                            <div class="col-lg-3 col-md-4 col-12 my-4 text-center">
                                <article class="portfolio__box">
                                    <header>
                                        <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                                        <div class="box-overlay">
                                            <span><?php the_field('nome_da_categoria_do_portfolio'); ?></span>
                                        </div>
                                    </header>

                                    <footer>
                                        <h4><?php the_title(); ?></h4>
                                    </footer>
                                </article>
                            </div>

                    <?php endwhile; ?>

                    <?php else : get_404_template(); endif; ?>
                    <?php wp_reset_query(); ?>

                </section>

                <!-- EDUCAÇÃO -->
                <section class="row" id="educacao">
                    
                    <div class="col-12 mb-4 text-center text-md-left">
                        <header>
                            <h2>Educação</h2>
                        </header>
                    </div>

                    <div class="col-12 my-4">
                        <span class="turn-on">
                            <i class="fas fa-toggle-off"></i> <b>Online</b>
                        </span>
                        <hr>
                    </div>

                    <!-- LOOP DO PORTFOLIO ONLINE -->
                    <?php 
                        $my_args_depo = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'category_name' => 'educacao+online',
                            'order' => 'asc',
                            'orderby' => 'name'
                        );

                        $my_query_depo = new WP_Query($my_args_depo);
                        
                        if($my_query_depo->have_posts()) : 
                        while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                    ?>

                            <div class="col-lg-3 col-md-4 col-12 mb-4 text-center">
                                <article class="portfolio__box">
                                    <a href="<?php the_field('link_externo_para_projeto'); ?>" target="_blank" rel="noopener">
                                        <header>
                                            <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                                            <div class="box-overlay">
                                                <span><?php the_field('nome_da_categoria_do_portfolio'); ?></span>
                                            </div>
                                        </header>

                                        <footer>
                                            <h4><?php the_title(); ?></h4>
                                        </footer>
                                    </a>
                                </article>
                            </div>

                    <?php endwhile; ?>

                    <?php else : get_404_template(); endif; ?>
                    <?php wp_reset_query(); ?>
                    

                    <div class="col-12 my-4">
                        <span class="turn-off">
                            <i class="fas fa-toggle-off"></i> <b>Offline</b>
                        </span>
                        <hr>
                    </div>

                    <!-- LOOP DO PORTFOLIO OFFLINE -->
                    <?php 
                        $my_args_depo = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'category_name' => 'educacao+offline',
                            'order' => 'asc',
                            'orderby' => 'name'
                        );

                        $my_query_depo = new WP_Query($my_args_depo);
                        
                        if($my_query_depo->have_posts()) : 
                        while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                    ?>

                            <div class="col-lg-3 col-md-4 col-12 my-4 text-center">
                                <article class="portfolio__box">
                                    <header>
                                        <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                                        <div class="box-overlay">
                                            <span><?php the_field('nome_da_categoria_do_portfolio'); ?></span>
                                        </div>
                                    </header>

                                    <footer>
                                        <h4><?php the_title(); ?></h4>
                                    </footer>
                                </article>
                            </div>

                    <?php endwhile; ?>

                    <?php else : get_404_template(); endif; ?>
                    <?php wp_reset_query(); ?>

                </section>

                <!-- ENTRETENIMENTO -->
                <section class="row" id="entretenimento">
                    
                    <div class="col-12 mb-4 text-center text-md-left">
                        <header>
                            <h2>Entretenimento</h2>
                        </header>
                    </div>

                    <div class="col-12 my-4">
                        <span class="turn-on">
                            <i class="fas fa-toggle-off"></i> <b>Online</b>
                        </span>
                        <hr>
                    </div>

                    <!-- LOOP DO PORTFOLIO ONLINE -->
                    <?php 
                        $my_args_depo = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'category_name' => 'entretenimento+online',
                            'order' => 'asc',
                            'orderby' => 'name'
                        );

                        $my_query_depo = new WP_Query($my_args_depo);
                        
                        if($my_query_depo->have_posts()) : 
                        while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                    ?>

                            <div class="col-lg-3 col-md-4 col-12 mb-4 text-center">
                                <article class="portfolio__box">
                                    <a href="<?php the_field('link_externo_para_projeto'); ?>" target="_blank" rel="noopener">
                                        <header>
                                            <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                                            <div class="box-overlay">
                                                <span><?php the_field('nome_da_categoria_do_portfolio'); ?></span>
                                            </div>
                                        </header>

                                        <footer>
                                            <h4><?php the_title(); ?></h4>
                                        </footer>
                                    </a>
                                </article>
                            </div>

                    <?php endwhile; ?>

                    <?php else : get_404_template(); endif; ?>
                    <?php wp_reset_query(); ?>
                    

                    <div class="col-12 my-4">
                        <span class="turn-off">
                            <i class="fas fa-toggle-off"></i> <b>Offline</b>
                        </span>
                        <hr>
                    </div>

                    <!-- LOOP DO PORTFOLIO OFFLINE -->
                    <?php 
                        $my_args_depo = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'category_name' => 'entretenimento+offline',
                            'order' => 'asc',
                            'orderby' => 'name'
                        );

                        $my_query_depo = new WP_Query($my_args_depo);
                        
                        if($my_query_depo->have_posts()) : 
                        while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                    ?>

                            <div class="col-lg-3 col-md-4 col-12 my-4 text-center">
                                <article class="portfolio__box">
                                    <header>
                                        <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                                        <div class="box-overlay">
                                            <span><?php the_field('nome_da_categoria_do_portfolio'); ?></span>
                                        </div>
                                    </header>

                                    <footer>
                                        <h4><?php the_title(); ?></h4>
                                    </footer>
                                </article>
                            </div>

                    <?php endwhile; ?>

                    <?php else : get_404_template(); endif; ?>
                    <?php wp_reset_query(); ?>

                </section>

                <!-- INDÚSTRIA -->
                <section class="row" id="industria">
                    
                    <div class="col-12 mb-4 text-center text-md-left">
                        <header>
                            <h2>Indústria</h2>
                        </header>
                    </div>

                    <div class="col-12 my-4">
                        <span class="turn-on">
                            <i class="fas fa-toggle-off"></i> <b>Online</b>
                        </span>
                        <hr>
                    </div>

                    <!-- LOOP DO PORTFOLIO ONLINE -->
                    <?php 
                        $my_args_depo = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'category_name' => 'industria+online',
                            'order' => 'asc',
                            'orderby' => 'name'
                        );

                        $my_query_depo = new WP_Query($my_args_depo);
                        
                        if($my_query_depo->have_posts()) : 
                        while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                    ?>

                            <div class="col-lg-3 col-md-4 col-12 mb-4 text-center">
                                <article class="portfolio__box">
                                    <a href="<?php the_field('link_externo_para_projeto'); ?>" target="_blank" rel="noopener">
                                        <header>
                                            <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                                            <div class="box-overlay">
                                                <span><?php the_field('nome_da_categoria_do_portfolio'); ?></span>
                                            </div>
                                        </header>

                                        <footer>
                                            <h4><?php the_title(); ?></h4>
                                        </footer>
                                    </a>
                                </article>
                            </div>

                    <?php endwhile; ?>

                    <?php else : get_404_template(); endif; ?>
                    <?php wp_reset_query(); ?>
                    

                    <div class="col-12 my-4">
                        <span class="turn-off">
                            <i class="fas fa-toggle-off"></i> <b>Offline</b>
                        </span>
                        <hr>
                    </div>

                    <!-- LOOP DO PORTFOLIO OFFLINE -->
                    <?php 
                        $my_args_depo = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'category_name' => 'industria+offline',
                            'order' => 'asc',
                            'orderby' => 'name'
                        );

                        $my_query_depo = new WP_Query($my_args_depo);
                        
                        if($my_query_depo->have_posts()) : 
                        while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                    ?>

                            <div class="col-lg-3 col-md-4 col-12 my-4 text-center">
                                <article class="portfolio__box">
                                    <header>
                                        <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                                        <div class="box-overlay">
                                            <span><?php the_field('nome_da_categoria_do_portfolio'); ?></span>
                                        </div>
                                    </header>

                                    <footer>
                                        <h4><?php the_title(); ?></h4>
                                    </footer>
                                </article>
                            </div>

                    <?php endwhile; ?>

                    <?php else : get_404_template(); endif; ?>
                    <?php wp_reset_query(); ?>

                </section>

                <!-- JURIDICO -->
                <section class="row" id="juridico">
                    
                    <div class="col-12 mb-4 text-center text-md-left">
                        <header>
                            <h2>Jurídico</h2>
                        </header>
                    </div>

                    <div class="col-12 my-4">
                        <span class="turn-on">
                            <i class="fas fa-toggle-off"></i> <b>Online</b>
                        </span>
                        <hr>
                    </div>

                    <!-- LOOP DO PORTFOLIO ONLINE -->
                    <?php 
                        $my_args_depo = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'category_name' => 'juridico+online',
                            'order' => 'asc',
                            'orderby' => 'name'
                        );

                        $my_query_depo = new WP_Query($my_args_depo);
                        
                        if($my_query_depo->have_posts()) : 
                        while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                    ?>

                            <div class="col-lg-3 col-md-4 col-12 mb-4 text-center">
                                <article class="portfolio__box">
                                    <a href="<?php the_field('link_externo_para_projeto'); ?>" target="_blank" rel="noopener">
                                        <header>
                                            <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                                            <div class="box-overlay">
                                                <span><?php the_field('nome_da_categoria_do_portfolio'); ?></span>
                                            </div>
                                        </header>

                                        <footer>
                                            <h4><?php the_title(); ?></h4>
                                        </footer>
                                    </a>
                                </article>
                            </div>

                    <?php endwhile; ?>

                    <?php else : get_404_template(); endif; ?>
                    <?php wp_reset_query(); ?>
                    

                    <div class="col-12 my-4">
                        <span class="turn-off">
                            <i class="fas fa-toggle-off"></i> <b>Offline</b>
                        </span>
                        <hr>
                    </div>

                    <!-- LOOP DO PORTFOLIO OFFLINE -->
                    <?php 
                        $my_args_depo = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'category_name' => 'juridico+offline',
                            'order' => 'asc',
                            'orderby' => 'name'
                        );

                        $my_query_depo = new WP_Query($my_args_depo);
                        
                        if($my_query_depo->have_posts()) : 
                        while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                    ?>

                            <div class="col-lg-3 col-md-4 col-12 my-4 text-center">
                                <article class="portfolio__box">
                                    <header>
                                        <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                                        <div class="box-overlay">
                                            <span><?php the_field('nome_da_categoria_do_portfolio'); ?></span>
                                        </div>
                                    </header>

                                    <footer>
                                        <h4><?php the_title(); ?></h4>
                                    </footer>
                                </article>
                            </div>

                    <?php endwhile; ?>

                    <?php else : get_404_template(); endif; ?>
                    <?php wp_reset_query(); ?>

                </section>

                <!-- SAÚDE -->
                <section class="row" id="saude">
                    
                    <div class="col-12 mb-4 text-center text-md-left">
                        <header>
                            <h2>Saúde</h2>
                        </header>
                    </div>

                    <div class="col-12 my-4">
                        <span class="turn-on">
                            <i class="fas fa-toggle-off"></i> <b>Online</b>
                        </span>
                        <hr>
                    </div>

                    <!-- LOOP DO PORTFOLIO ONLINE -->
                    <?php 
                        $my_args_depo = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'category_name' => 'saude+online',
                            'order' => 'asc',
                            'orderby' => 'name'
                        );

                        $my_query_depo = new WP_Query($my_args_depo);
                        
                        if($my_query_depo->have_posts()) : 
                        while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                    ?>

                            <div class="col-lg-3 col-md-4 col-12 mb-4 text-center">
                                <article class="portfolio__box">
                                    <a href="<?php the_field('link_externo_para_projeto'); ?>" target="_blank" rel="noopener">
                                        <header>
                                            <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                                            <div class="box-overlay">
                                                <span><?php the_field('nome_da_categoria_do_portfolio'); ?></span>
                                            </div>
                                        </header>

                                        <footer>
                                            <h4><?php the_title(); ?></h4>
                                        </footer>
                                    </a>
                                </article>
                            </div>

                    <?php endwhile; ?>

                    <?php else : get_404_template(); endif; ?>
                    <?php wp_reset_query(); ?>
                    

                    <div class="col-12 my-4">
                        <span class="turn-off">
                            <i class="fas fa-toggle-off"></i> <b>Offline</b>
                        </span>
                        <hr>
                    </div>

                    <!-- LOOP DO PORTFOLIO OFFLINE -->
                    <?php 
                        $my_args_depo = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'category_name' => 'saude+offline',
                            'order' => 'asc',
                            'orderby' => 'name'
                        );

                        $my_query_depo = new WP_Query($my_args_depo);
                        
                        if($my_query_depo->have_posts()) : 
                        while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                    ?>

                            <div class="col-lg-3 col-md-4 col-12 my-4 text-center">
                                <article class="portfolio__box">
                                    <header>
                                        <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                                        <div class="box-overlay">
                                            <span><?php the_field('nome_da_categoria_do_portfolio'); ?></span>
                                        </div>
                                    </header>

                                    <footer>
                                        <h4><?php the_title(); ?></h4>
                                    </footer>
                                </article>
                            </div>

                    <?php endwhile; ?>

                    <?php else : get_404_template(); endif; ?>
                    <?php wp_reset_query(); ?>

                </section>

                <!-- SERVIÇOS -->
                <section class="row" id="servicos">
                    
                    <div class="col-12 mb-4 text-center text-md-left">
                        <header>
                            <h2>Serviços</h2>
                        </header>
                    </div>

                    <div class="col-12 my-4">
                        <span class="turn-on">
                            <i class="fas fa-toggle-off"></i> <b>Online</b>
                        </span>
                        <hr>
                    </div>

                    <!-- LOOP DO PORTFOLIO ONLINE -->
                    <?php 
                        $my_args_depo = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'category_name' => 'servicos+online',
                            'order' => 'asc',
                            'orderby' => 'name'
                        );

                        $my_query_depo = new WP_Query($my_args_depo);
                        
                        if($my_query_depo->have_posts()) : 
                        while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                    ?>

                            <div class="col-lg-3 col-md-4 col-12 mb-4 text-center">
                                <article class="portfolio__box">
                                    <a href="<?php the_field('link_externo_para_projeto'); ?>" target="_blank" rel="noopener">
                                        <header>
                                            <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                                            <div class="box-overlay">
                                                <span><?php the_field('nome_da_categoria_do_portfolio'); ?></span>
                                            </div>
                                        </header>

                                        <footer>
                                            <h4><?php the_title(); ?></h4>
                                        </footer>
                                    </a>
                                </article>
                            </div>

                    <?php endwhile; ?>

                    <?php else : get_404_template(); endif; ?>
                    <?php wp_reset_query(); ?>
                    

                    <div class="col-12 my-4">
                        <span class="turn-off">
                            <i class="fas fa-toggle-off"></i> <b>Offline</b>
                        </span>
                        <hr>
                    </div>

                    <!-- LOOP DO PORTFOLIO OFFLINE -->
                    <?php 
                        $my_args_depo = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'category_name' => 'servicos+offline',
                            'order' => 'asc',
                            'orderby' => 'name'
                        );

                        $my_query_depo = new WP_Query($my_args_depo);
                        
                        if($my_query_depo->have_posts()) : 
                        while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                    ?>

                            <div class="col-lg-3 col-md-4 col-12 my-4 text-center">
                                <article class="portfolio__box">
                                    <header>
                                        <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                                        <div class="box-overlay">
                                            <span><?php the_field('nome_da_categoria_do_portfolio'); ?></span>
                                        </div>
                                    </header>

                                    <footer>
                                        <h4><?php the_title(); ?></h4>
                                    </footer>
                                </article>
                            </div>

                    <?php endwhile; ?>

                    <?php else : get_404_template(); endif; ?>
                    <?php wp_reset_query(); ?>

                </section>

                <!-- TELECOM -->
                <section class="row" id="telecom">
                    
                    <div class="col-12 mb-4 text-center text-md-left">
                        <header>
                            <h2>Telecom</h2>
                        </header>
                    </div>

                    <div class="col-12 my-4">
                        <span class="turn-on">
                            <i class="fas fa-toggle-off"></i> <b>Online</b>
                        </span>
                        <hr>
                    </div>

                    <!-- LOOP DO PORTFOLIO ONLINE -->
                    <?php 
                        $my_args_depo = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'category_name' => 'telecom+online',
                            'order' => 'asc',
                            'orderby' => 'name'
                        );

                        $my_query_depo = new WP_Query($my_args_depo);
                        
                        if($my_query_depo->have_posts()) : 
                        while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                    ?>

                            <div class="col-lg-3 col-md-4 col-12 mb-4 text-center">
                                <article class="portfolio__box">
                                    <a href="<?php the_field('link_externo_para_projeto'); ?>" target="_blank" rel="noopener">
                                        <header>
                                            <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                                            <div class="box-overlay">
                                                <span><?php the_field('nome_da_categoria_do_portfolio'); ?></span>
                                            </div>
                                        </header>

                                        <footer>
                                            <h4><?php the_title(); ?></h4>
                                        </footer>
                                    </a>
                                </article>
                            </div>

                    <?php endwhile; ?>

                    <?php else : get_404_template(); endif; ?>
                    <?php wp_reset_query(); ?>
                    

                    <div class="col-12 my-4">
                        <span class="turn-off">
                            <i class="fas fa-toggle-off"></i> <b>Offline</b>
                        </span>
                        <hr>
                    </div>

                    <!-- LOOP DO PORTFOLIO OFFLINE -->
                    <?php 
                        $my_args_depo = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'category_name' => 'telecom+offline',
                            'order' => 'asc',
                            'orderby' => 'name'
                        );

                        $my_query_depo = new WP_Query($my_args_depo);
                        
                        if($my_query_depo->have_posts()) : 
                        while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                    ?>

                            <div class="col-lg-3 col-md-4 col-12 my-4 text-center">
                                <article class="portfolio__box">
                                    <header>
                                        <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                                        <div class="box-overlay">
                                            <span><?php the_field('nome_da_categoria_do_portfolio'); ?></span>
                                        </div>
                                    </header>

                                    <footer>
                                        <h4><?php the_title(); ?></h4>
                                    </footer>
                                </article>
                            </div>

                    <?php endwhile; ?>

                    <?php else : get_404_template(); endif; ?>
                    <?php wp_reset_query(); ?>

                </section>

                <!-- TRANSPORTADORA -->
                <section class="row" id="transportadora">
                    
                    <div class="col-12 mb-4 text-center text-md-left">
                        <header>
                            <h2>Transportadora</h2>
                        </header>
                    </div>

                    <div class="col-12 my-4">
                        <span class="turn-on">
                            <i class="fas fa-toggle-off"></i> <b>Online</b>
                        </span>
                        <hr>
                    </div>

                    <!-- LOOP DO PORTFOLIO ONLINE -->
                    <?php 
                        $my_args_depo = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'category_name' => 'transportadora+online',
                            'order' => 'asc',
                            'orderby' => 'name'
                        );

                        $my_query_depo = new WP_Query($my_args_depo);
                        
                        if($my_query_depo->have_posts()) : 
                        while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                    ?>

                            <div class="col-lg-3 col-md-4 col-12 mb-4 text-center">
                                <article class="portfolio__box">
                                    <a href="<?php the_field('link_externo_para_projeto'); ?>" target="_blank" rel="noopener">
                                        <header>
                                            <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                                            <div class="box-overlay">
                                                <span><?php the_field('nome_da_categoria_do_portfolio'); ?></span>
                                            </div>
                                        </header>

                                        <footer>
                                            <h4><?php the_title(); ?></h4>
                                        </footer>
                                    </a>
                                </article>
                            </div>

                    <?php endwhile; ?>

                    <?php else : get_404_template(); endif; ?>
                    <?php wp_reset_query(); ?>
                    

                    <div class="col-12 my-4">
                        <span class="turn-off">
                            <i class="fas fa-toggle-off"></i> <b>Offline</b>
                        </span>
                        <hr>
                    </div>

                    <!-- LOOP DO PORTFOLIO OFFLINE -->
                    <?php 
                        $my_args_depo = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'category_name' => 'transportadora+offline',
                            'order' => 'asc',
                            'orderby' => 'name'
                        );

                        $my_query_depo = new WP_Query($my_args_depo);
                        
                        if($my_query_depo->have_posts()) : 
                        while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                    ?>

                            <div class="col-lg-3 col-md-4 col-12 my-4 text-center">
                                <article class="portfolio__box">
                                    <header>
                                        <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                                        <div class="box-overlay">
                                            <span><?php the_field('nome_da_categoria_do_portfolio'); ?></span>
                                        </div>
                                    </header>

                                    <footer>
                                        <h4><?php the_title(); ?></h4>
                                    </footer>
                                </article>
                            </div>

                    <?php endwhile; ?>

                    <?php else : get_404_template(); endif; ?>
                    <?php wp_reset_query(); ?>

                </section>

                <!-- TURISMO -->
                <section class="row" id="turismo">
                    
                    <div class="col-12 mb-4 text-center text-md-left">
                        <header>
                            <h2>Turismo</h2>
                        </header>
                    </div>

                    <div class="col-12 my-4">
                        <span class="turn-on">
                            <i class="fas fa-toggle-off"></i> <b>Online</b>
                        </span>
                        <hr>
                    </div>

                    <!-- LOOP DO PORTFOLIO ONLINE -->
                    <?php 
                        $my_args_depo = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'category_name' => 'turismo+online',
                            'order' => 'asc',
                            'orderby' => 'name'
                        );

                        $my_query_depo = new WP_Query($my_args_depo);
                        
                        if($my_query_depo->have_posts()) : 
                        while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                    ?>

                            <div class="col-lg-3 col-md-4 col-12 mb-4 text-center">
                                <article class="portfolio__box">
                                    <a href="<?php the_field('link_externo_para_projeto'); ?>" target="_blank" rel="noopener">
                                        <header>
                                            <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                                            <div class="box-overlay">
                                                <span><?php the_field('nome_da_categoria_do_portfolio'); ?></span>
                                            </div>
                                        </header>

                                        <footer>
                                            <h4><?php the_title(); ?></h4>
                                        </footer>
                                    </a>
                                </article>
                            </div>

                    <?php endwhile; ?>

                    <?php else : get_404_template(); endif; ?>
                    <?php wp_reset_query(); ?>
                    

                    <div class="col-12 my-4">
                        <span class="turn-off">
                            <i class="fas fa-toggle-off"></i> <b>Offline</b>
                        </span>
                        <hr>
                    </div>

                    <!-- LOOP DO PORTFOLIO OFFLINE -->
                    <?php 
                        $my_args_depo = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'category_name' => 'turismo+offline',
                            'order' => 'asc',
                            'orderby' => 'name'
                        );

                        $my_query_depo = new WP_Query($my_args_depo);
                        
                        if($my_query_depo->have_posts()) : 
                        while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                    ?>

                            <div class="col-lg-3 col-md-4 col-12 my-4 text-center">
                                <article class="portfolio__box">
                                    <header>
                                        <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                                        <div class="box-overlay">
                                            <span><?php the_field('nome_da_categoria_do_portfolio'); ?></span>
                                        </div>
                                    </header>

                                    <footer>
                                        <h4><?php the_title(); ?></h4>
                                    </footer>
                                </article>
                            </div>

                    <?php endwhile; ?>

                    <?php else : get_404_template(); endif; ?>
                    <?php wp_reset_query(); ?>

                </section>

            </div>
        </div>
    </div>
    <!-- CONTENT END -->


</main>

<?php get_footer(); ?>