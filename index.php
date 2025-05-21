<?php
/**
 * Template Name: Homepage
 */
get_header();
// while ( have_posts() ) : the_post();
//     the_content();
// endwhile;
$first_article = new WP_Query(
    array(
        'post_type'      => 'post',
        'posts_per_page' =>  1,
        'orderby'        => 'date',
        'order'          => 'DESC',
    )
);
$second_part = new WP_Query(
    array(
        'post_type'      => 'post',
        'posts_per_page' =>  8,
        'offset'         =>  1,
        'orderby'        => 'date',
        'order'          => 'DESC',
    )
);
?>
<section class="homepage">
    <div id="filter-container" class="container py-5">
        <?php
            if ( $first_article->have_posts() ) {
                while ( $first_article->have_posts() ) {
                $first_article->the_post();
                $article_id = get_the_ID();
                $article_title = get_the_title($article_id);
                $image_url = get_the_post_thumbnail_url($article_id);
                // content
                $content = apply_filters( 'the_content', get_the_content() );
                $allowed_tags = '<p><a><strong><em><ul><ol><li><br>'; // Adjust as needed
                $clean_content = wp_strip_all_tags( strip_tags( $content, $allowed_tags ), true );
                $words = explode( ' ', $clean_content );
                $limited = implode( ' ', array_slice( $words, 0, 200 ) );
        ?>
            <div class="row bg-color-green mb-2">
                <div class="col-lg-4 col-12 px-0">
                    <a href="<?php echo get_permalink($article_id); ?>">
                        <img class="w-100 h-100 d-block main-img" src="<?php echo $image_url; ?>" alt="<?php echo $article_title; ?>">
                    </a>
                </div>
                <div class="col-8 d-lg-flex d-none px-0">
                    <div class="d-flex justify-content-between align-items-center flex-column">
                        <div class="p-5 pb-0 text-left">
                            <p>
                                <?php echo $limited; ?>
                            </p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center lower-part pb-5 px-5 w-100">
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="#">
                                    مرزي طاهر - كاتب لبناني
                                </a>
                                <p class="helvetica-regular" dir="ltr">
                                    <?php echo get_the_date('j M Y', $article_id); ?>
                                </p>
                            </div>
                            <div class="helvetica-regular">
                                <p dir="ltr">
                                <img class="heart" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/heart.svg" alt="heart">
                                <img class="heart-filled d-none" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/heart-filled.svg" alt="heart">
                                Like this post</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        <?php }
            wp_reset_postdata();
        } ?>
        <div class="row">
            <?php
                if ( $second_part->have_posts() ) {
                    while ( $second_part->have_posts() ) {
                    $second_part->the_post();
                    $article_id = get_the_ID();
                    $article_title = get_the_title($article_id);
                    $image_url = get_the_post_thumbnail_url($article_id);
            ?>
                <div class="col-lg-3 col-12 mb-2 px-1">
                    <a href="<?php echo get_permalink($article_id);?>" class="fade-in">
                        <img class="w-100 d-block single-article " src="<?php echo $image_url; ?>" alt="<?php echo $article_title; ?>">
                    </a>
                </div>
            <?php }
                wp_reset_postdata();
            }?>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12 mb-2 px-1">
                <div class="most-read-articles fade-in">
                    <h2 class="mb-3 mt-3 mb-lg-5 mt-lg-4">
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
                                    <div class="date helvetica-regular">
                                        4 jan 2025
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <?php for($i=0; $i<2; $i++){ ?>
                <div class="col-lg-3 col-12 mb-2 px-1">
                    <div class="openPopup fade-in" data-key="<?php echo $i; ?>">
                        <img class="w-100 d-block single-article-video" style="cursor: pointer;" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/cat-img.jpg" alt="berry">
                        <img class="arrow-play" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/play.ico" alt="play">
                    </div>
                    <div class="overlay videoOverlay-<?php echo $i; ?>">
                        <div class="position-relative w-100 h-100">
                            <div class="popup">
                                <button class="close-btn" data-key="<?php echo $i; ?>">
                                    <span aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#fff"><path d="M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z"/></svg>
                                    </span>
                                </button>
                                <iframe
                                        frameborder="0"
                                        width="360" height="640"
                                        allowfullscreen
                                        allow="autoplay; encrypted-media">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row">
            <?php for($i=2; $i<4; $i++){ ?>
                <div class="col-lg-3 col-12 mb-2 px-1">
                    <div class="openPopup fade-in" data-key="<?php echo $i; ?>">
                        <img class="w-100 d-block single-article-video" style="cursor: pointer;" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/cat-img.jpg" alt="berry">
                        <img class="arrow-play" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/play.ico" alt="play">
                    </div>
                    <div class="overlay videoOverlay-<?php echo $i; ?>">
                        <div class="position-relative w-100 h-100">
                            <div class="popup">
                                <button class="close-btn" data-key="<?php echo $i; ?>">
                                    <span aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#fff"><path d="M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z"/></svg>
                                    </span>
                                </button>
                                <iframe
                                        frameborder="0"
                                        width="360" height="640"
                                        allowfullscreen
                                        allow="autoplay; encrypted-media">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="col-lg-6 col-12">
                <div class="row">
                    <div class="col-lg-6 col-12 mb-2 px-1">
                        <a href="#" class="fade-in">
                            <img class="w-100 d-block single-article " src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/berry.jpg" alt="berry">
                        </a>
                    </div>
                    <div class="col-lg-6 col-12 mb-2 px-1">
                        <a href="#" class="fade-in">
                            <img class="w-100 d-block single-article " src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/berry.jpg" alt="berry">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-2 px-1">
                        <div class="subscribe" class="fade-in">
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
            <?php for($i=4; $i<8; $i++){ ?>
                <!-- <div class="col-lg-3 col-12 mb-2 px-1">
                    <div class="openPopup fade-in" data-key="<?php //echo $i; ?>">
                        <img class="w-100 d-block single-article" style="cursor: pointer;" src="<?php //echo get_template_directory_uri(); ?>/inc/assets/images/berry.jpg" alt="berry">
                        <img class="arrow-play" src="<?php //echo get_template_directory_uri(); ?>/inc/assets/icons/play.ico" alt="play">
                    </div>
                    <div class="overlay videoOverlay-<?php //echo $i; ?>">
                        <div class="position-relative w-100 h-100">
                            <div class="popup">
                                <button class="close-btn" data-key="<?php //echo $i; ?>">
                                    <span aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#fff"><path d="M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z"/></svg>
                                    </span>
                                </button>
                                <iframe
                                        frameborder="0"
                                        width="360" height="640"
                                        allowfullscreen
                                        allow="autoplay; encrypted-media">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-3 col-12 mb-2 px-1">
                    <a href="/test-1" class="fade-in">
                        <img class="w-100 d-block single-article " src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/berry.jpg" alt="berry">
                    </a>
                </div>
            <?php } ?>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12 mb-2 px-1">
                <div class="w-100 h-100 rassif-section fade-in">
                    <img class="w-100 d-block" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/rassif.jpg" alt="rassif">
                    <div class="title title-padding">
                        <h2>أبناء الرصيف: التقرير الكامل</h2>
                    </div>
                </div>
            </div>
            <?php for($i=0; $i<2; $i++){ ?>
                <div class="col-lg-3 col-12 mb-2 px-1">
                    <div class="openPopup fade-in" data-key="<?php echo $i; ?>">
                        <img class="w-100 d-block single-article-video" style="cursor: pointer;" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/cat-img.jpg" alt="berry">
                        <img class="arrow-play" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/play.ico" alt="play">
                    </div>
                    <div class="overlay videoOverlay-<?php echo $i; ?>">
                        <div class="position-relative w-100 h-100">
                            <div class="popup">
                                <button class="close-btn" data-key="<?php echo $i; ?>">
                                    <span aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#fff"><path d="M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z"/></svg>
                                    </span>
                                </button>
                                <iframe
                                        frameborder="0"
                                        width="360" height="640"
                                        allowfullscreen
                                        allow="autoplay; encrypted-media">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row">
            <?php for($i=9; $i<17; $i++){ ?>
                <div class="col-lg-3 col-12 mb-2 px-1">
                    <a href="/test-1" class="fade-in">
                        <img class="w-100 d-block single-article " src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/berry.jpg" alt="berry">
                    </a>
                </div>
            <?php } ?>
        </div>
        <div class="row pt-lg-5 pt-3">
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
                                <a href="#" class="fade-in">
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
        const youtubeShortslinks = [
            'https://www.youtube.com/embed/UqI3exV3YPM?autoplay=1',
            'https://www.youtube.com/embed/kx2_lOSBQ-Y?autoplay=1',
            'https://www.youtube.com/embed/bCpk5aFgVtg?autoplay=1',
            'https://www.youtube.com/embed/5LfiXvthTBA?autoplay=1',
            'https://www.youtube.com/embed/bCpk5aFgVtg?autoplay=1',
            'https://www.youtube.com/embed/5LfiXvthTBA?autoplay=1',
            'https://www.youtube.com/embed/bCpk5aFgVtg?autoplay=1',
            'https://www.youtube.com/embed/5LfiXvthTBA?autoplay=1',
            'https://www.youtube.com/embed/5LfiXvthTBA?autoplay=1',
            'https://www.youtube.com/embed/bCpk5aFgVtg?autoplay=1',
            'https://www.youtube.com/embed/5LfiXvthTBA?autoplay=1',
        ];
        $('.openPopup').click(function(){
            <?php if(isMob()){ ?>
                window.location.href = youtubeShortslinks[key];
            <?php } else { ?>
                let key = $(this).attr('data-key');
                $('.videoOverlay-' + key).css('display', 'block');
                $('.videoOverlay-' + key).find('iframe').attr('src', youtubeShortslinks[key]);
                $('html, body').addClass('hide_scroll');
            <?php } ?>
        });
        $('.close-btn').click(function(){
            var key = $(this).attr('data-key');
            $('.videoOverlay-' + key).css('display', 'none');
            $('.videoOverlay-' + key).find('iframe').attr('src', '');
            $('html, body').removeClass('hide_scroll');
        });
    })
</script>
<?php
get_footer();