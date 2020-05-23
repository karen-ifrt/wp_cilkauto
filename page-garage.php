<?php include('includes/header.php'); ?>

<div class="section-main-title">
    <div class="container">
        <div id="fil-ariane">
            <h1>Notre garage à Jons</h1>
            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
            }
            ?>
        </div>
    </div>
</div>

<section id="garage">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="garage-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/garage-cilk-jons.jpg" alt="Notre garage à Jons">
                </div>
            </div>
            <div class="col-md-6">
                <div class="garage-desc">
                    <p>Repris début 2020, le garage CILK AUTO situé à Jons, près de Lyon, met à votre disposition <a href="services.php">ses services</a> et son savoir-faire.</p>
                    <p>Membre du réseau AD Expert, nous assurons l'entretien et la réparation de véhicules toutes marques, de la citadine au <a href="campingcar.php">camping-car</a>.<br>
                        Nous pouvons aussi les préparer au contrôle technique, et réaliser des travaux de peinture et carrosserie.</p>
                    <p>Vous avez un projet d'achat de véhicule ? Notre équipe saura vous conseiller parmi nos offres de véhicules neufs (gamme FIAT et FORD) et <a href="occasions.php">d'occasions</a> (multimarques). <br> Cette prestation inclut les demandes de cartes grises afin de vous faciliter la vie !</p>
                    <p>Que vous soyez particuliers ou professionnels, nous restons à votre écoute et nous mettrons tout en oeuvre pour vous assurer le meilleur service au juste prix.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="services" class="grey-background">
    <div class="container">
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
                            <a target="_blank" class="simple-link" href="#">VOIR PLUS</a>
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
                            <a target="_blank" class=" simple-link font-heading" href="#">VOIR PLUS</a>
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
                            <a target="_blank" class=" simple-link font-heading" href="#">VOIR PLUS</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service-box mb-0">
                        <div class="icon-wrap">
                            <i class="fas fa-car"></i>
                        </div>

                        <h3 class="service-title">
                            Service à domicile
                        </h3>

                        <p class="service-desc">Nous récupérons et restituons votre véhicule à domicile <br>(service gratuit)</p>

                        <div class="elm-btn">
                            <a target="_blank" class=" simple-link font-heading" href="#">VOIR PLUS</a>
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

<?php include('includes/footer.php'); ?>