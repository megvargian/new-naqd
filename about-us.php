<?php
/**
 * Template Name: About and Contact us
 */
get_header();
?>
<section class="about-us py-5">
    <div class="container">
        <div class="row">
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