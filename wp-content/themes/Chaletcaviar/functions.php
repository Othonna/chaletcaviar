<?php
require dirname(__DIR__, 3) . '/vendor/autoload.php';

function load_scripts() {
  wp_enqueue_style('stylesheet', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0', 'all');
  wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true);
}

function admin_scripts() {
  wp_enqueue_style('metaboxe', get_template_directory_uri() . '/assets/css/metaboxe.css', array(), '1.0.0', 'all');
  wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/metaboxe.js', array(), '1.0.0', true);
}

function chaletcaviar_register_assets () {
  
  wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
  wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', [], null, true);
  wp_register_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js');
  wp_enqueue_style('bootstrap');
  wp_enqueue_script('bootstrap');
  wp_enqueue_script('gsap');
}

function chaletcaviar_supports () {
  add_theme_support('title-tag');
  add_theme_support( 'post-thumbnails' );
  add_theme_support('menus');
  add_theme_support('custom-background');
  add_theme_support('custom-logo', [
    'header-text' => ['site-title', 'site-description'],
    'height' => 100,
    'width' => 400,
    'flex-height' => true,
    'flex-width' => true,
  ] );
  register_nav_menu('header', 'En tête du menu');
}
function chaletcaviar_document_title_parts ($title) {
  //var_dump($title); die();
  unset($title['tagline']);
  return $title;
}

function chaletcaviar_menu_class(array $classes): array 
{
  /* var_dump(func_get_args());
  die(); */
  $classes[] = 'nav-item';
  return $classes;
}
function chaletcaviar_menu_link_class($attrs)
{
  $attrs['class'] = 'nav-link';
  return $attrs;
}

/* function contact_session_start() {
  if (!session_id()) {
    @session_start();
  }
}
add_action('init', 'contact_session_start', 1); */

add_action('wp_enqueue_scripts', 'chaletcaviar_register_assets');
add_action('wp_enqueue_scripts', 'load_scripts');
add_action('admin_init', 'admin_scripts');
add_action('after_setup_theme', 'chaletcaviar_supports');

add_filter('document_title_parts', 'chaletcaviar_document_title_parts');
add_filter('nav_menu_css_class', 'chaletcaviar_menu_class');
add_filter('nav_menu_link_attributes', 'chaletcaviar_menu_link_class');


/*
* Metaboxes link to folder metaboxes
*/
require_once('metaboxes/metaboxes.php');
MetaBoxes::register(); 
