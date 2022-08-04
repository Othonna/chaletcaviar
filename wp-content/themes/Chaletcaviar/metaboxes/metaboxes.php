<?php

class MetaBoxes {

    const META_PRICE = 'chaletcaviar_price';
    const META_METER = 'chaletcaviar_meter';
    const META_NUMBER = 'chaletcaviar_number';

    public static function register () {
        add_action( 'add_meta_boxes', [self::class, 'add'] );
        add_action('save_post', [self::class, 'save']);
    }

    public static function add() {
        /*
        * Registering metaboxes
        * @return void
        */
        $screens = array('sale');
        foreach ( $screens as $screen ) {
            add_meta_box(
                self::META_PRICE,               // Constant ID
                'Prix',                         // Box title
                [self::class, 'render_price'],  // Content callback, function = 'render_OF'
                $screen,                        // Post type
                'side'                          // side or not 
            );
        }
        $screens = array('location');
        foreach ( $screens as $screen ) {
            add_meta_box(
                self::META_PRICE,            
                'Prix à la semaine',           
                [self::class, 'render_price'], 
                $screen,                       
                'side'                          
            );
        }

        $screens = array('location', 'sale');
        foreach ( $screens as $screen ) {
            add_meta_box(
                self::META_METER,               
                'Superficie',                 
                [self::class, 'render_meter'],  
                $screen,                        
                'side'                        
            );
        }

        $screens = array('location', 'sale');
        foreach ( $screens as $screen ) {
            add_meta_box(
                self::META_NUMBER,           
                'Nombre de chambres',          
                [self::class, 'render_number'], 
                $screen,                        
                'side'                          
            );
        }
    }

    public static function render_price($post) {
         /*
        * HTML for our Custom Content 
        * @return void
        */
        $value = get_post_meta( $post->ID, self::META_PRICE, true );
        ?>
        <script>
            function updateTextInput(val) { document.getElementById('textRangeInput').value=val; }
        </script>
        <input type="text" id="textRangeInput" value="" name="<?= self:: META_PRICE ?>" <?= $value === '1' ? 'checked' : ''?>>
        <input type="range" name="rangeInput" min="0" max="1000000" onchange="updateTextInput(this.value);">
        <?php
    }

    public static function render_meter($post) {
         /*
        * HTML for our Custom Content 
        * @return void
        */
        $value = get_post_meta( $post->ID, self::META_METER, true );
        ?>
         <input method="post" id="<?= self::META_METER ?>"  type="number" name="<?= self::META_METER ?>"> m²</input>
       <?php
    }

    public static function render_number($post) {
         /*
        * HTML for our Custom Content 
        * @return void
        */
        $value = get_post_meta( $post->ID, self::META_NUMBER, true );
        ?>
            <div>
                <input type="radio" id="oneChamber" name="<?= self::META_NUMBER ?>" value="1" checked>
                <label for="oneChamber">1</label>
            </div>
            <div>
                <input type="radio" id="twoChamber" name="<?= self::META_NUMBER ?>" value="2">
                <label for="twoChamber">2</label>
            </div>
            <div>
                <input type="radio" id="threeChamber" name="<?= self::META_NUMBER ?>" value="3">
                <label for="threeChamber">3</label>
            </div>
        <?php
     }

    public static function save($post_id) {
         /*
        * Save metaboxes 
        * @return void
        */
        //dump($_POST);
        if (array_key_exists (self::META_PRICE, $_POST)) {
            update_post_meta(
                $post_id,
                self::META_PRICE,
                $_POST[self::META_PRICE]
            );
        } 
        if (array_key_exists (self::META_METER, $_POST)) {
            update_post_meta(
                $post_id,
                self::META_METER,
                $_POST[self::META_METER]
            );
        } 
        if (array_key_exists (self::META_NUMBER, $_POST)) {
            update_post_meta(
                $post_id,
                self::META_NUMBER,
                $_POST[self::META_NUMBER]
            );
        }
    }
}


