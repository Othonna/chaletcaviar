<?php get_header() ?>
<section class="">
  <div class="container py-5">
  <?php if (have_posts()) : while (have_posts()) : the_post(); 
      $price = get_post_meta($post->ID, 'chaletcaviar_price', true); 
      $meter = get_post_meta($post->ID, 'chaletcaviar_meter', true);
      $chamber = get_post_meta($post->ID, 'chaletcaviar_chamber', true); 
      $bathroom = get_post_meta($post->ID, 'chaletcaviar_bath', true);?>
      
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6 col-xl-4">
        <div class="card" style="border-radius: 15px;">
          <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
            data-mdb-ripple-color="light">
            <img src="<?php the_post_thumbnail_url(); ?>"
              style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-fluid"
              alt="" />
          </div>
          <div class="card-body pb-0">
            <div class="d-flex justify-content-between">
              <div>
                <p><a href="#!" class="text-dark"><?php the_title() ?></a></p>
                <?php the_content() ?>
              </div>
              <div>
                <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p class="small text-muted">Rated 4.0/5</p>
              </div>
            </div>
          </div>
          <hr class="my-0" />
          <div class="card-body pb-0">
            <div class="d-flex justify-content-between">
              <p class="text-dark"> Prix :</p>
              <p class="text-dark"><?php echo $price ?> €</p>
            </div>
            <p class="small text-muted"><?php echo $meter ?> m²</p>
            <p class="small text-muted"><?php echo $chamber ?> Chambres</p>
            <p class="small text-muted"><?php echo $bathroom ?> Salles de bain</p>
          </div>
          <hr class="my-0" />
          <div class="card-body">
            <div class="text-center pb-2 mb-1">
              <button type="button" class="btn btn-primary">Acheter maintenant</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; endif; ?>
      </div>
</section>
<?php get_footer() ?>