<?php include('includes/header.php'); ?>

<section id="slider-home">
    <div class="my-carousel">
        <div class="carousel-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/ford-jons.jpg" alt="Réparation camping-car garage Jons">
        </div>
        <div class="carousel-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/garage-jons.jpg" alt="Vente véhicules neufs garage Jons">
        </div>
        <div class="carousel-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/garage-fiat-jons.jpg" alt="Vente véhicules d'occasions garage Jons">
        </div>
        <div class="carousel-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/camping-car-jons.jpg" alt="Réparation camping-car garage Jons">
        </div>
    </div>
    <div class="text-slider-home">
        <h1>Garage automobile à Jons</h1>
        <h2>Réparations toutes marques</h2>
        <p>Mécanique, carrosserie, vente V.N. & V.O.</p>
        <p>Agent Fiat, Ford & AD Expert</p>
    </div>
</section>

<section id="assurances" class="grey-background">
    <div class="container">
        <div class="assurances-title section-title text-center">
            <h2>Agréments Assurances</h2>
            <span class="border text-center"></span>
        </div>
        <div class="all-assurances">
            <div class="single-assurance">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/assurances/Groupe_BPCE.png" alt="" height="65">
            </div>
            <div class="single-assurance">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/assurances/CARMA.png" alt="" height="65">
            </div>
            <div class="single-assurance">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/assurances/GMF.png" alt="" height="65">
            </div>
            <div class="single-assurance">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/assurances/Maaf.png" alt="" height="65">
            </div>
            <div class="single-assurance">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/assurances/macif.png" alt="" height="65">
            </div>
            <div class="single-assurance">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/assurances/matmut.png" alt="" height="65">
            </div>
            <div class="single-assurance">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/assurances/logo_mma_color.png" alt="" height="45">
            </div>
        </div>
    </div>
</section>

<section id="contact-home">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single-item text-center">
                    <div class="icon-holder">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="text-holder">
                        <h3>Nous Contacter</h3>
                        <span class="grey-border"></span>
                        <p>Tél : <a href="tel:+33472024442">04 72 02 44 42</a> <br> Mail : <a href="mailto:cilkauto@outlook.fr">cilkauto@outlook.fr</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-item text-center">
                    <div class="icon-holder">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <div class="text-holder">
                        <h3>Notre Adresse</h3>
                        <span class="grey-border"></span>
                        <p>1 Allée des 3 Joncs<br>69330 JONS<br><a href="https://www.google.com/maps/dir//CILK+AUTO,+1+All%C3%A9e+des+3+Joncs,+69330+Jons/@45.8016131,5.0160784,12z/data=!4m9!4m8!1m0!1m5!1m1!1s0x47f4b78c24c72c47:0x588613cfcda1430e!2m2!1d5.0861183!2d45.8016345!3e0" target="_blank" class="itinerary">Itinéraire</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-item single-item-padding text-center mb-0">
                    <div class="icon-holder">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="text-holder">
                        <h3>Nos Horaires</h3>
                        <span class="grey-border"></span>
                        <p>Lundi - Jeudi : 07h30 - 12h / 13h30 - 19h<br>Vendredi : 07h30 - 12h / 13h30 - 18h<br>Samedi - Dimanche : Fermé</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="services" class="grey-background">
    <div class="container">
        <div class="services-title section-title text-center">
            <h2>Nos Services</h2>
            <span class="border text-center"></span>
        </div>
        <div class="all-services">
            <div class="row">
                <div class="col-md-3">
                    <div class="service-box">
                        <div class="icon-wrap">
                            <i class="fas fa-tools"></i>
                        </div>

                        <h3 class="service-title">
                            Réparation & Entretien
                        </h3>

                        <p class="service-desc">Nous assurons l'entretien et la réparation de véhicules toutes marques</p>

                        <div class="elm-btn">
                            <a class="simple-link" href="<?php echo esc_url(get_permalink(40)); ?>">VOIR PLUS</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service-box">
                        <div class="icon-wrap">
                            <i class="fas fa-paint-roller"></i>
                        </div>

                        <h3 class="service-title">
                            Carrosserie
                        </h3>

                        <p class="service-desc">Nous réalisons des travaux de peinture et de carrosserie sur votre véhicule</p>

                        <div class="elm-btn">
                            <a class=" simple-link font-heading" href="<?php echo esc_url(get_permalink(11)); ?>">VOIR PLUS</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service-box">
                        <div class="icon-wrap">
                            <i class="fas fa-caravan"></i>
                        </div>

                        <h3 class="service-title">
                            Camping-car
                        </h3>

                        <p class="service-desc">Nous assurons l'entretien et la réparation de votre camping-car (toutes marques)</p>

                        <div class="elm-btn">
                            <a class=" simple-link font-heading" href="<?php echo esc_url(get_permalink(13)); ?>">VOIR PLUS</a>
                        </div>
                    </div>
                </div>
                <div class=" col-md-3">
                    <div class="service-box mb-0">
                        <div class="icon-wrap">
                            <i class="fas fa-car"></i>
                        </div>

                        <h3 class="service-title">
                            Service à domicile
                        </h3>

                        <p class="service-desc">Nous récupérons et restituons votre véhicule à domicile <br>(service gratuit)</p>

                        <div class="elm-btn">
                            <a class=" simple-link font-heading" href="<?php echo esc_url(get_permalink(11)); ?>">VOIR PLUS</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="link-services">
                        <a href="<?php echo esc_url(get_permalink(11)); ?>">Tous nos services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="all-cars" class="last-cars">
    <?php
    $new_loop = new WP_Query(array(
        'post_type' => 'occasions',
        'posts_per_page' => 3,
    ));
    ?>
    <div class="container">
        <div class="assurances-title section-title text-center">
            <h2>Dernières occasions</h2>
            <span class="border text-center"></span>
        </div>
        <div class="row">
            <?php if ($new_loop->have_posts()) : ?>
                <?php while ($new_loop->have_posts()) : $new_loop->the_post(); ?>
                    <div class="col-md-4">
                        <div class="all-cars-block">
                            <div class="all-cars-image">
                                <?php $images = get_field('photos');
                                $image_url = $images[0]['sizes']['custom-all-cars'];
                                ?>
                                <?php if ($images) : ?>
                                    <img src="<?php echo $image_url; ?>" alt="<?php echo $images[0]['title']; ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="all-cars-desc">
                                <h4><?php the_title(); ?></h4>
                                <div class="all-cars-desc-sub">
                                    <p><?php the_field('prix'); ?> €</p>
                                    <div class="all-cars-desc-btn">
                                        <a href="<?php the_permalink(); ?>">Voir plus</a>
                                    </div>
                                </div>
                                <div class="all-cars-options">
                                    <div class="all-cars-options-item">
                                        <div class="all-cars-options-item-image">
                                            <i class="fas fa-road"></i>
                                        </div>
                                        <p><?php the_field('kilometrage'); ?> km</p>
                                    </div>
                                    <div class="all-cars-options-item">
                                        <div class="all-cars-options-item-image">
                                            <i class="fas fa-gas-pump"></i>
                                        </div>
                                        <p><?php the_field('carburant'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="link-cars">
                    <a href="<?php echo esc_url(get_permalink(17)); ?>">Toutes nos occasions</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="actualites" class="grey-background">
    <?php
    $recentPosts = new WP_Query();
    $recentPosts->query('showposts');
    $recentPosts->set('posts_per_page', 2);
    $recentPosts->query($recentPosts->query_vars);
    ?>
    <div class="container">
        <div class="assurances-title section-title text-center">
            <h2>Notre actualité</h2>
            <span class="border text-center"></span>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="actualites-facebook">
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v7.0"></script>
                    <div class="fb-page" data-href="https://www.facebook.com/CILK-AUTO-100666794872191/" data-tabs="timeline" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
                        <blockquote cite="https://www.facebook.com/CILK-AUTO-100666794872191/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/CILK-AUTO-100666794872191/">CILK AUTO</a></blockquote>
                    </div>
                </div>
            </div>
            <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                <div class="col-md-4">
                    <div class="actualites-post">
                        <div class="actualites-image">
                            <?php $images = get_field('photo_article');
                            $image_url = $images['sizes']['custom-post'];
                            ?>
                            <?php if ($images) : ?>
                                <img src="<?php echo $image_url; ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="actualites-desc">
                            <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="actualites-btn">
                            <a href="<?php the_permalink(); ?>">Voir plus</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="link-posts">
                    <a href="<?php echo esc_url(get_permalink(19)); ?>">Tous nos articles</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>