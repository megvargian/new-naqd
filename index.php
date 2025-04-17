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
    <div class="container">
        <div class="row">
            <?php for($i=0; i<12; i++){ ?>
                <div class="col-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/berry.jpg" alt="berry" class="w-100">
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