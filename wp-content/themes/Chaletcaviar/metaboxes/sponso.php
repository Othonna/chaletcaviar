<?php

class SponsoMetaBox {

    const META_KEY = 'chaletcaviar_sponso';

    public static function register () {
        add_action( 'add_meta_boxes', [self::class, 'add'] );
        add_action('save_post', [self::class, 'save']);
    }

    public static function add() {
        /*
        * Registering metaboxes
        * @return void
        */
            $screens = array('location', 'sale');
            foreach ( $screens as $screen ) {
                add_meta_box(
                    self::META_KEY,           // Unique ID
                    'Sponsoring',             // Box title
                    [self::class, 'render'],  // Content callback, must be of type callable
                    $screen,                  // Post type
                    'side'                    // side or not 
                );
            }
    }

    public static function render($post) {
        $value = get_post_meta($post->ID, self::META_KEY, true);
        /*
        * HTML for our Custom Content 
        * @return void
        */
        ?>
        <input type="hidden" value="0" name="<?= self::META_KEY ?>">
        <input type="checkbox" value="1" name="<?= self::META_KEY ?>" <?= $value === '1' ? 'checked' : ''?> >
        <label for="chaletcaviar_sponso">Article sponsorisé</label>
        <?php
    }

    public static function save(int $post) {
        /*
        * Save metaboxes 
        * @return void
        */
        if (array_key_exists(self::META_KEY, $_POST) && current_user_can( 'edit_post', $post)) {
            if ($_POST[self::META_KEY] === '0') {
              delete_post_meta($post, self::META_KEY);
            } else {
                update_post_meta($post, self::META_KEY,1);
            }
        }
    }
}