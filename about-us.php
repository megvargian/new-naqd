<?php
/**
 * Template Name: About and Contact us
 */
get_header();
?>
<section class="about-and-contact-us my-5 py-lg-5 py-3 title">
    <div class="container py-lg-5 py-3">
        <div class="row text-center">
            <div class="col-12">
                <h1>عن نقد</h1>
            </div>
        </div>
    </div>
</section>
<section class="about-and-contact-us py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12">
                <p class="bold">نقد منصة إعلامية مستقلة تأسست لتقديم محتوى متعدد الوسائط بزاوية مبتكرة تواكب العصر الرقمي. تسعى المنصة إلى تغطية الأخبار الراهنة وتحليل القضايا الاجتماعية والثقافية بطريقة تبتعد عن الأساليب التقليدية للإعلام، مع التركيز على نقل أصوات الفئات المهمشة التي غالباً ما يتم تجاهلها</p>
            </div>
            <div class="col-lg-8 col-12">
                <p>نقد منصة إعلامية مستقلة تأسست لتقديم محتوى متعدد الوسائط بزاوية مبتكرة تواكب العصر الرقمي. تسعى المنصة إلى تغطية الأخبار الراهنة وتحليل القضايا الاجتماعية والثقافية بطريقة تبتعد عن الأساليب التقليدية للإعلام، مع التركيز على نقل أصوات الفئات المهمشة التي غالباً ما يتم تجاهلها</p>
                <p>نقد منصة إعلامية مستقلة تأسست لتقديم محتوى متعدد الوسائط بزاوية مبتكرة تواكب العصر الرقمي. تسعى المنصة إلى تغطية الأخبار الراهنة وتحليل القضايا الاجتماعية والثقافية بطريقة تبتعد عن الأساليب التقليدية للإعلام، مع التركيز على نقل أصوات الفئات المهمشة التي غالباً ما يتم تجاهلها</p>
            </div>
        </div>
    </div>
</section>
<section class="about-and-contact-us py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <div class="row justify-content-start">
                    <div class="col-lg-8 col-12">
                        <div id="contact-us" class="contact-us">
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