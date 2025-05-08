<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
?>
<footer class="pt-5">
    <div class="container pt-5">
        <div class="row justify-content-between pb-4">
            <div class="col-2">
                <a href="<?php echo home_url(); ?>">
                    <img class="w-100 d-block" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/Naqd-logo-white.png" alt="naqd">
                </a>
            </div>
            <div class="col-lg-5 col-12 justify-content-end d-flex align-items-center">
                <ul class="social-media-icons">
                    <li class="mx-1">
                        <a href="#" class="single-social-icon">
                            <img class="active" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/insta-icon.svg" alt="insta">
                            <img class="stroke" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/insta.svg" alt="insta">
                        </a>
                    </li>
                    <li class="mx-1">
                        <a href="#" class="single-social-icon">
                            <img class="active" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/fb-icon.svg" alt="fb">
                            <img class="stroke" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/fb.svg" alt="fb">
                        </a>
                    </li>
                    <li class="mx-1">
                        <a href="#" class="single-social-icon">
                            <img class="active" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/linkedin-icon.svg" alt="linkedin">
                            <img class="stroke" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/in.svg" alt="linkedin">
                        </a>
                    </li>
                    <li class="mx-1">
                        <a href="#" class="single-social-icon">
                            <img class="active" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/RSS-icon.svg" alt="RSS">
                            <img class="stroke" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/rss.svg" alt="RSS">
                        </a>
                    </li>
                    <li class="mx-1">
                        <a href="#" class="single-social-icon">
                            <img class="active" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/threads-icon.svg" alt="threads">
                            <img class="stroke" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/threads.svg" alt="threads">
                        </a>
                    </li>
                    <li class="mx-1">
                        <a href="#" class="single-social-icon">
                            <img class="active" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/tiktok-icon.svg" alt="tiktok">
                            <img class="stroke" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/tiktok.svg" alt="tiktok">
                        </a>
                    </li>
                    <li class="mx-1">
                        <a href="#" class="single-social-icon">
                            <img class="active" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/whatsapp-icon.svg" alt="whatsapp">
                            <img class="stroke" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/whatsapp.svg" alt="whatsapp">
                        </a>
                    </li>
                    <li class="mx-1">
                        <a href="#" class="single-social-icon">
                            <img class="active" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/X-icon.svg" alt="X">
                            <img class="stroke" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/x.svg" alt="X">
                        </a>
                    </li>
                    <li class="mx-1">
                        <a href="#" class="single-social-icon">
                            <img class="active" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/youtube-icon.svg" alt="youtube">
                            <img class="stroke" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/youtube.svg" alt="youtube">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row pb-3">
            <div class="col-12 pb-4">
                <ul class="footer-tags">
                    <li>
                        <a href="/category/لبنان/">
                            أفلامنا
                        </a>
                    </li>
                    <li>
                        <a href="/category/لبنان/">
                            ملفات
                        </a>
                    </li>
                    <li>
                        <a href="/category/لبنان/">
                            مجتمع
                        </a>
                    </li>
                    <li>
                        <a href="/category/لبنان/">
                            شاهد
                        </a>
                    </li>
                    <li>
                        <a href="/category/لبنان/">
                            اكتبوا معنا
                        </a>
                    </li>
                    <li>
                        <a href="/category/لبنان/">
                            عن نقد
                        </a>
                    </li>
                    <li>
                        <a href="/category/لبنان/">
                            اتصلوا بنا
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-12">
                <div class="d-flex justify-content-start text-right">
                    <p>تابعوا قناة نقد على يوتيوب</p>
                    <a class="button-green" href="#">
                        الاشتراك
                    </a>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-end py-3">
                <a href="#">
                    <img class="d-block" style="width: 50px;" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/bell.svg" alt="subscribe">
                </a>
            </div>
        </div>
    </div>
    <div class="border-green"></div>
</footer>
</div><!-- #content -->
</div><!-- #page -->
<script>
    jQuery(document).ready(function($) {
    });
</script>
<?php wp_footer(); ?>
</body>
</html>