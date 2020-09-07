<?php
    /* Template Name: Custom Search */        
?>  

<?php get_header(); ?>

    <div class="bg-purple">
        <div class="container">
            <div class="row py-5">
                <div class="col-12 text-center text-white">
                    <header class="mb-4">
                        <h2>Ainda não encontrou o que procura?</h2>
                        <span class="h4">Continue pesquisando...</span>
                    </header>
                    
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row my-4">  
            <div class="col-12 mb-4">
                <h2><b>Resultados para:</b> <?php echo "$s"; ?></h2>
            </div>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  

                <div id="post-<?php the_ID(); ?>" class="col-lg-6 mb-4">        
                    <article class="card">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>      
                        </a>
                        <div class="card-body">
                            <a href="<?php the_permalink(); ?>">
                                <h3 class="mt-3"><?php the_title(); ?></h3>
                            </a>
                        </div>
                    </article>
                </div>
                
            <?php endwhile; ?>
            <?php else : ?>

                <div class="col-12 text-center">
                    <div class="noResultsFound vh-75 d-flex flex-column justify-content-center align-items-center">
                        <span class="h2 text-warning"><i class="fas fa-exclamation-circle"></i></span>
                        <h3>Nenhum resultado encontrado para: <b><?php echo "$s"; ?></b></h3>
                    </div>
                </div>

            <?php endif; ?>


        </div><!-- content -->    
    </div><!-- contentarea -->   


<?php get_footer(); ?>