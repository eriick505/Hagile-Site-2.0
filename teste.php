<!-- CLIENTES -->
<section class="clients cursiveTxt" id="clientes">
    <div class="container">
        <div class="row py-5">
            <div class="col-12 text-center mb-4">
                <header>
                    <h2>Nossos Clientes</h2>
                </header>
            </div>

                <?php 
                    $my_args_depo = array(
                        'post_type' => 'cliente',
                        'posts_per_page' => -1,
                        'category_name' => 'principal-home'
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
                            
            </div>
        </div>
    </div>
</div>