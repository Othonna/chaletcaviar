<nav>
    <div class="navbar">
      <div class="container nav-container">
          <input class="checkbox" type="checkbox" name="" id="" />
          <div class="hamburger-lines">
            <span class="line line1"></span>
            <span class="line line2"></span>
            <span class="line line3"></span>
          </div> 
          
          <div class="title">
            <a class="wrapped-text-nav" aria-current="page" href="<?php echo site_url('/home') ?>">CHALET CAVIAR</a>
          </div>
     
        <div class="menu-items">
        <?php wp_nav_menu(['theme_location' => 'header', 
                              'container' => false,
                              'menu_class' => 'navbar-nav me-auto']) ?> 
        </div>
      </div>
    </div>
</nav>