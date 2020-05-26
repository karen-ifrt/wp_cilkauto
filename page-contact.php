<?php include('includes/header.php'); ?>

<div class="section-main-title">
    <div class="container">
        <div id="fil-ariane">
            <h1>Contactez-nous</h1>
            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
            }
            ?>
        </div>
    </div>
</div>

<section id="contact-page" class="reveal-1">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="contact-info">
                    <div class="contact-info-block">
                        <div class="contact-info-wrap">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contact-info-desc">
                            <p>Tél : <a href="tel:+33472024442">04 72 02 44 42</a> <br> Mail : <a href="mailto:cilkauto@outlook.fr">cilkauto@outlook.fr</a></p>
                        </div>
                    </div>
                    <div class="contact-info-block">
                        <div class="contact-info-wrap">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <div class="contact-info-desc">
                            <p>1 Allée des 3 Joncs<br>69330 JONS<br></p>
                        </div>
                    </div>
                    <div class="contact-info-block">
                        <div class="contact-info-wrap">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-info-desc">
                            <p>Lundi - Jeudi : 07h30 - 12h / 13h30 - 19h<br>Vendredi : 07h30 - 12h / 13h30 - 18h<br>Samedi - Dimanche : Fermé</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="formulaire">
                            <?php the_content(); ?>
                        </div>

                <?php endwhile;
                endif; ?>
            </div>
        </div>
    </div>


    <div class="map-contact">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11125.922001484829!2d5.0861183!3d45.8016345!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x588613cfcda1430e!2sCILK%20AUTO!5e0!3m2!1sfr!2sfr!4v1589624908370!5m2!1sfr!2sfr" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</section>


<?php include('includes/footer.php'); ?>