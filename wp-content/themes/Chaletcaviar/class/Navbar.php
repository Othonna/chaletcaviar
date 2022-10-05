<?php get_header(); ?> 
<header class="header">
    <div id="menu-btn" class="fas fa-bars icon-nav"></div>
    <a href="<?php echo site_url('/') ?>" class="logo logo-anim">Chalet & Caviar </a>
        <nav class="navbar">
            <a class="accueil" href="<?php echo site_url('/') ?>">Accueil</a>
            <a class="alouer" href="<?php echo site_url('/locations') ?>">A louer</a>
            <a class="avendre" href="<?php echo site_url('/sales') ?>">A vendre</a>
            <a class="contact" href="<?php echo site_url('/contact') ?>">Contact</a>
        </nav>
    <a href="#book-form" class="btn reserver">Réserver</a>
</header>   