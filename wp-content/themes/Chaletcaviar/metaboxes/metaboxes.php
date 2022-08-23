<?php

class MetaBoxes {

    const META_PRICE = 'chaletcaviar_price';
    const META_METER = 'chaletcaviar_meter';
    const META_CHAMBER = 'chaletcaviar_chamber';
    const META_BATH = 'chaletcaviar_bath';

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
                self::META_CHAMBER,           
                'Chambres',          
                [self::class, 'render_chamber'], 
                $screen,                        
                'side'                          
            );
        }
       
        $screens = array('location', 'sale');
        foreach ( $screens as $screen ) {
            add_meta_box(
                self::META_BATH,           
                'Salle de bains',          
                [self::class, 'render_bath'], 
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

            <style>
                input[type='range'] {
                box-sizing: border-box;
                border: 0px solid transparent;
                padding: 0px;
                margin: 0px;
                width: 175px;
                height: 50px;
                cursor: pointer;
                background: -webkit-repeating-linear-gradient(90deg, #777, #777 1px, transparent 1px, transparent 40px) no-repeat 50% 50%;
                background: -moz-repeating-linear-gradient(90deg, #777, #777 1px, transparent 1px, transparent 40px) no-repeat 50% 50%;
                background: repeating-linear-gradient(90deg, #777, #777 1px, transparent 1px, transparent 40px) no-repeat 50% 50%;
                background-size: 122px 25px;
                font-size: 16px;
                }
                input[type='range'],
                input[type='range']::-webkit-slider-runnable-track,
                input[type='range']::-webkit-slider-thumb {
                -webkit-appearance: none;
                }
                input[type='range']::-webkit-slider-runnable-track {
                box-sizing: border-box;
                width: 200px;
                height: 5px;
                border-radius: 2px;
                background: #777;
                }
                input[type='range']::-moz-range-track {
                box-sizing: border-box;
                width: 200px;
                height: 5px;
                border-radius: 2px;
                padding: 0px;
                background: #777;
                }
                input[type='range']::-moz-range-thumb {
                box-sizing: border-box;
                padding: 0px;
                height: 20px;
                width: 10px;
                border-radius: 2px;
                border: 1px solid;
                background: #EEE;
                }
                input[type='range']::-ms-track {
                box-sizing: border-box;
                width: 210px;
                height: 5px;
                border-radius: 2px;
                padding: 0px;
                background: #777;
                color: #777;
                }
                input[type='range']::-webkit-slider-thumb {
                box-sizing: border-box;
                padding: 0px;
                height: 20px;
                width: 10px;
                border-radius: 2px;
                border: 1px solid;
                margin-top: -8px;
                background: #EEE;
                }
                input[type='range']::-ms-thumb {
                box-sizing: border-box;
                padding: 0px;
                height: 20px;
                width: 10px;
                border-radius: 2px;
                border: 1px solid;
                background: #EEE;
                }
                input[type="range"]::-ms-fill-lower {
                background: transparent;
                }
                input[type='range']:focus {
                outline: none;
                }
                /*input[type='range']:after{
                position: absolute;
                content: '20 40 60 80';
                padding: 25px 4035px;
                word-spacing: 20px;
                left: 0px;
                top: 0px;
                }*/

                .container:after {
                position: absolute;
                color: #777;
                content: '200 40 60 80';
                padding: 40px;
                word-spacing: 20px;
                left: 0px;
                top: 0px;
                z-index: -1;
                }
                .container {
                padding: 0px;
                position: relative;
                }
            </style>

            <input type="text" id="textRangeInput" value="400" name="<?= self:: META_PRICE ?>">
            <span>€</span>
            <div class="container">
                <input type="range" min="0" max="3000" value="400" step="1" name="a" list="tickmarks" id="rangeInput" onchange="updateTextInput(this.value);">
                    <datalist id="tickmarks">
                        <option value="0 to 3000">0</option>
                        <option>200</option>
                        <option>400</option>
                        <option>600</option>
                        <option>800</option>
                        <option>1000</option>
                        <option>2000</option>
                        <option>3000</option>
                    </datalist>    
            </div>
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

    public static function render_chamber($post) {
         /*
        * HTML for our Custom Content 
        * @return void
        */
        $value = get_post_meta( $post->ID, self::META_CHAMBER, true );
        ?>
            <div>
                <input type="radio" id="oneChamber" name="<?= self::META_CHAMBER ?>" value="1" checked>
                <label for="oneChamber">1</label>
          
                <input type="radio" id="twoChamber" name="<?= self::META_CHAMBER ?>" value="2">
                <label for="twoChamber">2</label>
         
                <input type="radio" id="threeChamber" name="<?= self::META_CHAMBER ?>" value="3">
                <label for="threeChamber">3</label>
       
                <input type="radio" id="forChamber" name="<?= self::META_CHAMBER ?>" value="">
                <label for="forChamber">4</label>
           
                <input type="radio" id="fiveChamber" name="<?= self::META_CHAMBER ?>" value="5">
                <label for="fiveChamber">5</label>
         
                <input type="radio" id="sixChamber" name="<?= self::META_CHAMBER ?>" value="6">
                <label for="sixChamber">6</label>
            </div>
        <?php
     }

    public static function render_bath($post) {
        $value = get_post_meta( $post->ID, self::META_BATH, true );
        ?>
            <div>
                <input type="radio" id="oneBath" name="<?= self::META_BATH ?>" value="1" checked>
                <label for="oneBath">1</label>
          
                <input type="radio" id="twoBath" name="<?= self::META_BATH ?>" value="2">
                <label for="twoBath">2</label>
         
                <input type="radio" id="threeBath" name="<?= self::META_BATH ?>" value="3">
                <label for="threeBath">3</label>
          
                <input type="radio" id="forBath" name="<?= self::META_BATH ?>" value="4">
                <label for="forBath">4</label>
          
                <input type="radio" id="fiveBath" name="<?= self::META_BATH ?>" value="5">
                <label for="fiveBath">5</label>
           
                <input type="radio" id="sixBath" name="<?= self::META_BATH ?>" value="6">
                <label for="sixBath">6</label>
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
        if (array_key_exists (self::META_CHAMBER, $_POST)) {
            update_post_meta(
                $post_id,
                self::META_CHAMBER,
                $_POST[self::META_CHAMBER]
            );
        }
        if (array_key_exists (self::META_BATH, $_POST)) {
            update_post_meta(
                $post_id,
                self::META_BATH,
                $_POST[self::META_BATH]
            );
        }
    }
}


