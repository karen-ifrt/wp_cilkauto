<?php include('includes/header.php'); ?>

<div class="section-main-title">
    <div class="container">
        <div id="fil-ariane">
            <h1>Entretien de votre camping-car</h1>
            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
            }
            ?>
        </div>
    </div>
</div>

<section id="camping-car">
    <div class="camping-car-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/camping-car-jons.jpg" alt="Camping-car Jons">
    </div>
</section>
<section id="services-camping-car" class="grey-background">
    <div class="container">
        <div class="camping-car-desc mb-4">
            <p>Nous réalisons les prestations ci-dessous pour votre camping-car</p>
        </div>
        <div class="all-services">
            <div class="row">
                <div class="col-md-3">
                    <div class="service-box">
                        <div class="icon-wrap">
                            <i class="fas fa-oil-can"></i>
                        </div>

                        <h3 class="service-title">
                            Vidange
                        </h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service-box">
                        <div class="icon-wrap">
                            <i class="fas fa-cogs"></i>
                        </div>

                        <h3 class="service-title">
                            Distribution
                        </h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service-box">
                        <div class="icon-wrap">
                            <i class="fas fa-shuttle-van"></i>
                        </div>

                        <h3 class="service-title">
                            Suspensions / <br>Pneumatiques
                        </h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service-box">
                        <div class="icon-wrap">
                            <i class="fas fa-fan"></i>
                        </div>

                        <h3 class="service-title">
                            Climatisation
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include('includes/footer.php'); ?>