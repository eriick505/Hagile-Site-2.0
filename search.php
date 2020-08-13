<?php
    /* Template Name: Custom Search */        
?>  

<?php get_header(); ?>

    <div class="contentarea">
        <div id="content" class="content_right">  

            <h3>Resultados para : <?php echo "$s"; ?> </h3>       
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  


            <div id="post-<?php the_ID(); ?>" class="posts">        
                <article>        
                    <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>      
                    <h5><?php the_title(); ?></h5>
                </article><!-- #post -->    
            </div>
                
        <?php endwhile; ?>
        <?php endif; ?>


        </div><!-- content -->    
    </div><!-- contentarea -->   


<?php get_footer(); ?>