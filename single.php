<?php include('includes/header.php'); ?>
<?php
$recentPosts = new WP_Query();
$recentPosts->query('showposts');
?>
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

<section id="single-actualite">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="single-actualite-image">
                    <?php $video = get_field('video_article'); ?>
                    <?php if ($video) : ?>
                        <?php the_field('video_article'); ?>
                    <?php else : ?>
                        <?php $images = get_field('photo_article');
                        $image_url = $images['sizes']['large'];
                        ?>
                        <img src="<?php echo $image_url; ?>" />
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-5">
                <div class="single-actualite-desc">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>

    </div>
</section>


<?php include('includes/footer.php'); ?>