<?php
/**
 * Template Name: Homepage
 */
get_header();
// while ( have_posts() ) : the_post();
//     the_content();
// endwhile;
?>
<section class="homepage">
    <div class="container py-5">
        <div class="row">

        </div>
        <div class="row">
            <?php for($i=0; $i<12; $i++){ ?>
                <div class="col-lg-3 col-12 mb-2 px-2">
                    <a href="#">
                        <img class="w-100 d-block single-article " src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/berry.jpg" alt="berry">
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<script>
    jQuery(document).ready(function($) {
    })
</script>
<?php
get_footer();