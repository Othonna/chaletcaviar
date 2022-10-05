<?php   /* Template Name: Sales Template */
        get_header();
        require_once ('class/Navbar.php'); ?>

<div class="container" style="margin-top:150px;">
    <div class="row card-anim">
        <?php 
            $locationpageEvents = new WP_Query(array(
                'post_type' => 'sale'
            ));
            
            while($locationpageEvents->have_posts()) {
                    $locationpageEvents->the_post(); 

                    $price = get_post_meta($post->ID, 'chaletcaviar_price', true); 
                    $place = get_post_meta($post->ID, 'chaletcaviar_place', true);
                    $chamber = get_post_meta($post->ID, 'chaletcaviar_chamber', true); 
                    $bathroom = get_post_meta($post->ID, 'chaletcaviar_bath', true); 
                    $meter = get_post_meta($post->ID, 'chaletcaviar_meter', true); 
                    ?>

            <div class="col-md-3">
                <div class="card-sl">
                    <div class="card-image">
                    <?php the_post_thumbnail('large', ['class' => 'image', 'alt' => '', 'style' => 'height: auto']) ?>
                    </div>

                    <a class="card-action" href="#">A vendre</i></a>
                    <div class="card-heading">
                        <?php the_title() ?>
                    </div>
                    <div class="text-card">
                        <?php the_content() ?>
                    </div>
                    <div class="text-card">
                        <div class="flex-column">
                            <div><?php echo $meter ?> m²</div> 
                            <div><?php echo $chamber ?> Chambres</div>
                            <div><?php echo $bathroom ?> Salles de bain</div>
                            <div>Prix : <span class="fw-bold"><?php echo $price ?> €</span></div>
                        </div>
                    </div>
                    <a href="#" class="button-card">Acheter</a>
                </div>
            </div>
        <?php }
        ?>
    </div>  
</div>

<?php get_footer() ?>


