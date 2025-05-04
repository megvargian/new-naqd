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
                <div class="row justify-content-start">
                    <div class="col-lg-8 col-12">
                        <div class="contact-us">
                            <div class="form_validation_parent position-relative">
                                <?php echo do_shortcode('[contact-form-7 id="2146739" title="Contact us"]') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    jQuery(document).ready(function($) {
    });
</script>
<?php
get_footer();