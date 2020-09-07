<?php get_header(); ?>

  <div class="expand-container blog">
    <div class="row">

      <main class="col-lg-9 col-md-8 mb-3">
        <?php if(have_posts()) : 
          while(have_posts()) : the_post(); 
        ?>

          <div class="single__blog">
            <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid mb-3 rounded')); ?>
  
            <span class="date"><i class="far fa-calendar-alt"></i> <?php echo get_the_date('d/m/y'); ?></span>
            <h2><?php the_title(); ?></h2>
            <hr>
            <?php the_content(); ?>
          </div>

        <?php endwhile; ?>
        <?php else : get_404_template(); endif; ?>
      </main>

      <!-- sidebar__here -->
      <?php get_sidebar(); ?>

      <div class="col-12 mb-5 text-md-left text-center">
          <!-- AddToAny BEGIN -->
          <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
          <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
          <a class="a2a_button_facebook"></a>
          <a class="a2a_button_google_gmail"></a>
          <a class="a2a_button_whatsapp"></a>
          <a class="a2a_button_email"></a>
          </div>
          <script async src="https://static.addtoany.com/menu/page.js"></script>
          <!-- AddToAny END -->
      </div>

      <div class="col-12 text-md-left text-center">
          <a href="blog" class="btn btn-primary btn__had"><i class="fas fa-chevron-left"></i> Voltar para as notícias</a>
      </div>

      <div class="col-12 my-5">
        <?php get_template_part( 'comments' ); ?>
      </div>

      <div class="col-12 mb-3">
        <h3>Você deve querer ver também...</h3>
      </div>
        
      <?php 
          $my_args_depo = array(
              'post_type' => 'post',
              'posts_per_page' => 3,
          );

          $my_query_depo = new WP_Query($my_args_depo);
          
          if($my_query_depo->have_posts()) : 
          while($my_query_depo->have_posts()) : $my_query_depo->the_post();
      ?>

          <div class="col-lg-4 col-md-6 mb-3">
              <article class="blog__card" style="background-image: url('<?php the_post_thumbnail_url( $size ); ?>');">
                  <div class="overlay"></div>
                  
                  <div class="blog__body">
                      <span><i class="far fa-calendar-alt"></i> <?php echo get_the_date('d/m/y'); ?> </span>
                      <a href="<?php the_permalink(); ?>">
                          <h4><?php the_title(); ?></h4>
                      </a>
                      <a class="more" href="<?php the_permalink(); ?>">Saiba mais <i class="fas fa-chevron-right"></i></a>
                  </div>
              </article>
          </div>

      <?php endwhile; ?>

      <?php else : get_404_template(); endif; ?>
      <?php wp_reset_query(); ?>


    </div>
  </div>

<?php get_footer(); ?>