<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */
get_header();
$product_id = get_the_ID();
$title = get_the_title($product_id);
?>
<section class="single-product-page">
    <div class="container">
        <div class="row justify-content-center pt-5">
            <div class="col-lg-6 col-12">
                <img class="w-100 d-block main-img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $title; ?>">
                <div class="d-flex justify-content-between align-items-center lower-part py-4 w-100">
                    <div class="d-flex justify-content-center align-items-center">
                        <a href="#">
                            مرزي طاهر - كاتب لبناني
                        </a>
                        <p dir="ltr">6 jan 2025</p>
                    </div>
                    <div>
                        <p dir="ltr">
                        <img class="heart" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/heart.svg" alt="heart">
                        <img class="heart-filled d-none" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/heart-filled.svg" alt="heart">
                        Like this post</p>
                    </div>
                </div>
                <div class="pt-4 pb-5 w-100 d-flex author-section">
                    <img class="" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    <p>
                        <a href="#">
                            رهادة الصعبي
                        </a>
                        هي صحفية علمية كبيرة تغطي مواضيع الطاقة والبيئة ولديها أكثر من عقد من الخبرة. كما أنها مقدمة بودكاست "الجحيم أو الطوفان: عندما تضرب الكارثة الوطن"، وهو بودكاست من إنتاج فوكس
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center py-5">
            <div class="col-8">
                <?php
                    while ( have_posts() ) : the_post();
                        the_content();
                    endwhile;
                ?>
                <div class="py-5 tags">
                    <h3>المواضيع</h3>
                    <ul class="d-flex">
                        <li>
                            <a href="#">
                            لبنان
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            سوريا
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            فلسطين
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-1">
                <div class="social-main">
                    <ul class="social-media-icons">
                        <li class="my-1">
                            <a href="#" class="single-social-icon">
                                <img class="active" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/insta-icon.svg" alt="insta">
                                <img class="stroke" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/insta.svg" alt="insta">
                            </a>
                        </li>
                        <li class="my-1">
                            <a href="#" class="single-social-icon">
                                <img class="active" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/fb-icon.svg" alt="fb">
                                <img class="stroke" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/fb.svg" alt="fb">
                            </a>
                        </li>
                        <li class="my-1">
                            <a href="#" class="single-social-icon">
                                <img class="active" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/linkedin-icon.svg" alt="linkedin">
                                <img class="stroke" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/in.svg" alt="linkedin">
                            </a>
                        </li>
                        <li class="my-1">
                            <a href="#" class="single-social-icon">
                                <img class="active" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/RSS-icon.svg" alt="RSS">
                                <img class="stroke" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/rss.svg" alt="RSS">
                            </a>
                        </li>
                        <li class="my-1">
                            <a href="#" class="single-social-icon">
                                <img class="active" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/threads-icon.svg" alt="threads">
                                <img class="stroke" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/threads.svg" alt="threads">
                            </a>
                        </li>
                        <li class="my-1">
                            <a href="#" class="single-social-icon">
                                <img class="active" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/tiktok-icon.svg" alt="tiktok">
                                <img class="stroke" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/tiktok.svg" alt="tiktok">
                            </a>
                        </li>
                        <li class="my-1">
                            <a href="#" class="single-social-icon">
                                <img class="active" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/whatsapp-icon.svg" alt="whatsapp">
                                <img class="stroke" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/whatsapp.svg" alt="whatsapp">
                            </a>
                        </li>
                        <li class="my-1">
                            <a href="#" class="single-social-icon">
                                <img class="active" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/X-icon.svg" alt="X">
                                <img class="stroke" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/x.svg" alt="X">
                            </a>
                        </li>
                        <li class="my-1">
                            <a href="#" class="single-social-icon">
                                <img class="active" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/youtube-icon.svg" alt="youtube">
                                <img class="stroke" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/youtube.svg" alt="youtube">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="related-articles py-4">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="more">
                        <h2 class="mb-3">
                            الأكثر قراءة
                        </h2>
                        <div class="row">
                            <?php for($i=0; $i<5; $i++){ ?>
                                <div class="col-3">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="d-block w-100">
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="most-read-articles">
                        <h2 class="mb-3">
                            الأكثر قراءة
                        </h2>
                        <ul>
                            <?php for($i=0; $i<5; $i++){ ?>
                                <li>
                                    <h3>
                                        عن التروما التي تعشقنا وتحاول قتلنا
                                    </h3>
                                    <div class="author">
                                        <a href="#">
                                            متري طاهر - كاتب لبناني
                                        </a>
                                        <div class="date">
                                            4 jan 2025
                                        </div>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<script>
    jQuery(document).ready(function($) {
        $('.heart').click(function(){
            $(this).addClass('d-none');
            $('.heart-filled').removeClass('d-none');
        });
        $('.heart-filled').click(function(){
            $(this).addClass('d-none');
            $('.heart').removeClass('d-none');
        });
    })
</script>
<?php
get_footer();
