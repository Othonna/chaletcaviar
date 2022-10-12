<?php
require dirname(__DIR__, 3) . '/vendor/autoload.php';
/*
* Metaboxes link to folder metaboxes
*/
require_once('metaboxes/metaboxes.php');

MetaBoxes::register(); 

function load_scripts() {
  wp_enqueue_style('stylesheet', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0', 'all');
  wp_enqueue_style('navbar', get_template_directory_uri() . '/assets/css/navbar.css', array(), '1.0.0', 'all');
  wp_enqueue_style('card', get_template_directory_uri() . '/assets/css/card.css', array(), '1.0.0', 'all');
  wp_enqueue_style('contacts', get_template_directory_uri() . '/assets/css/contact.css', array(), '1.0.0', 'all');
  // wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all');
  wp_enqueue_script('navbar', get_template_directory_uri() . '/assets/js/navbar.js', array(), '1.0.0', true);
  wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true);
  //wp_enqueue_script('gsap', get_template_directory_uri() . '/assets/js/gsap.min.js', array(), false, true);
  // wp_enqueue_script('scrolltrigger', get_template_directory_uri() . '/assets/js/ScrollTrigger.min.js', array(), false, true);
  // wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0.0', true);
}

function admin_scripts() {
  wp_enqueue_style('metaboxe', get_template_directory_uri() . '/assets/css/metaboxe.css', array(), '1.0.0', 'all');
  wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/metaboxe.js', array(), '1.0.0', true);
}

function chaletcaviar_register_assets () {
  wp_register_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js');
  wp_register_script('scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.2/ScrollTrigger.min.js');
  wp_register_style('bootstrapcss', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
  wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', [], null, true);
  wp_register_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css');
  wp_enqueue_script('gsap');
  wp_enqueue_script('scrolltrigger');
  wp_enqueue_style('bootstrapcss');
  wp_enqueue_script('bootstrap');
  wp_enqueue_style('fontawesome');
 
  
}

function chaletcaviar_supports () {
  add_theme_support('title-tag');
  add_theme_support( 'post-thumbnails'); // Posts and Movies
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


