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
        <div class="row bg-color-green mb-2">
            <div class="col-lg-4 col-12 px-0">
                <a href="#">
                    <img class="w-100 h-100 d-block main-img" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/berry.jpg" alt="berry">
                </a>
            </div>
            <div class="col-8 d-lg-flex d-none px-0">
                <div class="d-flex justify-content-between align-items-center flex-column">
                    <div class="p-5 pb-0 text-left">
                        <p>
                        لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه … بروشور او فلاير على سبيل المثال … او نماذج مواقع انترنت …
                        </p>
                        <p>
                        لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه … بروشور او فلاير على سبيل المثال … او نماذج مواقع انترنت …
    وعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميم ويتم وضع النصوص النهائية المطلوبة للتصميم ويقول البعض ان وضع النصوص التجريبية بالتصميم قد تشغل المشاهد عن وضع الكثير من الملاحظات او الانتقادات للتصميم الاساسي.
    وخلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد. من كتاب “حول أقاصي الخير والشر”
                        </p>
                        <p>
                        لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه … بروشور او فلاير على سبيل المثال … او نماذج مواقع انترنت …
                        </p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center lower-part pb-5 px-5 w-100">
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
                </div>

            </div>
        </div>
        <div class="row">
            <?php for($i=0; $i<8; $i++){ ?>
                <div class="col-lg-3 col-12 mb-2 px-1">
                    <a href="/test1/">
                        <img class="w-100 d-block single-article " src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/berry.jpg" alt="berry">
                    </a>
                </div>
            <?php } ?>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12 mb-2 px-1">
                <div class="most-read-articles">
                    <h2 class="mb-3">
                        الأكثر قراءة
                    </h2>
                    <ul>
                        <?php for($i=0; $i<3; $i++){ ?>
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
            <div class="col-lg-6 col-12">
                <div class="row">
                    <div class="col-lg-6 col-12 mb-2 px-1">
                        <a href="#">
                            <img class="w-100 d-block single-article " src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/berry.jpg" alt="berry">
                        </a>
                    </div>
                    <div class="col-lg-6 col-12 mb-2 px-1">
                        <a href="#">
                            <img class="w-100 d-block single-article " src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/berry.jpg" alt="berry">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-2 px-1">
                        <div class="subscribe">
                            <h4>تصلكم نشرة نقد إلى بريدكم الالكتروني</h4>
                            <form  action="/">
                                <input class="email" type="email" placeholder="بريدكم الالكتروني" required>
                                <button class="submit">الاشتراك</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php for($i=0; $i<4; $i++){ ?>
                <div class="col-lg-3 col-12 mb-2 px-1">
                    <button type="button" class="mb-md-0 mb-4" data-toggle="modal" data-target="#exampleModalCenter<?php echo $i; ?>">
                        <img class="w-100 d-block single-article " src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/berry.jpg" alt="berry">
                    </button>
                </div>
                <div class="modal fade" id="exampleModalCenter<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter<?php echo $i; ?>Title" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header justify-content-end" style="background: transparent;">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="responsive-short">
                                    <iframe src="https://www.youtube.com/embed/2Wg7kmqH5gs" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row pt-3">
            <div class="col-12 mb-3 text-right">
                <h2>
                    آخر الأخبار
                </h2>
            </div>
            <div class="col-12 position-relative">
                <div class="swiper latestNewsSwiper">
                    <div class="swiper-wrapper">
                        <?php for($i=0; $i<8; $i++){ ?>
                            <div class="swiper-slide">
                                <a href="#">
                                    <img class="w-100 d-block single-article " src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/berry.jpg" alt="berry">
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="swiper-button-prev swiper-button-prev-latest-article"></div>
            </div>
        </div>
    </div>
</section>
<script>
    jQuery(document).ready(function($) {
        var swiper = new Swiper(".latestNewsSwiper", {
            slidesPerView: 4,
            spaceBetween: 10,
            grabCursor: true,
            loop: true,
            navigation: {
                nextEl: ".swiper-button-prev",
            },
            breakpoints: {
				// when window width is >= 320px
				320: {
					slidesPerView: 1.5,
					spaceBetween: 10,
				},
				// when window width is >= 480px
				480: {
					slidesPerView: 1.5,
					spaceBetween: 10,
				},
				// when window width is >= 640px
				640: {
					slidesPerView: 2,
					spaceBetween: 10,
				},
				991: {
					slidesPerView: 4,
					spaceBetween: 10,
				}
			}
        });
        swiper.changeLanguageDirection('rtl');
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