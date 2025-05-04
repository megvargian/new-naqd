<?php
/**
 * Template Name: About and Contact us
 */
get_header();
?>
<section class="about-and-contact-us py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
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