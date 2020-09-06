<?php 
  
  get_header();

  global $post;
  $post_slug = $post->post_name;

  switch($post_slug) {
    case 'criacao-de-sites':
      get_template_part('partials/criacao-de-sites');
    break;

    case 'desenvolvimento-de-sistemas':
      get_template_part('partials/desenvolvimento-de-sistemas');
    break;

    case 'impulsione-suas-redes-sociais':
      get_template_part('partials/impulsione-suas-redes-sociais');
    break;

    default:
      get_404_template();
    break;
  }

  get_footer();

?>
