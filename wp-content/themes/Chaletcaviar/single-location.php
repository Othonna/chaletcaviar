<?php get_header() ?>
  <div class="container">

      <?php if (have_posts()) : while (have_posts()) : the_post(); 
      $price = get_post_meta($post->ID, 'chaletcaviar_price', true); 
      $place = get_post_meta($post->ID, 'chaletcaviar_place', true);
      $chamber = get_post_meta($post->ID, 'chaletcaviar_chamber', true); 
      $bathroom = get_post_meta($post->ID, 'chaletcaviar_bath', true);  
      ?>
              <h1><?php the_title() ?></h1> 
              <p>
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="" style="width:100%; height:auto;">
              </p>
              <?php the_content() ?>
              <div>
                 <?php echo $place ?> places
                 <?php echo $chamber ?> Chambres
                 <?php echo $bathroom ?> Salles de bain
                 Prix de la semaine : <span class="font-weight-bold"><?php echo $price ?> €</span>
             </div>
              
      <?php endwhile; endif; ?>
  </div>
<?php get_footer() ?>