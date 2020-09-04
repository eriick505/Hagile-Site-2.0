<?php 

  // ADICIONA O CSS DO SITE
  function add_estilos_css() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap4.5.1.min.css');
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/font-awesome/css/all.min.css');
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css');
    wp_enqueue_style( 'slickTheme', get_template_directory_uri() . '/assets/css/slick-theme.css');
    wp_enqueue_style( 'lity', get_template_directory_uri() . '/assets/css/lity.css');
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css');
  }
  add_action('wp_enqueue_scripts', 'add_estilos_css');

  // ADICIONA O JAVASCRIPT DO SITE
  function add_scripts_js() {
    wp_enqueue_script('jquery-3.5.1.slim.min', get_template_directory_uri() . '/assets/js/jquery-3.5.1.complete.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script('lity', get_template_directory_uri() . '/assets/js/lity.js', array ( 'jquery' ), 1.1, true);
  }
  add_action('wp_enqueue_scripts', 'add_scripts_js');

  // SUPORTE A IMAGEM DESTACADA
  add_theme_support('post-thumbnails');

  // SUPORTE A WIDGET NO MENU APARENCIA
  add_theme_support('widgets');
  add_theme_support('customize-selective-refresh-widgets');

  // REMOVE A VERSÃO ANTERIOR DO WORDPRESS
  function wpversion_remove_version() {
      return '';
  }
  add_filter('the_generator', 'wpversion_remove_version');

  // TITULO DINAMICO
  function title_tag() {
      add_theme_support('title-tag');
  }

  add_action('after_setup_theme', 'title_tag');

  // PREVINIR ERRO VERSAO ANTIGA DO TITULO HEADER DINAMICO
  if (!function_exists('_wp_render_title_tag')){
    function render_title() {
        ?>
        <title><?php wp_title('|', true, 'right'); ?></title>
        <?php 
    }
    add_action('wp_head', 'render_title');
  }

  // REGISTRA O CUSTOM NAVGATION WALKER
  require_once get_template_directory() . '/utils/class-wp-bootstrap-navwalker.php';

  // REGISTRAR OS MENUS
  register_nav_menus( array(
      'principal' => __('Menu Principal', 'Hagile'),
  ));

  // CRIAÇÃO DO CUSTOM POST TYPE 

  function create_custom_post_type() {
    register_post_type('depoimento', 
      array(
        'labels' => array(
          'name' => __('Depoimentos'),
          'singular_name' => __('Depoimento'),
          'all_items' => __('Todos os Depoimentos'),
        ),
        'supports' => array(
            'title', 'editor'
        ),
        'public' => true, 
        'has_archive' => true,
        'menu_icon' => 'dashicons-format-quote',
        'rewrite' => array('slug' => 'depoimento'),
      )
    );

    register_post_type('cliente', 
      array(
        'labels' => array(
          'name' => __('Clientes'),
          'singular_name' => __('Cliente'),
        ),
        'supports' => array(
            'title', 'thumbnail', 
        ),
        'public' => true, 
        'has_archive' => true,
        'menu_icon' => 'dashicons-groups',
        'rewrite' => array('slug' => 'cliente'),
        'taxonomies' => array('category')
      )
    );

    register_post_type('portfolio', 
      array(
        'labels' => array(
          'name' => __('Portóflio'),
          'singular_name' => __('Portfolio'),
        ),
        'supports' => array(
            'title', 'thumbnail', 
        ),
        'public' => true, 
        'has_archive' => true,
        'menu_icon' => 'dashicons-welcome-widgets-menus',
        'rewrite' => array('slug' => 'portfolio'),
        'taxonomies' => array('category')
      )
    );
  }

  // INICIAR O TIPO DE POST PERSONALIZADO
  add_action('init', 'create_custom_post_type');

  // TROCAR O LABEL DO TITULO DO POST DEPOIMENTOS
  function change_label_title_depoimento() {
    global $wp_post_types;
    $labels = &$wp_post_types['depoimento']->labels;
    $labels->add_new_item = 'Adicionar o nome da empresa do cliente';
  }
  add_action('init', 'change_label_title_depoimento');
  
  // CRIAR A BARRA LATERAL DINAMICA (widget)
  register_sidebar(
    array(
      'name' => 'Ultimos Posts',
      'id' => 'sidebar',
      'before_widget' => '<div> ',
      'after_widget' => '</div>',
      'before_title' => '<h5 class="font-weight-bold mb-3">',
      'after_title' => '</h5>',
  ));

  
?>