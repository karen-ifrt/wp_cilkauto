<?php include('includes/header.php'); ?>

<div class="section-main-title">
    <div class="container">
        <div id="fil-ariane">
            <h1>Nos véhicules d'occasions</h1>
            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
            }
            ?>
        </div>
    </div>
</div>

<?php
$new_loop = new WP_Query(array(
    'post_type' => 'occasions',
));
?>


<section id="all-cars" class="reveal-1">
    <div class="container">
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
    </div>
</section>



<?php include('includes/footer.php'); ?>