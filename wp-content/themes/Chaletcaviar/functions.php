<?php 

  function chaletcaviar_supports () {
  add_theme_support('title-tag');
}

function chaletcaviar_register_assets () {
  wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
  wp_enqueue_style('bootstrap');
}

add_action('after_setup_theme', 'chaletcaviar_supports');
add_action('wp_enqueue_scripts', 'chaletcaviar_register_assets');