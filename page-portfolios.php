<?php
    // Template name: Portfolio
?>

<?php get_header(); ?>

    <!-- CLIENTES -->
    <section class="portfolio cursiveTxt" id="clientes">
        <div class="container">
            <div class="row py-5">

                <!-- CONTENT -->
                <div class="col-lg-9 col-md-8">
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

                                <div class="col-md-4 col-12 mb-4 text-center">
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

                                <div class="col-md-4 col-12 mb-4 text-center">
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

                                <div class="col-md-4 col-12 mb-4 text-center">
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
                                'category_name' => 'associacao+offline',
                                'order' => 'asc',
                                'orderby' => 'name'
                            );

                            $my_query_depo = new WP_Query($my_args_depo);
                            
                            if($my_query_depo->have_posts()) : 
                            while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                        ?>

                                <div class="col-md-4 col-12 my-4 text-center">
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

                                <div class="col-md-4 col-12 mb-4 text-center">
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

                                <div class="col-md-4 col-12 my-4 text-center">
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
                                'category_name' => 'construtoras+online',
                                'order' => 'asc',
                                'orderby' => 'name'
                            );

                            $my_query_depo = new WP_Query($my_args_depo);
                            
                            if($my_query_depo->have_posts()) : 
                            while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                        ?>

                                <div class="col-md-4 col-12 mb-4 text-center">
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

                                <div class="col-md-4 col-12 my-4 text-center">
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

                                <div class="col-md-4 col-12 mb-4 text-center">
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

                                <div class="col-md-4 col-12 my-4 text-center">
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

                                <div class="col-md-4 col-12 mb-4 text-center">
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

                                <div class="col-md-4 col-12 my-4 text-center">
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

                                <div class="col-md-4 col-12 mb-4 text-center">
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

                                <div class="col-md-4 col-12 my-4 text-center">
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

                                <div class="col-md-4 col-12 mb-4 text-center">
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

                                <div class="col-md-4 col-12 my-4 text-center">
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

                                <div class="col-md-4 col-12 mb-4 text-center">
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

                                <div class="col-md-4 col-12 my-4 text-center">
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

                                <div class="col-md-4 col-12 mb-4 text-center">
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

                                <div class="col-md-4 col-12 my-4 text-center">
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

                                <div class="col-md-4 col-12 mb-4 text-center">
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

                                <div class="col-md-4 col-12 my-4 text-center">
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

                                <div class="col-md-4 col-12 mb-4 text-center">
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

                                <div class="col-md-4 col-12 my-4 text-center">
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

                                <div class="col-md-4 col-12 mb-4 text-center">
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

                                <div class="col-md-4 col-12 my-4 text-center">
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
                
                <!-- SIDEBAR -->
                <?php get_template_part('partials/sidebar_clientes'); ?>

            </div>
        </div>
    </section>

<?php get_footer(); ?>