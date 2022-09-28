<?php 
    function locations_post_types() {
        register_post_type('location', array(
        'supports' => array('title', 'editor','thumbnail'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
        'name' => 'A louer',
        'add_new_item' => 'Ajouter une nouvelle annonce de location',
        'edit_item' => 'Editer une annonce de location',
        'all_items' => 'Toutes les annonces de locations',
        'singular_name' => 'location'
        ),
        'menu_icon' => 'dashicons-store'
        ));
    }
    add_action('init', 'locations_post_types');
 ?>