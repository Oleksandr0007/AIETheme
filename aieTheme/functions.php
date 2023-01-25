<?php 

add_action( 'wp_enqueue_scripts', function() {

  wp_enqueue_style( 'fffont', 'https://fonts.googleapis.com' );
  wp_enqueue_style( 'ffont', 'https://fonts.gstatic.com' );
  wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Readex+Pro:wght@200;300;400;500;600;700&display=swap' );
  wp_enqueue_style( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css' );
  wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css' );
  wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );

  wp_enqueue_script( 'swiperscript', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array('jquery'), 'null', true);
  wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null', true);
  
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

?>

  

 