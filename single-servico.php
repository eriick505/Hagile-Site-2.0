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

    case 'crie-sua-identidade-visual':
      get_template_part('partials/crie-sua-identidade-visual');
    break;

    case 'hospedagem':
      get_template_part('partials/hospedagem');
    break;

    case 'otimizacao':
      get_template_part('partials/otimizacao');
    break;

    case 'links-patrocinados':
      get_template_part('partials/links-patrocinados');
    break;

    case 'fotos-e-videos':
      get_template_part('partials/fotos-e-videos');
    break;

    case 'lancamentos-digitais':
      get_template_part('partials/lancamentos-digitais');
    break;

    default:
      get_404_template();
    break;
  }

  get_footer();

?>
