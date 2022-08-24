<?php   /* Template Name: Locations Template */
        get_header(); 
        require_once ('class/Navbar.php');?>

<div class="container">
    <div class="row">
        <?php 
            $locationpageEvents = new WP_Query(array(
                'post_type' => 'location'
            ));
            //dump($locationpageEvents);
            
            while($locationpageEvents->have_posts()) {
                    $locationpageEvents->the_post(); 

                    $price = get_post_meta($post->ID, 'chaletcaviar_price', true); 
                    $place = get_post_meta($post->ID, 'chaletcaviar_place', true);
                    $chamber = get_post_meta($post->ID, 'chaletcaviar_chamber', true); 
                    $bathroom = get_post_meta($post->ID, 'chaletcaviar_bath', true);  
                    ?>

                <div class="col-sm-4">
                    <?php //echo get_the_ID()?>
                    <div class="card" style="width: 21rem;">
                    <?php the_post_thumbnail('medium', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height: auto']) ?>
                        <img src="" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title() ?></h5>
                            <p class="card-text"><?php the_content() ?></p>
                       
                        <div class="flex-column">
                            <div><?php echo $place ?> places</div>
                            <div><?php echo $chamber ?> Chambres</div>
                            <div><?php echo $bathroom ?> Salles de bain</div>
                            <div>Prix de la semaine : <span class="fw-bold"><?php echo $price ?> €</span></div>
                        </div>
                
                          
                            
                            
                            
                            <a href="<?php echo get_permalink() ?>" class="card-link">Voir plus</a>
                        </div>
                    </div>
                </div>
                <?php }
        ?>
    </div>  
</div>
<?php get_footer() ?>