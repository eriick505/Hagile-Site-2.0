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

                        <!-- LIST CATEGORY PORTFOLIO -->
                        <?php 
                            $my_args_depo = array(
                                'post_type' => 'portfolio',
                                'posts_per_page' => -1,
                                'category_name' => 'alimentacao+online',
                                'order' => 'asc'
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

                        <!-- LIST CATEGORY PORTFOLIO -->
                        <?php 
                            $my_args_depo = array(
                                'post_type' => 'portfolio',
                                'posts_per_page' => -1,
                                'category_name' => 'alimentacao+offline',
                                'order' => 'asc'
                            );

                            $my_query_depo = new WP_Query($my_args_depo);
                            
                            if($my_query_depo->have_posts()) : 
                            while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                        ?>

                                <div class="col-md-4 col-12 mb-4 text-center">
                                    <article class="portfolio__box">
                                        <a href="<?php the_field('link_externo_para_projeto'); ?>" rel="noopener">
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


                    </section>

                     <!-- ASSOCIAÇÕES -->
                     <section class="row" id="associacao">
                        
                        <div class="col-12 mb-4 text-center text-md-left">
                            <header>
                                <h2>Assoaciações</h2>
                            </header>
                        </div>

                        <!-- TURN ON -->
                        <div class="col-12 my-4">
                            <span class="turn-on">
                                <i class="fas fa-toggle-off"></i> <b>Online</b>
                            </span>
                            <hr>
                        </div>

                        <!-- LIST CATEGORY PORTFOLIO -->
                        <?php 
                            $my_args_depo = array(
                                'post_type' => 'portfolio',
                                'posts_per_page' => -1,
                                'category_name' => 'associacoes+online',
                                'order' => 'asc'
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

                        <!-- LIST CATEGORY PORTFOLIO -->
                        <?php 
                            $my_args_depo = array(
                                'post_type' => 'portfolio',
                                'posts_per_page' => -1,
                                'category_name' => 'associacao+offline',
                                'order' => 'asc'
                            );

                            $my_query_depo = new WP_Query($my_args_depo);
                            
                            if($my_query_depo->have_posts()) : 
                            while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                        ?>

                                <div class="col-md-4 col-12 my-4 text-center">
                                    <article class="portfolio__box">
                                        <a href="<?php the_field('link_externo_para_projeto'); ?>" rel="noopener">
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


                    </section>
                </div>
                
                <!-- SIDEBAR -->
                <?php get_template_part('partials/sidebar_clientes'); ?>

            </div>
        </div>
    </section>

<?php get_footer(); ?>