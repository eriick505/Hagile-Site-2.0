<?php
    // Template name: Blog
?>

<?php get_header(); ?>

  <div class="expand-container blog cursiveTxt">
    <div class="row">

      <div class="col-lg-9 col-md-8 mb-4">
        <?php 
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

            $my_args_post = array(
                'post_type' => 'post',
                'posts_per_page' => 6,
                'paged' => $paged
            );

            $my_query_post = new WP_Query($my_args_post);
            
            if($my_query_post->have_posts()) : 
            while($my_query_post->have_posts()) : $my_query_post->the_post();
        ?>
            
            <article class="blog__card mb-4" style="background-image: url('<?php the_post_thumbnail_url( $size ); ?>');">
                <div class="overlay"></div>
                
                <div class="blog__body">
                    <span><i class="far fa-calendar-alt"></i> <?php echo get_the_date('d/m/y'); ?> </span>
                    <a href="<?php the_permalink(); ?>">
                        <h4><?php the_title(); ?></h4>
                    </a>
                    <a class="more" href="<?php the_permalink(); ?>">Saiba mais <i class="fas fa-chevron-right"></i></a>
                </div>
            </article>

        <?php endwhile; ?>

        <?php else : get_404_template(); endif; ?>
        <?php wp_reset_query(); ?>
      </div>
      
      <!-- sidebar__here -->
      <?php get_sidebar(); ?>
      
      <!-- pagination -->
      <div class="col-12 my-2 text-md-left text-center">
          <div class="">
            <?php previous_posts_link('🡰 Mais recente'); ?> 
            <?php next_posts_link( __( 'Mais antigo 🡲', 'textdomain' ), $my_query_post->max_num_pages ); ?> 
          </div>
      </div>

    </div>
  </div>

<?php get_footer(); ?>