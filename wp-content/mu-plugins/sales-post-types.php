<?php 
    function sales_post_types() {
        register_post_type('sale', array(
        'supports' => array('title', 'editor','thumbnail'),
        'has_archive' => true,    
        'public' => true,
        'labels' => array(
        'name' => 'A vendre',
        'add_new_item' => 'Ajouter une nouvelle annonce de vente',
        'edit_item' => 'Editer une annonce de vente',
        'all_items' => 'Toutes les annonces de vente',
        'singular_name' => 'sale'
        ),
        'menu_icon' => 'dashicons-bank'
        ));
    }
    
    add_action('init', 'sales_post_types');
 ?>