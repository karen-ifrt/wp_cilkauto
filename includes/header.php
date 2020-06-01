<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158777282-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-158777282-1');
    </script>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo/favicon.png" />
    <script src="https://kit.fontawesome.com/99cb57bc02.js" crossorigin="anonymous"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="fixed-top">
        <div class="topnav">
            <div class="topnav-contact">
                <div class="topnav-phone">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/communications.svg" alt="Téléphone CILK Auto" width="20">
                    <a href="tel:+33472024442">
                        <p>04 72 02 44 42</p>
                    </a>
                </div>
                <div class="topnav-mail">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/multimedia.svg" alt="Mail CILK Auto" width="20">
                    <a href="mailto:cilkauto@outlook.fr">cilkauto@outlook.fr</a>
                </div>
            </div>
            <div class="topnav-social">
                <p>Nous suivre</p>
                <a href="http://facebook.com" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </div>
        </div>

        <div class="desk-nav">
            <nav>
                <div class="desk-nav-logo">
                    <a href="<?php echo home_url('/'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-CILK.png" alt="CILK Auto logo">
                    </a>
                </div>
                <div class="desk-nav-menu">
                    <?php
                    wp_nav_menu(array(
                        'menu' => 'Desktop',
                        'depth'           => 2,
                        'container'       => 'div',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                    ));
                    ?>
                </div>
                <div class="desk-nav-brands">
                    <a href="https://www.fiat.fr/" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-fiat.png" alt="CILK Auto Fiat" width="50">
                    </a>
                    <a href="https://www.ford.fr/" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-ford.png" alt="CILK Auto Ford" width="60">
                    </a>
                    <a href="https://www.ad.fr/" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-expert.png" alt="CILK Auto AD Expert" width="85">
                    </a>
                </div>
            </nav>
        </div>

        <nav class="mobile-nav" id="mobile-nav">
            <div class="mobile-nav-logo">
                <a href="<?php echo home_url('/'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-CILK.png" alt="CILK Auto logo">
                </a>
            </div>
            <div class="burger-mobile" id="burger-mobile">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/menu.svg" alt="Menu CILK Auto" id="burger-open" class="burger-open" width="40">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/signs.svg" alt="Menu CILK Auto" id="burger-close" class="burger-close" width="35">
            </div>
            <div class="content-menu" id="content-menu">
                <?php
                wp_nav_menu(array(
                    'menu' => 'Desktop'
                ));
                ?>
                <div class="topnav-contact">
                    <div class="topnav-phone">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/communications.svg" alt="Téléphone CILK Auto" width="20">
                        <a href="tel:+33472024442">
                            <p>04 72 02 44 42</p>
                        </a>
                    </div>
                    <div class="topnav-mail">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/multimedia.svg" alt="Mail CILK Auto" width="20">
                        <a href="mailto:cilkauto@outlook.fr">cilkauto@outlook.fr</a>
                    </div>
                </div>
                <div class="topnav-social">
                    <p>Nous suivre</p>
                    <a href="http://facebook.com" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <button onclick="topFunction()" id="myBtn"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/chevron-up.svg" alt="Revenir en haut de la page"></button>