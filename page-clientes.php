<?php
    // Template name: Clientes
?>

<?php get_header(); ?>

    <!-- CLIENTES -->
    <section class="clients cursiveTxt" id="clientes">
        <div class="container">
            <div class="row py-5">

                <!-- CONTENT -->
                <div class="col-lg-9 col-md-8">
                    <!-- ALIMENTAÇÃO -->
                    <section class="row " id="alimentacao">
                        
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
                    <section class="row " id="associacao">
                        
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
                    <section class="row " id="comercio">
                        
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

                    <!-- Concessionárias -->
                    <section class="row " id="concessionarias">
                        
                        <div class="col-12 text-center text-md-left">
                            <header>
                                <h2>Concessionárias</h2>
                            </header>
                        </div>

                        <!-- LIST CATEGORY CLIENTS -->
                        <?php 
                            $my_args_depo = array(
                                'post_type' => 'cliente',
                                'posts_per_page' => -1,
                                'category_name' => 'concessionarias',
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

                    <!-- Construtoras -->
                    <section class="row " id="construtoras">
                        
                        <div class="col-12 text-center text-md-left">
                            <header>
                                <h2>Construtoras</h2>
                            </header>
                        </div>

                        <!-- LIST CATEGORY CLIENTS -->
                        <?php 
                            $my_args_depo = array(
                                'post_type' => 'cliente',
                                'posts_per_page' => -1,
                                'category_name' => 'construtoras',
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

                    <!-- Consultorias -->
                    <section class="row " id="consultorias">
                        
                        <div class="col-12 text-center text-md-left">
                            <header>
                                <h2>Consultorias</h2>
                            </header>
                        </div>

                        <!-- LIST CATEGORY CLIENTS -->
                        <?php 
                            $my_args_depo = array(
                                'post_type' => 'cliente',
                                'posts_per_page' => -1,
                                'category_name' => 'consultorias',
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

                    <!-- Educação -->
                    <section class="row " id="educacao">
                        
                        <div class="col-12 text-center text-md-left">
                            <header>
                                <h2>Educação</h2>
                            </header>
                        </div>

                        <!-- LIST CATEGORY CLIENTS -->
                        <?php 
                            $my_args_depo = array(
                                'post_type' => 'cliente',
                                'posts_per_page' => -1,
                                'category_name' => 'educacao',
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

                    <!-- Entretenimento -->
                    <section class="row " id="entretenimento">
                        
                        <div class="col-12 text-center text-md-left">
                            <header>
                                <h2>Entretenimento</h2>
                            </header>
                        </div>

                        <!-- LIST CATEGORY CLIENTS -->
                        <?php 
                            $my_args_depo = array(
                                'post_type' => 'cliente',
                                'posts_per_page' => -1,
                                'category_name' => 'entretenimento',
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

                    <!-- Indústria -->
                    <section class="row " id="industria">
                        
                        <div class="col-12 text-center text-md-left">
                            <header>
                                <h2>Indústria</h2>
                            </header>
                        </div>

                        <!-- LIST CATEGORY CLIENTS -->
                        <?php 
                            $my_args_depo = array(
                                'post_type' => 'cliente',
                                'posts_per_page' => -1,
                                'category_name' => 'industria',
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

                    <!-- Jurídico -->
                    <section class="row " id="juridico">
                        
                        <div class="col-12 text-center text-md-left">
                            <header>
                                <h2>Jurídico</h2>
                            </header>
                        </div>

                        <!-- LIST CATEGORY CLIENTS -->
                        <?php 
                            $my_args_depo = array(
                                'post_type' => 'cliente',
                                'posts_per_page' => -1,
                                'category_name' => 'juridico',
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

                    <!-- Saúde -->
                    <section class="row " id="saude">
                        
                        <div class="col-12 text-center text-md-left">
                            <header>
                                <h2>Saúde</h2>
                            </header>
                        </div>

                        <!-- LIST CATEGORY CLIENTS -->
                        <?php 
                            $my_args_depo = array(
                                'post_type' => 'cliente',
                                'posts_per_page' => -1,
                                'category_name' => 'saude',
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

                    <!-- Serviços -->
                    <section class="row " id="servicos">
                        
                        <div class="col-12 text-center text-md-left">
                            <header>
                                <h2>Serviços</h2>
                            </header>
                        </div>

                        <!-- LIST CATEGORY CLIENTS -->
                        <?php 
                            $my_args_depo = array(
                                'post_type' => 'cliente',
                                'posts_per_page' => -1,
                                'category_name' => 'servicos',
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

                    <!-- Telecom -->
                    <section class="row " id="telecom">
                        
                        <div class="col-12 text-center text-md-left">
                            <header>
                                <h2>Telecom</h2>
                            </header>
                        </div>

                        <!-- LIST CATEGORY CLIENTS -->
                        <?php 
                            $my_args_depo = array(
                                'post_type' => 'cliente',
                                'posts_per_page' => -1,
                                'category_name' => 'telecom',
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

                    <!-- Transportadora -->
                    <section class="row " id="transportadora">
                        
                        <div class="col-12 text-center text-md-left">
                            <header>
                                <h2>Transportadora</h2>
                            </header>
                        </div>

                        <!-- LIST CATEGORY CLIENTS -->
                        <?php 
                            $my_args_depo = array(
                                'post_type' => 'cliente',
                                'posts_per_page' => -1,
                                'category_name' => 'transportadora',
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

                    <!-- Turismo -->
                    <section class="row " id="turismo">
                        
                        <div class="col-12 text-center text-md-left">
                            <header>
                                <h2>Turismo</h2>
                            </header>
                        </div>

                        <!-- LIST CATEGORY CLIENTS -->
                        <?php 
                            $my_args_depo = array(
                                'post_type' => 'cliente',
                                'posts_per_page' => -1,
                                'category_name' => 'turismo',
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
                
                <!-- SIDEBAR -->
                <?php get_template_part('partials/sidebar_clientes'); ?>

            </div>
        </div>
    </section>

<?php get_footer(); ?>