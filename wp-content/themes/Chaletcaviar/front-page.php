<?php get_header() ?>
<div class="container__page">
     <!--  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php if(get_post_meta(get_the_ID(), 'chaletcaviar_sponso', true) === '1'): ?>
                <div class="alert alert-info">Article sponso</div>
              <?php endif ?>
    
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="" style="width:100%; height:auto;">
           
              <?php the_content() ?>
      <?php endwhile; endif; ?> -->
  </div>
<?php get_footer() ?>
