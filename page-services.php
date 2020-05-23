<?php include('includes/header.php'); ?>

<div class="section-main-title">
    <div class="container">
        <div id="fil-ariane">
            <h1>Nos services</h1>
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
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="services-page-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/entretien.jpg" alt="Réparation et entretien garage Jons">
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
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="services-page-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/carrosserie-jons.jpg" alt="Carrosserie garage Jons">
                        </div>

                        <h3 class="service-title">
                            Carrosserie
                        </h3>

                        <p class="service-desc">Nous réalisons des travaux de peinture et de carrosserie sur votre véhicule</p>

                        <div class="elm-btn">
                            <a target="_blank" class=" simple-link font-heading" data-toggle="modal" data-target="#exampleModalCenter">VOIR PLUS</a>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Carrosserie</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Nous réalisons les prestations ci-dessous pour les véhicules toutes marques:</p>
                                    <br>
                                    <ul>
                                        <li>Remplacement de pièces</li>
                                        <li>Débosselage</li>
                                        <li>Petits chocs</li>
                                        <li>Redressage</li>
                                        <li>Tôlerie</li>
                                        <li>Ponçage</li>
                                        <li>Peinture</li>
                                        <li>Traitement rayures</li>
                                        <li>Pare-brise</li>
                                        <li>Optiques / Rénovation d'optiques </li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="services-page-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/controle-technique-jons.jpg" alt="Controle technique garage Jons">
                        </div>

                        <h3 class="service-title">
                            Contrôle technique
                        </h3>

                        <p class="service-desc">Nous réalisons le pré-contrôle technique et le contrôle technique sur votre véhicule</p>

                        <div class="elm-btn">
                            <a target="_blank" class=" simple-link font-heading" data-toggle="modal" data-target="#modalControleTechnique">VOIR PLUS</a>
                        </div>
                    </div>
                    <div class="modal fade" id="modalControleTechnique" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h4>Pré-contrôle technique</h4>
                                    <p class="ct-para">Le pré-contrôle technique est une sécurité pour éviter toute déconvenue lors du passage de votre véhicule en contrôle technique. Le garage CILK AUTO vous propose une révision complète de votre véhicule en vue du contrôle technique. </p>
                                    <h4>Contrôle technique</h4>
                                    <p class="ct-para2">Dans la continuité de la révision complète de votre véhicule nous vous proposons de présenter votre véhicule dans un centre agréé de Contrôle Technique.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="services-page-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/carte-grise-jons.jpg" alt="Carte grise garage Jons">
                        </div>

                        <h3 class="service-title">
                            Carte grise
                        </h3>

                        <div class="service-desc">
                            <p>Le garage CILK AUTO vous propose le service carte grise qui va vous faciliter la vie</p>
                        </div>

                        <div class="elm-btn">
                            <a target="_blank" class="simple-link font-heading" data-toggle="modal" data-target="#modalCarteGrise">VOIR PLUS</a>
                        </div>
                    </div>
                    <div class="modal fade" id="modalCarteGrise" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Carte grise</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body modal-body-carte">
                                    <p>Présentez-vous sans rendez-vous et nous gérons votre demande de carte grise en seulement 15 minutes !</p>
                                    <p>Vous recevrez votre nouvelle carte grise chez vous dans un délai de 48h.</p>
                                    <p>Tarif : 25€ TTC + coût de la carte grise.</p>
                                    <h4 class="text-center mt-4">Pièces à fournir</h4>
                                    <p class="desc-carte-titre">Originaux</p>
                                    <ul>
                                        <li>Carte grise entière (Barrée "vendue le ...")</li>
                                        <li>Certificat de cession complété et signé</li>
                                        <li>Demande d'immatriculation complétée et signée</li>
                                        <li>Mandat complété et signé</li>
                                        <li>Le contrôle technique doit être de moins de 6 mois pour les véhicules de plus de 4 ans</li>
                                    </ul>
                                    <p class="desc-carte-titre">Copies</p>
                                    <ul>
                                        <li>Copie de pièce d'identité</li>
                                        <li>Copie du permis de conduire</li>
                                        <li>Copie d'un justificatif de domicile</li>
                                        <li>Copie de l'assurance du véhicule</li>
                                    </ul>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="services-page-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/domicile.jpg" alt="Carte grise garage Jons">
                        </div>

                        <h3 class="service-title">
                            Service à domicile
                        </h3>

                        <p class="service-desc">Nous récupérons et restituons votre véhicule à domicile (service gratuit)</p>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="services-page-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/campingcar-jons.jpg" alt="Carte grise garage Jons">
                        </div>

                        <h3 class="service-title">
                            Camping-car
                        </h3>

                        <p class="service-desc">Nous assurons l'entretien et la réparation de votre camping-car (toutes marques)
                        </p>

                        <div class="elm-btn">
                            <a class=" simple-link font-heading" href="<?php echo esc_url(get_permalink(13)); ?>">VOIR PLUS</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
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
                <div class="col-md-4">
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
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="services-page-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/occasions-jons.jpg" alt="Carte grise garage Jons">
                        </div>

                        <h3 class="service-title">
                            Vente véhicules d'occasions
                        </h3>

                        <p class="service-desc">Retrouvez nos véhicules d'occasions multimarques</p>

                        <div class="elm-btn">
                            <a class=" simple-link font-heading" href="<?php echo esc_url(get_permalink(17)); ?>">VOIR PLUS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>