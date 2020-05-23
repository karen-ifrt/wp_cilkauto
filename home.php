<?php include('includes/header.php'); ?>

<div class="section-main-title">
    <div class="container">
        <div id="fil-ariane">
            <h1>Actualités</h1>
            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
            }
            ?>
        </div>
    </div>
</div>

<?php
$recentPosts = new WP_Query();
$recentPosts->query('showposts');
?>
<section id="actualites">
    <div class="container">
        <div class="row">
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
    </div>
</section>



<?php include('includes/footer.php'); ?>