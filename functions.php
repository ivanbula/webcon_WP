<?php
function izazov2_theme_setup(){
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    remove_theme_support( 'widgets-block-editor' );
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'izazov2' ),
    ) );
}

add_action('after_setup_theme', 'izazov2_theme_setup');



/**
 * Add a sidebar.
 */
function izazov2_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => 'Sidebar-1',
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="widget1 mb-5">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Sidebar-2',
        'id'            => 'sidebar-2',
        'before_widget' => '<div class="widget2">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'izazov2_theme_slug_widgets_init' );


function add_theme_scripts() {
  
    wp_enqueue_style( 'owl.carousel.min.css', get_template_directory_uri() . '/css/owl.carousel.min.css',false,'1.1','all');
    wp_enqueue_style( 'owl.theme.default.min.css', get_template_directory_uri() . '/css/owl.theme.default.min.css',false,'1.1','all');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css',false,'1.1','all');

    wp_enqueue_script( 'owl.carousel.min.js', get_template_directory_uri() . '/js/owl.carousel.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'main.js', get_template_directory_uri() . '/main.js', array ( 'jquery' ), 1.1, true);
  
        

  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


