<?php get_header(); 
/* Template Name: Home Template */
?>

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
<!-- header section ends -->

<!-- home section starts  -->
<section class="home" id="home">
    <div class="content">
        <span class="bienvenue">Bienvenue</span>
        <h3 class="cc-title">Chalets et Caviar</h3>
        <p class="text-home-section">Des chalets à l'architecture et aux finitions de très haute gamme, toujours dans le respect du cadre environnemental.</p>
        <a href="#" class="btn btn-reserver">Reserver</a>
    </div>
</section>
<!-- home section ends -->

<!-- booking form section starts  -->
<section class="book-form" id="book-form">
    <form action="">
        <div class="inputBox input-where">
            <span>où aller ?</span>
            <input type="text" placeholder="nom du lieu" value="">
        </div>
        <div class="inputBox input-when">
            <span>quand ?</span>
            <input type="date" value="">
        </div>
        <div class="inputBox input-how">
            <span>combien ?</span>
            <input type="number" placeholder="nombre de voyageurs" value="">
        </div>
        <input type="submit" value="trouver maintenant" class="btn input-btn">
    </form>
</section>
<!-- booking form section ends -->

<!-- about section starts  -->
<section class="about" id="about">
    <div class="video-container">
        <video src="/wp-content/uploads/2022/10/luxe.mp4" muted autoplay loop class="video"></video>
    </div>
    <div class="content content-text-video">
        <span>Pourquoi nous choisir ?</span>
        <h3>La majesté de la nature vous attend</h3>
        <p>Vous aimez la montagne, vous êtes passionnés par les sports d'hiver ou vous rêvez d'un cadre merveilleux pour vos vacances d'été?
            En couple, en famille ou entre amis, Chalet & Caviar vous offre un vaste panel d'activités à partager avec vos proches.</p>
    </div>
</section>
<!-- about section ends -->

<!-- destination section starts  -->
<section class="destination" id="destination">
    <div class="heading title-last-post-anim">
        <span>nos chalets</span>
        <h1>faire de notre métier votre destination de rêve</h1>
    </div>
    <div class="box-container box-container-anim">
    <?php 
            $locationpageEvents = new WP_Query(array(
                'post_type' => 'location'
            ));     
            while($locationpageEvents->have_posts()) { 
                $locationpageEvents->the_post();  
                $price = get_post_meta($post->ID, 'chaletcaviar_price', true);
                $chamber = get_post_meta($post->ID, 'chaletcaviar_chamber', true); 
                $bathroom = get_post_meta($post->ID, 'chaletcaviar_bath', true); 
                ?>
        <div class="box">
            <div class="image">
                <?php the_post_thumbnail('medium', ['class' => 'image', 'alt' => '', 'style' => 'height: auto']) ?>
            </div>
            <a class="card-action " href="#"><?php echo $price ?> €</a>
            <div class="content">
                <div class="card-front-title-contain">
                    <h3 class='card-front-title'><?php the_title() ?></h3>
                </div>
               
                <div class='text-card-home flex-column'>
                    <div><?php echo $chamber ?> Chambres</div>
                    <div><?php echo $bathroom ?> Salles de bain</div>
                </div>
                <a href="<?php echo get_permalink() ?>">Voir plus<i class="fas fa-angle-right"></i></a>
            </div>
        </div>
            <?php }
        ?>
    </div>

</section>

<!-- destination section ends -->

<!-- services section starts  -->

<section class="services" id="services">
    <div class="heading">
        <span>nos services</span>
        <h1>d'innombrables expériences</h1>
    </div>
    <div class="box-container box-service-anim">
        <div class="box">
            <i class="fas fa-hiking"></i>
            <h3>Randonnées</h3>
            <p>Le virage vers un tourisme plus durable est en cours et des hébergements insolites de tout type sont maintenant disponibles dans la plupart des régions.</p>
        </div>

        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>Restauration</h3>
            <p>Les meilleures adresses de restaurants à prix compétitifs</p>
        </div>

        <div class="box">
            <i class="fas fa-wallet"></i>
            <h3>Prix abordable</h3>
            <p>Grâce à notre agence et son moteur de recherche, beneficié des meilleurs tarifs</p>
        </div>

        <div class="box">
            <i class="fas fa-headset"></i>
            <h3>24/7 service</h3>
            <p>Une équipe d'experts à votre écoute et un catalogue de produits grand luxe</p>
        </div>
    </div>
</section>
<!-- services section ends -->

<!-- gallery section starts  -->
<section class="gallery" id="gallery">
    <div class="heading title-destination-anim">
        <span>Nos destinations</span>
        <h1>une envie, des souvenirs</h1>
    </div>
    <div class="box-container box-destination-anim">
        <div class="box">
            <img src="/wp-content/uploads/2022/09/iceland-chalet-768x512.jpg" alt="">
            <span>lieu de voyage</span>
            <h3>Iceland</h3>
        </div>
        <div class="box">
            <img src="/wp-content/uploads/2022/09/canada-chalet-768x512.jpg" alt="">
            <span>lieu de voyage</span>
            <h3>Montréal - Canada</h3>
        </div>
        <div class="box">
            <img src="/wp-content/uploads/2022/09/chamonix-768x511.jpg" alt="">
            <span>lieu de voyage</span>
            <h3>Chamonix - France</h3>
        </div>
        <div class="box">
            <img src="/wp-content/uploads/2022/09/vosges-768x576.jpg" alt="">
            <span>lieu de voyage</span>
            <h3>Vosges - France</h3>
        </div>
        <div class="box">
            <img src="/wp-content/uploads/2022/09/ireland-768x512.jpg" alt="">
            <span>lieu de voyage</span>
            <h3>Zermatt - Suisse</h3>
        </div>
        <div class="box">
            <img src="/wp-content/uploads/2022/09/canada-chalet-768x512.jpg" alt="">
            <span>lieu de voyage</span>
            <h3>Ireland</h3>
        </div>
        <div class="box">
            <img src="/wp-content/uploads/2022/09/tyrol-768x576.jpg" alt="">
            <span>lieu de voyage</span>
            <h3>Tyrol - Autriche</h3>
        </div>
        <div class="box  box-img-start-anim">
            <img src="/wp-content/uploads/2022/09/suede-768x511.jpg" alt="">
            <span>lieu de voyage</span>
            <h3>Suede</h3>
        </div>
        <div class="box star-anim-annonce">
            <img src="/wp-content/uploads/2022/09/norvege-768x484.jpg" alt="">
            <span>lieu de voyage</span>
            <h3>Norvège</h3>
        </div>
    </div>
</section>
<!-- gallery section ends -->

<!-- review section starts  -->
<section class="review">
    <div class="content testimonial-anim">
        <span>testimonials</span>
        <h3>bonnes nouvelles de nos clients</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda laudantium corporis fugiat quae unde perspiciatis similique ab modi enim consequatur aperiam cumque distinctio facilis sit, debitis possimus asperiores non harum.</p>
    </div>
    <div class="box-container comment-box-anim">
        <div class="box">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, ratione.</p>
            <div class="user">
                <img src="/wp-content/uploads/2022/09/pic-1-150x150.png" alt="">
                <div class="info">
                    <h3>john deo</h3>
                    <span>designer</span>
                </div>
            </div>
        </div>
        <div class="box">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, ratione.</p>
            <div class="user">
                <img src="/wp-content/uploads/2022/09/pic-2-150x150.png" alt="">
                <div class="info">
                    <h3>john deo</h3>
                    <span>designer</span>
                </div>
            </div>
        </div>
        <div class="box">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, ratione.</p>
            <div class="user">
                <img src="/wp-content/uploads/2022/09/pic-3-150x150.png" alt="">
                <div class="info">
                    <h3>john deo</h3>
                    <span>designer</span>
                </div>
            </div>
        </div>
        <div class="box start-pre-footer">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, ratione.</p>
            <div class="user">
                <img src="/wp-content/uploads/2022/09/pic-4-150x150.png" alt="">
                <div class="info">
                    <h3>john deo</h3>
                    <span>designer</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- review section ends -->

<!-- blogs section starts  -->
<section class="blogs" id="blogs">
    <div class="heading title-annonce-anim">
        <span>Posts</span>
        <h1>Nos nouvelles annonces</h1>
    </div>
    <div class="box-container annonce-box-anim">
        <div class="box">
            <div class="image">
                <img src="/wp-content/uploads/2022/07/Chalet-9-768x512.jpeg" alt="">
            </div>
            <div class="content">
                <a href="#" class="link">Le lac</a>
                <p>Petit chalet lumineux, situé au bord du lac.</p>
                <div class="icon">
                    <a href="#"><i class="fas fa-clock"></i> 10 Septembre, 2022</a>
                    <a href="#"><i class="fas fa-user"></i> by admin</a>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="/wp-content/uploads/2022/07/Chalet-8-768x512.jpeg" alt="">
            </div>
            <div class="content">
                <a href="#" class="link">Le familial</a>
                <p>Grand chalet lumineux, idéal pour les familles nombreuses.</p>
                <div class="icon">
                    <a href="#"><i class="fas fa-clock"></i> 10 Septembre, 2022</a>
                    <a href="#"><i class="fas fa-user"></i> by admin</a>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="/wp-content/uploads/2022/07/Chalet-7-768x512.jpeg" alt="">
            </div>
            <div class="content">
                <a href="#" class="link">Le traditionnel</a>
                <p>Très grand chalet. Grandes baies vitrées.</p>
                <div class="icon">
                    <a href="#"><i class="fas fa-clock"></i> 10 Septembre, 2022</a>
                    <a href="#"><i class="fas fa-user"></i> by admin</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blogs section ends -->

<!-- banner section starts  -->
<div class="banner anim-end-banner">
    <div class="content">
        <span>commencez votre aventure</span>
        <h3>rejoignez nous dès maintenant</h3>
        <a href="#book-form" class="btn">réserver</a>
    </div>
</div>
<!-- banner section ends -->

<!-- footer section starts  -->
<section class="footer">
    <div class="box-container">
        <div class="box left-anim-footer">
            <a href="#" class="logo"></i>Chalet & Caviar</a>
            <p>Agence de chalets de luxe</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box left-anim-footer">
            <h3>contact info</h3>
            <p> <i class="fas fa-map"></i> 10 grande Rue 73120 Courchevel, France </p>
            <p> <i class="fas fa-phone"></i> 04 79 XX XX XX </p>
            <p> <i class="fas fa-envelope"></i> @chaletcaviar.com </p>
            <p> <i class="fas fa-clock"></i> 7:00am - 10:00pm </p>
        </div>
        <div class="box right-anim-footer">
            <h3>newsletter</h3>
            <p>Abonnez-vous</p>
            <form action="">
                <input type="email" name="" placeholder="entrer votre email" class="email" id="">
                <input type="submit" value="souscrire" class="btn">
            </form>
        </div>
    </div>
</section>
<!-- footer section ends -->
   
<?php get_footer() ?>


