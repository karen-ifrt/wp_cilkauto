<?php include('includes/header.php'); ?>
<div class="section-main-title">
    <div class="container">
        <div id="fil-ariane">
            <h1>Véhicules neufs</h1>
            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
            }
            ?>
        </div>
    </div>
</div>

<section id="services-page">
    <div class="container">
        <div class="all-services">
            <div class="row">
                <div class="col-md-6">
                    <div class="service-box">
                        <div class="services-page-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/ford-jons.jpg" alt="Carte grise garage Jons">
                        </div>

                        <h3 class="service-title text-center">
                            Vente véhicules neufs<br> Ford
                        </h3>

                        <p class="service-desc">Retrouvez les véhicules de la gamme FORD</p>

                        <div class="elm-btn">
                            <a target="_blank" class="simple-link font-heading" href="https://www.ford.fr/">SITE FORD</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-box">
                        <div class="services-page-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/fiat-jons.jpg" alt="Carte grise garage Jons">
                        </div>

                        <h3 class="service-title text-center">
                            Vente véhicules neufs<br> Fiat
                        </h3>

                        <p class="service-desc">Retrouvez les véhicules de la gamme FIAT</p>

                        <div class="elm-btn">
                            <a target="_blank" class=" simple-link font-heading" href="https://www.fiat.fr/">SITE FIAT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>