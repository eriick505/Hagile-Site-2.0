<?php
    // Template name: Blog
?>

<?php get_header(); ?>

  <div class="expand-container blog cursiveTxt">
    <div class="row">

      <div class="col-12 mb-5">
          <header>
              <h2>Blog</h2>
              <p>Confira todas as notícias da Hagile no meio digital</p>
          </header>
      </div>

      <div class="col-lg-9 col-md-8 mb-4">
        <?php 
            $my_args_depo = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
            );

            $my_query_depo = new WP_Query($my_args_depo);
            
            if($my_query_depo->have_posts()) : 
            while($my_query_depo->have_posts()) : $my_query_depo->the_post();
        ?>
            
            <article class="blog__card mb-4" style="background-image: url('<?php the_post_thumbnail_url( $size ); ?>');">
                <div class="overlay"></div>
                
                <div class="blog__body">
                    <span><i class="far fa-calendar-alt"></i> <?php echo get_the_date('d/m/y'); ?> </span>
                    <a href="<?php the_permalink(); ?>">
                        <h4><?php the_title(); ?></h4>
                    </a>
                    <?php the_excerpt(); ?>
                    <a class="more" href="<?php the_permalink(); ?>">Saiba mais <i class="fas fa-chevron-right"></i></a>
                </div>
            </article>

        <?php endwhile; ?>

        <?php else : get_404_template(); endif; ?>
        <?php wp_reset_query(); ?>
      </div>
      

      <!-- sidebar__here -->
      <?php get_sidebar(); ?>

      <div class="col-12 my-2 text-md-left text-center">
          <div class="">
              <?php my_pagination(); ?>
          </div>
      </div>

    </div>
  </div>

<?php get_footer(); ?>