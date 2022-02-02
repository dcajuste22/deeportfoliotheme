<?php
function enqueue_my_styles_scripts() {
  //Enqueue My Styles
  wp_enqueue_style("master-styles", get_stylesheet_directory_uri() . "/CSS/master.css", array(), null, 'all');
  wp_enqueue_style("form-styles", get_stylesheet_directory_uri() . "/CSS/form.css", );

  //Enqueue My Scripts
  wp_enqueue_script("portfolio-scripts", get_theme_file_uri() . "/JS/portfolio.js", array(), '1.0', true);

}
add_action('wp_enqueue_scripts', 'enqueue_my_styles_scripts');

function deethemes_setup() {
  register_nav_menus(array(
    'primary' => __('Primary Menu')
  ));
}

add_action('after_setup_theme', 'deethemes_setup');



 ?>
