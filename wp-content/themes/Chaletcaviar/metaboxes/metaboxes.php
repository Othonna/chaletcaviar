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
         <input method="post" id="<?= self::META_METER ?>" value="10" type="number" name="<?= self::META_METER ?>">m²</input>
       <?php
    }

    public static function render_chamber($post) {
         /*
        * HTML for our Custom Content 
        * @return void
        */

        $value = get_post_meta( $post->ID, self::META_CHAMBER, true );
        ?>
        
    <style>
        /********************* Chamber CSS ***********************/
        .control-chamber {
            font-family: arial;
            display: inline-block;
            position: relative;
            padding-left: 30px;
            margin-bottom: 5px;
            padding-top: 3px;
            cursor: pointer;
            font-size: 12px;
        }
            .control-chamber input {
                position: absolute;
                z-index: -1;
                opacity: 0;
            }
        .control_indicator_chamber {
            position: absolute;
            top: 2px;
            left: 0;
            height: 20px;
            width: 20px;
            background: #e6e6e6;
            border: 0px solid #000000;
            border-radius: undefinedpx;
        }
        .control-chamber:hover input ~ .control_indicator_chamber,
        .control-chamber input:focus ~ .control_indicator_chamber {
            background: #cccccc;
        }

        .control-chamber input:checked ~ .control_indicator_chamber {
            background: #2aa1c0;
        }
        .control-chamber:hover input:not([disabled]):checked ~ .control_indicator_chamber,
        .control-chamber input:checked:focus ~ .control_indicator_chamber {
            background: #0e6647;
        }
        .control-chamber input:disabled ~ .control_indicator_chamber {
            background: #e6e6e6;
            opacity: 0.6;
            pointer-events: none;
        }
        .control_indicator_chamber:after {
            box-sizing: unset;
            content: '';
            position: absolute;
            display: none;
        }
        .control-chamber input:checked ~ .control_indicator_chamber:after {
            display: block;
        }
        .control-radio-chamber .control_indicator_chamber {
            border-radius: 50%;
        }

        .control-radio-chamber .control_indicator_chamber:after {
            left: 7px;
            top: 7px;
            height: 6px;
            width: 6px;
            border-radius: 50%;
            background: #ffffff;
            transition: background 250ms;
        }
        .control-radio-chamber input:disabled ~ .control_indicator_chamber:after {
            background: #7b7b7b;
        }.control-radio-chamber .control_indicator_chamber::before {
            content: '';
            display: block;
            position: absolute;
            left: 0;
            top: 0;
            width: 4.5rem;
            height: 4.5rem;
            margin-left: -1.3rem;
            margin-top: -1.3rem;
            background: #2aa1c0;
            border-radius: 3rem;
            opacity: 0.6;
            z-index: 99999;
            transform: scale(0);
        }
        @keyframes s-ripple {
            0% {
                opacity: 0;
                transform: scale(0);
            }
            20% {
                transform: scale(1);
            }
            100% {
                opacity: 0.01;
                transform: scale(1);
            }
        }
        @keyframes s-ripple-dup {
        0% {
            transform: scale(0);
            }
        30% {
                transform: scale(1);
            }
            60% {
                transform: scale(1);
            }
            100% {
                opacity: 0;
                transform: scale(1);
            }
        }
        .control-radio-chamber input + .control_indicator_chamber::before {
            animation: s-ripple 250ms ease-out;
        }
        .control-radio-chamber input:checked + .control_indicator_chamber::before {
            animation-name: s-ripple-dup;
        }
        /****************** END Chamber CSS *********************/
    </style>
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
        $value = get_post_meta( $post->ID, self::META_BATH, true );
        ?>
        <style>
            /****************** Bathroom CSS *********************/
            .control {
                font-family: arial;
                display: inline-block;
                position: relative;
                padding-left: 30px;
                margin-bottom: 5px;
                padding-top: 3px;
                cursor: pointer;
                font-size: 12px;
            }
            .control input {
                position: absolute;
                z-index: -1;
                opacity: 0;
            }
            .control_indicator {
                position: absolute;
                top: 2px;
                left: 0;
                height: 20px;
                width: 20px;
                background: #e6e6e6;
                border: 0px solid #000000;
                border-radius: undefinedpx;
            }
            .control:hover input ~ .control_indicator,
            .control input:focus ~ .control_indicator {
                background: #cccccc;
            }

            .control input:checked ~ .control_indicator {
                background: #2aa1c0;
            }
            .control:hover input:not([disabled]):checked ~ .control_indicator,
            .control input:checked:focus ~ .control_indicator {
                background: #0e6647;
            }
            .control input:disabled ~ .control_indicator {
                background: #e6e6e6;
                opacity: 0.6;
                pointer-events: none;
            }
            .control_indicator:after {
                box-sizing: unset;
                content: '';
                position: absolute;
                display: none;
            }
            .control input:checked ~ .control_indicator:after {
                display: block;
            }
            .control-radio .control_indicator {
                border-radius: 50%;
            }

            .control-radio .control_indicator:after {
                left: 7px;
                top: 7px;
                height: 6px;
                width: 6px;
                border-radius: 50%;
                background: #ffffff;
                transition: background 250ms;
            }
            .control-radio input:disabled ~ .control_indicator:after {
                background: #7b7b7b;
            }.control-radio .control_indicator::before {
                content: '';
                display: block;
                position: absolute;
                left: 0;
                top: 0;
                width: 4.5rem;
                height: 4.5rem;
                margin-left: -1.3rem;
                margin-top: -1.3rem;
                background: #2aa1c0;
                border-radius: 3rem;
                opacity: 0.6;
                z-index: 99999;
                transform: scale(0);
            }
            @keyframes s-ripple {
                0% {
                    opacity: 0;
                    transform: scale(0);
                }
                20% {
                    transform: scale(1);
                }
                100% {
                    opacity: 0.01;
                    transform: scale(1);
                }
            }
            @keyframes s-ripple-dup {
            0% {
                transform: scale(0);
                }
            30% {
                    transform: scale(1);
                }
                60% {
                    transform: scale(1);
                }
                100% {
                    opacity: 0;
                    transform: scale(1);
                }
            }
            .control-radio input + .control_indicator::before {
                animation: s-ripple 250ms ease-out;
            }
            .control-radio input:checked + .control_indicator::before {
                animation-name: s-ripple-dup;
            }
            /****************** END Bathroom CSS *********************/
        </style>
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
        $value = get_post_meta( $post->ID, self::META_PLACE, true );
        ?>

<style>
            /****************** Bathroom CSS *********************/
            .control-place {
                font-family: arial;
                display: block;
                position: relative;
                padding-left: 30px;
                margin-bottom: 5px;
                padding-top: 3px;
                cursor: pointer;
                font-size: 12px;
            }
            .control-place input {
                position: absolute;
                z-index: -1;
                opacity: 0;
            }
            .control_indicator_place {
                position: absolute;
                top: 2px;
                left: 0;
                height: 20px;
                width: 20px;
                background: #e6e6e6;
                border: 0px solid #000000;
                border-radius: undefinedpx;
            }
            .control-place:hover input ~ .ccontrol_indicator_place,
            .control-place input:focus ~ .control_indicator_place {
                background: #cccccc;
            }

            .control-place input:checked ~ .control_indicator_place {
                background: #2aa1c0;
            }
            .control-place:hover input:not([disabled]):checked ~ .control_indicator_place,
            .control-place input:checked:focus ~ .control_indicator_place {
                background: #0e6647;
            }
            .control-place input:disabled ~ .control_indicator_place {
                background: #e6e6e6;
                opacity: 0.6;
                pointer-events: none;
            }
            .control_indicator_place:after {
                box-sizing: unset;
                content: '';
                position: absolute;
                display: none;
            }
            .control-place input:checked ~ .control_indicator_place:after {
                display: block;
            }
            .control-radio-place .control_indicator_place {
                border-radius: 50%;
            }

            .control-radio-place .control_indicator_place:after {
                left: 7px;
                top: 7px;
                height: 6px;
                width: 6px;
                border-radius: 50%;
                background: #ffffff;
                transition: background 250ms;
            }
            .control-radio-place input:disabled ~ .control_indicator_place:after {
                background: #7b7b7b;
            }.control-radio-place .control_indicator_place::before {
                content: '';
                display: block;
                position: absolute;
                left: 0;
                top: 0;
                width: 4.5rem;
                height: 4.5rem;
                margin-left: -1.3rem;
                margin-top: -1.3rem;
                background: #2aa1c0;
                border-radius: 3rem;
                opacity: 0.6;
                z-index: 99999;
                transform: scale(0);
            }
            @keyframes s-ripple {
                0% {
                    opacity: 0;
                    transform: scale(0);
                }
                20% {
                    transform: scale(1);
                }
                100% {
                    opacity: 0.01;
                    transform: scale(1);
                }
            }
            @keyframes s-ripple-dup {
            0% {
                transform: scale(0);
                }
            30% {
                    transform: scale(1);
                }
                60% {
                    transform: scale(1);
                }
                100% {
                    opacity: 0;
                    transform: scale(1);
                }
            }
            .control-radio-place input + .control_indicator_place::before {
                animation: s-ripple 250ms ease-out;
            }
            .control-radio-place input:checked + .control_indicator_place::before {
                animation-name: s-ripple-dup;
            }
            /****************** END Bathroom CSS *********************/
        </style>

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


