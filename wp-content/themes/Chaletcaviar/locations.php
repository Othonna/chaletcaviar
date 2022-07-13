<?php get_header() /* Template Name: Locations Template */?>
<div class="container">
    <div class="row">
        <?php 
            $locationpageEvents = new WP_Query(array(
                'post_type' => 'location'
            ));
            var_dump($locationpageEvents);
            while($locationpageEvents->have_posts()) {
                $locationpageEvents->the_post(); ?>

        <div class="col-sm-4">
            <div class="card" style="width: 21rem;">
            <?php the_post_thumbnail('medium', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height: auto']) ?>
                <img src="" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><?php the_title() ?></h5>
                    <p class="card-text"><?php the_content() ?></p>
                    <a href="<?php the_permalink() ?>" class="card-link">Voir plus</a>
                </div>
            </div>
        </div>
        <?php }
        ?>
    </div>  
</div>
<?php get_footer() ?>