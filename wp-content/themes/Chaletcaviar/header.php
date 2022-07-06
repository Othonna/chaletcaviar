<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="<?php echo site_url('/') ?>"><?php bloginfo('name') ?></a>
          <?php wp_nav_menu(['theme_location' => 'header', 
                                    'container' => false,
                                    'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0']) ?> 
         <!--   <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>
   
        