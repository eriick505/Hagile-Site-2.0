<?php
    // Template name: Clientes
?>

<?php get_header(); ?>

    <!-- CLIENTES -->
    <section class="clients cursiveTxt" id="clientes">
        <div class="container">
            <div class="row py-5">

                <div class="col-lg-9 col-md-8">
                    <!-- ALIMENTAÇÃO -->
                    <section class="row mb-4" id="alimentacao">
                        
                        <div class="col-12 text-center text-md-left">
                            <header>
                                <h2>Alimentação</h2>
                            </header>
                        </div>

                        <!-- LIST CATEGORY CLIENTS -->
                        <?php 
                            $my_args_depo = array(
                                'post_type' => 'cliente',
                                'posts_per_page' => -1,
                                'category_name' => 'alimentacao',
                                'order' => 'asc'
                            );

                            $my_query_depo = new WP_Query($my_args_depo);
                            
                            if($my_query_depo->have_posts()) : 
                            while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                        ?>

                        <div class="col-lg-3 col-md-4 col-6 text-center mb-3">
                            <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                        </div>

                        <?php endwhile; ?>

                        <?php else : get_404_template(); endif; ?>
                        <?php wp_reset_query(); ?>

                    </section>
                    
                    <!-- ASSOCIAÇÕES -->   
                    <section class="row mb-4" id="associacao">
                        
                        <div class="col-12 text-center text-md-left">
                            <header>
                                <h2>Associações</h2>
                            </header>
                        </div>

                        <!-- LIST CATEGORY CLIENTS -->
                        <?php 
                            $my_args_depo = array(
                                'post_type' => 'cliente',
                                'posts_per_page' => -1,
                                'category_name' => 'associacoes',
                                'order' => 'asc'
                            );

                            $my_query_depo = new WP_Query($my_args_depo);
                            
                            if($my_query_depo->have_posts()) : 
                            while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                        ?>

                        <div class="col-lg-3 col-md-4 col-6 text-center mb-3">
                            <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                        </div>

                        <?php endwhile; ?>

                        <?php else : get_404_template(); endif; ?>
                        <?php wp_reset_query(); ?>

                    </section>

                     <!-- COMERCIO -->   
                     <section class="row mb-4" id="comercio">
                        
                        <div class="col-12 text-center text-md-left">
                            <header>
                                <h2>Comércio</h2>
                            </header>
                        </div>

                        <!-- LIST CATEGORY CLIENTS -->
                        <?php 
                            $my_args_depo = array(
                                'post_type' => 'cliente',
                                'posts_per_page' => -1,
                                'category_name' => 'comercio',
                                'order' => 'asc'
                            );

                            $my_query_depo = new WP_Query($my_args_depo);
                            
                            if($my_query_depo->have_posts()) : 
                            while($my_query_depo->have_posts()) : $my_query_depo->the_post();
                        ?>

                        <div class="col-lg-3 col-md-4 col-6 text-center mb-3">
                            <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                        </div>

                        <?php endwhile; ?>

                        <?php else : get_404_template(); endif; ?>
                        <?php wp_reset_query(); ?>

                    </section>
                </div>

                <?php get_template_part('partials/sidebar_clientes'); ?>
                                
            </div>
        </div>
    </section>

<?php get_footer(); ?>