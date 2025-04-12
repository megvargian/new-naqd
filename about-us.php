<?php
/**
 * Template Name: About us
 */
get_header();
?>
<section class="about-us">
    <div class="position-relative">
        <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/about-us.jpg" alt="about us">
        <div class="title">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
    <div class="container">
        <div class="row w-100" style="padding-left: 1rem;">
            <div class="col-12">
                <?php
                    while ( have_posts() ) : the_post();
                        the_content();
                    endwhile;
                ?>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();