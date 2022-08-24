<?php 
/* Template Name: Sales Template */
get_header() ?>

<div class="container">
    <div class="row">
        <?php 
            $salepageEvents = new WP_Query(array(
                'post_type' => 'sale'
            ));
            //var_dump($salepageEvents);
            while($salepageEvents->have_posts()) {
                $salepageEvents->the_post(); 
                $price = get_post_meta($post->ID, 'chaletcaviar_price', true); 
                $meter = get_post_meta($post->ID, 'chaletcaviar_meter', true);
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
                       <div><?php echo $meter ?> m²</div> 
                        <div><?php echo $chamber ?> Chambres</div>
                        <div><?php echo $bathroom ?> Salles de bain</div>
                        <div>Prix : <span class="fw-bold"><?php echo $price ?> €</span></div>
                    </div>
                    <a href="<?php the_permalink() ?>" class="card-link">Voir plus</a>
                </div>
            </div>
        </div>
        <?php }
        ?>
    </div>  
</div>

<?php get_footer() ?>


