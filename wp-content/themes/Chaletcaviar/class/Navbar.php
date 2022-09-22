<?php get_header(); ?> 
<header class="header">
    <div id="menu-btn" class="fas fa-bars"></div>
    <a href="<?php echo site_url('/') ?>" class="logo"> <i class="fa-solid fa-house login-icon"></i>Chalet Caviar</a>
        <nav class="navbar">
            <a href="<?php echo site_url('/') ?>">Accueil</a>
            <a href="<?php echo site_url('/locations') ?>">A louer</a>
            <a href="<?php echo site_url('/sales') ?>">A vendre</a>
            <a href="<?php echo site_url('/contact') ?>">Contact</a>
        </nav>
    <a href="#book-form" class="btn">Réserver</a>
</header>  
