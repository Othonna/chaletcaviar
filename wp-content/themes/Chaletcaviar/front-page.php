<?php get_header() ?>
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

 <nav class="navbar navbar-expand-lg navbar-light text-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <?php 
                if (function_exists('the_custom_logo'))
                {
                    the_custom_logo();
                } ?>
            <?php wp_nav_menu(['theme_location' => 'header', 
                                        'container' => false,
                                        'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0']) ?> 
             <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo site_url('/') ?>">Accueil</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('/sale') ?>">A vendre</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('/location') ?>">A louer</a>
                    </li>
                </ul>  -->
                </div>
            </div>
        </nav>  

<?php get_footer() ?>


