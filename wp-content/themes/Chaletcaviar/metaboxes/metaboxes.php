<?php
    class MetaBoxes {

    const META_PRICE = 'chaletcaviar_price';
    const META_METER = 'chaletcaviar_meter';
    const META_PLACE = 'chaletcaviar_place';
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
        $screens = array('location');
        foreach ( $screens as $screen ) {
            add_meta_box(
                self::META_PLACE,            
                'Nombre de places',           
                [self::class, 'render_place'], 
                $screen,                       
                'side'                          
            );
        }

        $screens = array('sale');
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
        get_post_meta( $post->ID, self::META_PRICE, true );
        ?>
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
        get_post_meta( $post->ID, self::META_METER, true );
        ?>
         <input method="post" id="<?= self::META_METER ?>" value="10" type="number" name="<?= self::META_METER ?>">m²</input>
       <?php
    }

    public static function render_chamber($post) {
         /*
        * HTML for our Custom Content 
        * @return void
        */
        get_post_meta( $post->ID, self::META_CHAMBER, true );
        ?>
        <div class="control-group-chamber">
            <label class="control-chamber control-radio-chamber" for="oneChamber">
                1
                    <input type="radio"  id="oneChamber" name="<?= self::META_CHAMBER ?>" value="1" checked/>
                <div class="control_indicator_chamber"></div>
            </label>
            <label class="control-chamber control-radio-chamber" for="twoChamber">
                2
                    <input type="radio"  id="twoChamber" name="<?= self::META_CHAMBER ?>" value="2"/>
                <div class="control_indicator_chamber"></div>
            </label>
            <label class="control-chamber control-radio-chamber" for="threeChamber">
                3
                    <input type="radio"  id="threeChamber" name="<?= self::META_CHAMBER ?>" value="3"/>
                <div class="control_indicator_chamber"></div>
            </label>
            <label class="control-chamber control-radio-chamber" for="fourChamber">
                4
                    <input type="radio"  id="fourChamber" name="<?= self::META_CHAMBER ?>" value="4"/>
                <div class="control_indicator_chamber"></div>
            </label>
        </div>
            <label class="control-chamber control-radio-chamber" for="fiveChamber">
                5
                    <input type="radio"  id="fiveChamber" name="<?= self::META_CHAMBER ?>" value="5"/>
                <div class="control_indicator_chamber"></div>
            </label>
            <label class="control-chamber control-radio-chamber" for="sixChamber">
                6
                    <input type="radio"  id="sixChamber" name="<?= self::META_CHAMBER ?>" value="6"/>
                <div class="control_indicator_chamber"></div>
            </label>
            <label class="control-chamber control-radio-chamber" for="sevenChamber">
                7
                    <input type="radio"  id="sevenChamber" name="<?= self::META_CHAMBER ?>" value="7"/>
                <div class="control_indicator_chamber"></div>
            </label>
            <label class="control-chamber control-radio-chamber" for="heightChamber">
                8
                    <input type="radio"  id="heightChamber" name="<?= self::META_CHAMBER ?>" value="8"/>
                <div class="control_indicator_chamber"></div>
            </label>
        <?php
     }

    public static function render_bath($post) {
        get_post_meta( $post->ID, self::META_BATH, true );
        ?>
        <div class="control-group">
            <label class="control control-radio" for="oneBath">
                1
                    <input type="radio"  id="oneBath" name="<?= self::META_BATH ?>" value="1" checked/>
                <div class="control_indicator"></div>
            </label>
            <label class="control control-radio" for="twoBath">
                2
                    <input type="radio" id="twoBath" name="<?= self::META_BATH ?>" value="2" />
                <div class="control_indicator"></div>
            </label>
            <label class="control control-radio" for="threeBath">
                3
                    <input type="radio" id="threeBath" name="<?= self::META_BATH ?>" value="3" />
                <div class="control_indicator"></div>
            </label>
        </div>
            <label class="control control-radio" for="fourBath">
                4
                    <input type="radio"  id="fourBath" name="<?= self::META_BATH ?>" value="4"/>
                <div class="control_indicator"></div>
            </label>
            <label class="control control-radio" for="fiveBath">
                5
                    <input type="radio" id="fiveBath" name="<?= self::META_BATH ?>" value="5" />
                <div class="control_indicator"></div>
            </label>
            <label class="control control-radio" for="sixBath">
                6
                    <input type="radio" id="sixBath" name="<?= self::META_BATH ?>" value="6" />
                <div class="control_indicator"></div>
            </label>
        <?php
    }

    public static function render_place($post) {
        get_post_meta( $post->ID, self::META_PLACE, true );
        ?>
        <div class="control-group">
            <label class="control-place control-radio-place" for="twoFour">2 à 4
                    <input type="radio"  id="twoFour" name="<?= self::META_PLACE ?>" value="2 à 4" checked/>
                <div class="control_indicator_place"></div>
            </label>
            <label class="control-place control-radio-place" for="threeFour">3 à 4
                    <input type="radio"  id="threeFour" name="<?= self::META_PLACE ?>" value="3 à 4"/>
                <div class="control_indicator_place"></div>
            </label>
            <label class="control-place control-radio-place" for="threeSix">3 à 6
                    <input type="radio"  id="threeSix" name="<?= self::META_PLACE ?>" value="3 à 6"/>
                <div class="control_indicator_place"></div>
            </label>
            <label class="control-place control-radio-place" for="sixTwelve">6 à 12
                    <input type="radio"  id="sixTwelve" name="<?= self::META_PLACE ?>" value="6 à 12"/>
                <div class="control_indicator_place"></div>
            </label>
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
        if (array_key_exists (self::META_PLACE, $_POST)) {
            update_post_meta(
                $post_id,
                self::META_PLACE,
                $_POST[self::META_PLACE]
            );
        }
    }
}


