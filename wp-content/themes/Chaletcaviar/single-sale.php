<?php get_header() ?>
  <div class="container">

      <?php if (have_posts()) : while (have_posts()) : the_post(); 
      $price = get_post_meta($post->ID, 'chaletcaviar_price', true); 
      $meter = get_post_meta($post->ID, 'chaletcaviar_meter', true);
      $chamber = get_post_meta($post->ID, 'chaletcaviar_chamber', true); 
      $bathroom = get_post_meta($post->ID, 'chaletcaviar_bath', true);?>
              <h1><?php the_title() ?></h1> 
              <p>
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="" style="width:100%; height:auto;">
              </p>
              <?php the_content() ?>
              <div>
                  <?php echo $meter ?> m²
                  <?php echo $chamber ?> Chambres
                  <?php echo $bathroom ?> Salles de bain
                  Prix : <?php echo $price ?> €
              </div>
      <?php endwhile; endif; ?>
  </div>
<?php get_footer() ?>