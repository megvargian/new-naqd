<?php
/**
 * Template Name: Personal Info
 */
get_header();
?>
<section class="personal-info py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <div class="row justify-content-start">
                    <div class="col-lg-8 col-12">
                        <div class="form_validation_parent position-relative">
                            <?php echo do_shortcode('[contact-form-7 id="2f3ec12" title="Personal info"]') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    jQuery(document).ready(function($) {
        var cf7form = $('.wpcf7');
        if (cf7form) {
            $(cf7form).each(function(index, el) {
                if (el) {
                    $(el).find('form').submit(function(event) {
                        $(el).find('form').find('.wpcf7-submit').addClass('disabled');
                        $(el).parents('.form_validation_parent').find('.contact_success_message').hide();
                        $(el).parents('.form_validation_parent').find('.contact_fail_message').hide();
                    });
                    el.addEventListener( 'wpcf7mailsent', function( event ) {
                        $(el).parents('.form_validation_parent').find('.contact_success_message').slideDown(300);
                        $(el).parents('.form_validation_parent').find('.wpcf7-response-output').slideDown(300);

                    }, false );
                    el.addEventListener( 'wpcf7mailfailed', function( event ) {
                        $(el).find('form').find('.wpcf7-submit').removeClass('disabled');
                        $(el).parents('.form_validation_parent').find('.contact_fail_message').slideDown(300);
                    }, false );
                    el.addEventListener( 'wpcf7spam', function( event ) {
                        $(el).find('form').find('.wpcf7-submit').removeClass('disabled');
                        $(el).parents('.form_validation_parent').find('.contact_fail_message').slideDown(300);
                    }, false );
                    el.addEventListener( 'wpcf7invalid', function( event ) {
                        $(el).find('form').find('.wpcf7-submit').removeClass('disabled');
                        $(el).parents('.form_validation_parent').find('.contact_fail_message').slideDown(300);
                    }, false );
                }
            });
        }
    });
</script>
<?php
get_footer();