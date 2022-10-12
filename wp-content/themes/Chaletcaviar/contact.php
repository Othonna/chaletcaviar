<?php get_header(); /* Template Name: Contact Page */ 
        require_once ('class/Navbar.php')?>
          <form class="form-contact-container">
                 <h3 class="title-form-contact text-gray-color">Contactez-nous</h3>
                 <?php echo do_shortcode( '[contact-form-7 id="630" title="Contact form 1"]' ); ?>
                
         </form>
         
<?php get_footer(); 
?>

