<?php get_header(); ?>

<header class="header">
    <div id="menu-btn" class="fas fa-bars"></div>
    <a data-aos="zoom-in-left" data-aos-delay="150" href="<?php echo site_url('/') ?>" class="logo"> <i class="fa-solid fa-house"></i>Chalet Caviar </a>
        <nav class="navbar">
            <a data-aos="zoom-in-left" data-aos-delay="300" href="<?php echo site_url('/') ?>">Accueil</a>
            <a data-aos="zoom-in-left" data-aos-delay="450" href="<?php echo site_url('/locations') ?>">A louer</a>
            <a data-aos="zoom-in-left" data-aos-delay="600" href="<?php echo site_url('/sales') ?>">A vendre</a>
            <a data-aos="zoom-in-left" data-aos-delay="750" href="<?php echo site_url('/contact') ?>">Contact</a>
        </nav>
    <a data-aos="zoom-in-left" data-aos-delay="1300" href="#book-form" class="btn">Réserver</a>
</header>         
<!-- header section ends -->

<!-- home section starts  -->
<section class="home" id="home">
    <div class="content">
        <span data-aos="fade-up" data-aos-delay="150">Bienvenue</span>
        <h3 data-aos="fade-up" data-aos-delay="300">Chalets et Caviar</h3>
        <p data-aos="fade-up" data-aos-delay="450">Des chalets à l'architecture et aux finitions de très haute gamme, toujours dans le respect du cadre environnemental.</p>
        <a data-aos="fade-up" data-aos-delay="600" href="#" class="btn">Reserver</a>
    </div>
</section>
<!-- home section ends -->

<!-- booking form section starts  -->
<section class="book-form" id="book-form">
    <form action="">
        <div data-aos="zoom-in" data-aos-delay="150" class="inputBox">
            <span>où aller ?</span>
            <input type="text" placeholder="nom du lieu" value="">
        </div>
        <div data-aos="zoom-in" data-aos-delay="300" class="inputBox">
            <span>quand ?</span>
            <input type="date" value="">
        </div>
        <div data-aos="zoom-in" data-aos-delay="450" class="inputBox">
            <span>combien ?</span>
            <input type="number" placeholder="nombre de voyageurs" value="">
        </div>
        <input data-aos="zoom-in" data-aos-delay="600" type="submit" value="trouver maintenant" class="btn">
    </form>
</section>
<!-- booking form section ends -->

<!-- about section starts  -->
<section class="about" id="about">
    <div class="video-container" data-aos="fade-right" data-aos-delay="300">
        <video src="/wp-content/uploads/2022/09/luxe.mp4" muted autoplay loop class="video"></video>
    </div>
    <div class="content" data-aos="fade-left" data-aos-delay="600">
        <span>Pourquoi nous choisir ?</span>
        <h3>La majesté de la nature vous attend</h3>
        <p>Vous aimez la montagne, vous êtes passionnés par les sports d'hiver ou vous rêvez d'un cadre merveilleux pour vos vacances d'été?
            En couple, en famille ou entre amis, Chalet & Caviar vous offre un vaste panel d'activités à partager avec vos proches.</p>
    </div>
</section>
<!-- about section ends -->

<!-- destination section starts  -->
<section class="destination" id="destination">
    <div class="heading">
        <span>nos chalets</span>
        <h1>faire de notre métier votre destination de rêve</h1>
    </div>
    <div class="box-container">
    <?php 
            $locationpageEvents = new WP_Query(array(
                'post_type' => 'location'
            ));     
            while($locationpageEvents->have_posts()) {
                $locationpageEvents->the_post();  
                ?>
        <div class="box" data-aos="fade-up" data-aos-delay="150">
            <div class="content">
                <h3><?php the_title() ?></h3>
                <p class="card-text"><?php the_content() ?></p>
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
    <div class="box-container">
        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <i class="fas fa-hiking"></i>
            <h3>Randonnées</h3>
            <p>Le virage vers un tourisme plus durable est en cours et des hébergements insolites de tout type sont maintenant disponibles dans la plupart des régions.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <i class="fas fa-utensils"></i>
            <h3>Restauration</h3>
            <p>Les meilleures adresses de restaurants à prix compétitifs</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <i class="fas fa-wallet"></i>
            <h3>Prix abordable</h3>
            <p>Grâce à notre agence et son moteur de recherche, beneficié des meilleurs tarifs</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="600">
            <i class="fas fa-headset"></i>
            <h3>24/7 service</h3>
            <p>Une équipe d'experts à votre écoute et un catalogue de produits grand luxe</p>
        </div>
    </div>
</section>
<!-- services section ends -->

<!-- gallery section starts  -->
<section class="gallery" id="gallery">
    <div class="heading">
        <span>Nos destinations</span>
        <h1>une envie, des souvenirs</h1>
    </div>
    <div class="box-container">
        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <img src="/wp-content/uploads/2022/09/iceland-chalet-768x512.jpg" alt="">
            <span>lieu de voyage</span>
            <h3>Iceland</h3>
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <img src="/wp-content/uploads/2022/09/canada-chalet-768x512.jpg" alt="">
            <span>lieu de voyage</span>
            <h3>Montréal - Canada</h3>
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <img src="/wp-content/uploads/2022/09/chamonix-768x511.jpg" alt="">
            <span>lieu de voyage</span>
            <h3>Chamonix - France</h3>
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <img src="/wp-content/uploads/2022/09/vosges-768x576.jpg" alt="">
            <span>lieu de voyage</span>
            <h3>Vosges - France</h3>
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <img src="/wp-content/uploads/2022/09/ireland-768x512.jpg" alt="">
            <span>lieu de voyage</span>
            <h3>Zermatt - Suisse</h3>
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <img src="/wp-content/uploads/2022/09/canada-chalet-768x512.jpg" alt="">
            <span>lieu de voyage</span>
            <h3>Ireland</h3>
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <img src="/wp-content/uploads/2022/09/tyrol-768x576.jpg" alt="">
            <span>lieu de voyage</span>
            <h3>Tyrol - Autriche</h3>
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <img src="/wp-content/uploads/2022/09/suede-768x511.jpg" alt="">
            <span>lieu de voyage</span>
            <h3>Suede</h3>
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <img src="/wp-content/uploads/2022/09/norvege-768x484.jpg" alt="">
            <span>lieu de voyage</span>
            <h3>Norvège</h3>
        </div>
    </div>
</section>
<!-- gallery section ends -->

<!-- review section starts  -->
<section class="review">
    <div class="content" data-aos="fade-right" data-aos-delay="300">
        <span>testimonials</span>
        <h3>bonnes nouvelles de nos clients</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda laudantium corporis fugiat quae unde perspiciatis similique ab modi enim consequatur aperiam cumque distinctio facilis sit, debitis possimus asperiores non harum.</p>
    </div>
    <div class="box-container" data-aos="fade-left" data-aos-delay="600">
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
        <div class="box">
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
    <div class="heading">
        <span>Posts</span>
        <h1>Nos nouvelles annonces</h1>
    </div>
    <div class="box-container">
        <div class="box" data-aos="fade-up" data-aos-delay="150">
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
        <div class="box" data-aos="fade-up" data-aos-delay="300">
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
        <div class="box" data-aos="fade-up" data-aos-delay="450">
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
<div class="banner">
    <div class="content" data-aos="zoom-in-up" data-aos-delay="300">
        <span>commencez votre aventure</span>
        <h3>rejoignez nous dès maintenant</h3>
        <a href="#book-form" class="btn">réserver</a>
    </div>
</div>
<!-- banner section ends -->

<!-- footer section starts  -->
<section class="footer">
    <div class="box-container">
        <div class="box" data-aos="fade-up" data-aos-delay="150">
            <a href="#" class="logo"> <i class="fa-solid fa-house"></i>Chalet & Caviar</a>
            <p>Agence de chalets de luxe</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up" data-aos-delay="450">
            <h3>contact info</h3>
            <p> <i class="fas fa-map"></i> 10 grande Rue 73120 Courchevel, France </p>
            <p> <i class="fas fa-phone"></i> 04 79 XX XX XX </p>
            <p> <i class="fas fa-envelope"></i> @chaletcaviar.com </p>
            <p> <i class="fas fa-clock"></i> 7:00am - 10:00pm </p>
        </div>
        <div class="box" data-aos="fade-up" data-aos-delay="600">
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


