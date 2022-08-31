<?php get_header(); ?>
<div class="container-intro">
    <div class="overlay">
        <p class="screen">CHALETCAVIAR</p>
        <div class="intro">
                <button class="myBtn" onclick="fadeOut()">ENTRER</button>
        </div>
    </div>

    <div class="overlay-2"></div>

    <div class="content">
        <h1>Landing Page</h1>
        <p class="data">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi eaque blanditiis culpa, voluptate reprehenderit sapiente quibusdam odio eum beatae autem quaerat tempora et vitae sint, porro assumenda distinctio eos? Nesciunt!</p>
    </div>
</div>
    <nav>
      <div class="navbar">
        <div class="container nav-container">
            <input class="checkbox" type="checkbox" name="" id="" />
            <div class="hamburger-lines">
              <span class="line line1"></span>
              <span class="line line2"></span>
              <span class="line line3"></span>
            </div>  
          <div class="logo">
          <?php 
            if (function_exists('the_custom_logo'))
            {
                the_custom_logo();
            } ?>
          </div>
          <div class="menu-items">
          <?php wp_nav_menu(['theme_location' => 'header', 
                                'container' => false,
                                'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0']) ?> 
     <!-- < class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo site_url('/') ?>">Accueil</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('/sale') ?>">A vendre</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('/location') ?>">A louer</a>
            </li>
        <  -->
          </div>
        </div>
      </div>
    </nav>




      

<?php get_footer() ?>


