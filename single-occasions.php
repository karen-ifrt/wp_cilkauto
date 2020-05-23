<?php include('includes/header.php'); ?>

<div class="section-main-title">
    <div class="container">
        <div id="fil-ariane">

            <h1><?php the_title(); ?></h1>
            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
            }
            ?>
        </div>
    </div>
</div>

<section id="single-car">
    <div class="container">
        <?php
        $images = get_field('photos');

        if ($images) : ?>

            <div class="row">
                <div class="col-md-7">
                    <div id="slider" class="flexslider">
                        <?php foreach ($images as $image) : ?>
                            <div class="slides">
                                <img src="<?php echo esc_url($image['sizes']['custom-single-car']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="single-car-options">
                        <div class="single-car-box">
                            <div class="single-car-item">
                                <p class="car-price"><?php the_field('prix'); ?> €</p>
                            </div>
                        </div>
                        <div class="single-car-box single-car-box-picto">
                            <div class="single-car-item">
                                <i class="fas fa-road"></i>
                                <p><?php the_field('kilometrage'); ?> km</p>
                            </div>
                            <div class="single-car-item">
                                <i class="fas fa-gas-pump"></i>
                                <p><?php the_field('carburant'); ?></p>
                            </div>
                            <div class="single-car-item">
                                <svg height="25" viewBox="0 0 16 16" width="25" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m15 8.27814v-4.55627c.59491-.346863 1-.984741 1-1.72186 0-1.10303-.896973-2-2-2-1.10303 0-2 .896973-2 2 0 .737122.40509 1.375 1 1.72186v1.27814h-4v-1.27814c.59491-.346863 1-.984741 1-1.72186 0-1.10303-.896973-2-2-2-1.10303 0-2 .896973-2 2 0 .737122.40509 1.375 1 1.72186v1.27814h-5c-.552246 0-1 .447754-1 1v2.27814c-.59491.346863-1 .984741-1 1.72186 0 1.10303.896973 2 2 2 1.10303 0 2-.896973 2-2 0-.737122-.40509-1.375-1-1.72186v-1.27814h4v1.27814c-.59491.346863-1 .984741-1 1.72186 0 1.10303.896973 2 2 2 1.10303 0 2-.896973 2-2 0-.737122-.40509-1.375-1-1.72186v-1.27814h4v1.27814c-.59491.346863-1 .984741-1 1.72186 0 1.10303.896973 2 2 2 1.10303 0 2-.896973 2-2 0-.737122-.40509-1.375-1-1.72186z" transform="translate(0 2)" /></svg>
                                <p><?php the_field('boite_de_vitesse'); ?></p>
                            </div>
                        </div>
                        <div class="single-car-box">
                            <div class="single-car-item">
                                <h4>Mise en circulation :</h4>
                                <p><?php the_field('annee'); ?></p>
                            </div>
                        </div>
                        <div class="single-car-box">
                            <div class="single-car-item">
                                <h4>Chevaux fiscaux :</h4>
                                <p><?php the_field('chevaux_fiscaux'); ?></p>
                            </div>
                        </div>
                        <div class="single-car-box">
                            <div class="single-car-item">
                                <h4>Chevaux DIN :</h4>
                                <p><?php the_field('chevaux_din'); ?></p>
                            </div>
                        </div>
                        <div class="single-car-box">
                            <div class="single-car-item">
                                <h4>Couleur :</h4>
                                <p><?php the_field('couleur'); ?></p>
                            </div>
                        </div>
                        <div class="single-car-box">
                            <div class="single-car-equipements">
                                <h4>Options / Équipements :</h4>
                                <p class="equipements"><?php the_field('options__equipements'); ?></p>
                            </div>
                        </div>
                        <div class="single-car-box">
                            <div class="single-car-equipements">
                                <h4>Commentaires :</h4>
                                <p class="equipements"><?php the_field('commentaires'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>




<?php include('includes/footer.php'); ?>