<?php get_header(); ?>

  <div class="container my-4">
    <div class="row">
      <main class="col-lg-8 mb-3">

        <?php if(have_posts()) : 
          while(have_posts()) : the_post(); 
        ?>

          <div class="single__blog">
            <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid mb-3 rounded')); ?>
  
            <span><i class="far fa-calendar-alt"></i> <?php echo get_the_date('d/m/y'); ?> </span>
            <h2><?php the_title(); ?></h2>
            <hr>
            <?php the_content(); ?>
          </div>

        <?php endwhile; ?>
        <?php else : get_404_template(); endif; ?>

      </main>

      <!-- sidebar__here -->

      <div class="col-12 text-md-left text-center">
          <a href="#"><i class="fas fa-chevron-left"></i> Voltar para as notícias</a>
      </div>

      <div class="col-12 mt-5">
        <?php get_template_part( 'comments' ); ?>
      </div>

    </div>
  </div>

<?php get_footer(); ?>