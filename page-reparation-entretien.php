<?php include('includes/header.php'); ?>

<div class="section-main-title">
    <div class="container">
        <div id="fil-ariane">
            <h1>Réparation et entretien</h1>
            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
            }
            ?>
        </div>
    </div>
</div>

<section id="services-reparation" class="reveal-1">
    <div class="container">
        <div class="all-services">
            <div class="row">
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="icon-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/revision-jons.png" alt="Révision Jons">
                        </div>
                        <h3 class="service-title">
                            Révision
                        </h3>

                        <div class="service-desc">
                            <p>Révision garantie constructeur préservée</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="icon-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/pneu-jons.png" alt="Révision Jons">
                        </div>

                        <h3 class="service-title">
                            Liaison au sol
                        </h3>

                        <div class="service-desc">
                            <p>Pneumatiques</p>
                            <p>Amortisseurs</p>
                            <p>Freinage</p>
                            <p>Réglage train roulant</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="icon-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/climatisation-jons.png" alt="Révision Jons">
                        </div>

                        <h3 class="service-title">
                            Chauffage<br>Climatisation
                        </h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="icon-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/visibilite-jons.png" alt="Révision Jons">
                        </div>

                        <h3 class="service-title">
                            Visibilité
                        </h3>

                        <div class="service-desc">
                            <p>Vitrage</p>
                            <p>Rénovation optique</p>
                            <p>Contrôle réglage éclairage</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="icon-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/moteur-jons.png" alt="Révision Jons">
                        </div>

                        <h3 class="service-title">
                            Moteur - Transmission
                        </h3>

                        <div class="service-desc">
                            <p>Mécanique</p>
                            <p>Distribution</p>
                            <p>Embrayage</p>
                            <p>Échappement</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="icon-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/batterie-jons.png" alt="Révision Jons">
                        </div>

                        <h3 class="service-title">
                            Électrique - Électronique
                        </h3>

                        <div class="service-desc">
                            <p>Diagnostic électronique</p>
                            <p>Allumage gestion moteur</p>
                            <p>Électricité</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>