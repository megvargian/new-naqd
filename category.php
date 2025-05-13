<?php
get_header();
?>
<section class="categories">
    <div class="container">
        <div class="row py-4 position-relative">
            <div class="swiper MainCatVideo">
                <div class="swiper-wrapper">
                    <?php for($i=0; $i<8; $i++){ ?>
                        <div class="swiper-slide">
                            <div class="openPopup fade-in" data-key="<?php echo $i; ?>">
                                <img class="w-100 d-block single-article-video" style="cursor: pointer;" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/cat-img.jpg" alt="berry">
                                <img class="arrow-play" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/play.ico" alt="play">
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="swiper-button-prev swiper-button-prev-main-cat"></div>
            <div class="swiper-button-next swiper-button-next-main-cat"></div>
        </div>
        <?php for($i=0; $i<8; $i++){ ?>
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
        <?php } ?>
        <div class="row py-4 " style="border-top: 1px solid #5b5b5b">
            <ul class="d-flex justify-content-start align-items-center tabs">
                <li>
                    <a href="#">
                        العالم العربي
                    </a>
                </li>
                <li>
                    <a href="#">
                        لبنان
                    </a>
                </li>
                <li>
                    <a href="#">
                        من هون نحن
                    </a>
                </li>
                <li>
                    <a href="#">
                        ناس
                    </a>
                </li>
                <li>
                    <a href="#">
                        برامج
                    </a>
                </li>
            </ul>
        </div>
        <div class="row">
            <?php for($i=9; $i<17; $i++){ ?>
                <div class="col-lg-3 col-12 mb-3 px-2">
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
            <div class="col-lg-6 col-12 mb-3 px-2">
                <div class="most-read-articles fade-in">
                    <h2 class="mb-3">
                        الأكثر مشاهدة
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
                    <?php for($i=18; $i<20; $i++){ ?>
                        <div class="col-lg-6 col-12 mb-3 px-2">
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
            </div>
        </div>
        <div class="row">
            <?php for($i=21; $i<25; $i++){ ?>
                <div class="col-lg-3 col-12 mb-3 px-2">
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
            spaceBetween: 16,
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
					spaceBetween: 16,
				}
			}
        });
        swiper.changeLanguageDirection('rtl');
        const youtubeShortslinks = [
            'https://www.youtube.com/embed/UqI3exV3YPM?autoplay=1',
            'https://www.youtube.com/embed/kx2_lOSBQ-Y?autoplay=1',
            'https://www.youtube.com/embed/bCpk5aFgVtg?autoplay=1',
            'https://www.youtube.com/embed/5LfiXvthTBA?autoplay=1',
            'https://www.youtube.com/embed/UqI3exV3YPM?autoplay=1',
            'https://www.youtube.com/embed/kx2_lOSBQ-Y?autoplay=1',
            'https://www.youtube.com/embed/bCpk5aFgVtg?autoplay=1',
            'https://www.youtube.com/embed/5LfiXvthTBA?autoplay=1',
            'https://www.youtube.com/embed/UqI3exV3YPM?autoplay=1',
            'https://www.youtube.com/embed/kx2_lOSBQ-Y?autoplay=1',
            'https://www.youtube.com/embed/bCpk5aFgVtg?autoplay=1',
            'https://www.youtube.com/embed/5LfiXvthTBA?autoplay=1',
            'https://www.youtube.com/embed/UqI3exV3YPM?autoplay=1',
            'https://www.youtube.com/embed/kx2_lOSBQ-Y?autoplay=1',
            'https://www.youtube.com/embed/bCpk5aFgVtg?autoplay=1',
            'https://www.youtube.com/embed/5LfiXvthTBA?autoplay=1',
            'https://www.youtube.com/embed/UqI3exV3YPM?autoplay=1',
            'https://www.youtube.com/embed/kx2_lOSBQ-Y?autoplay=1',
            'https://www.youtube.com/embed/bCpk5aFgVtg?autoplay=1',
            'https://www.youtube.com/embed/5LfiXvthTBA?autoplay=1',
            'https://www.youtube.com/embed/UqI3exV3YPM?autoplay=1',
            'https://www.youtube.com/embed/kx2_lOSBQ-Y?autoplay=1',
            'https://www.youtube.com/embed/bCpk5aFgVtg?autoplay=1',
            'https://www.youtube.com/embed/5LfiXvthTBA?autoplay=1',
            'https://www.youtube.com/embed/UqI3exV3YPM?autoplay=1',
            'https://www.youtube.com/embed/kx2_lOSBQ-Y?autoplay=1',
            'https://www.youtube.com/embed/bCpk5aFgVtg?autoplay=1',
            'https://www.youtube.com/embed/5LfiXvthTBA?autoplay=1',
            'https://www.youtube.com/embed/UqI3exV3YPM?autoplay=1',
            'https://www.youtube.com/embed/kx2_lOSBQ-Y?autoplay=1',
            'https://www.youtube.com/embed/bCpk5aFgVtg?autoplay=1',
            'https://www.youtube.com/embed/5LfiXvthTBA?autoplay=1',
            'https://www.youtube.com/embed/kx2_lOSBQ-Y?autoplay=1',
            'https://www.youtube.com/embed/bCpk5aFgVtg?autoplay=1',
            'https://www.youtube.com/embed/5LfiXvthTBA?autoplay=1',
            'https://www.youtube.com/embed/UqI3exV3YPM?autoplay=1',
            'https://www.youtube.com/embed/kx2_lOSBQ-Y?autoplay=1',
            'https://www.youtube.com/embed/bCpk5aFgVtg?autoplay=1',
            'https://www.youtube.com/embed/5LfiXvthTBA?autoplay=1',
            'https://www.youtube.com/embed/kx2_lOSBQ-Y?autoplay=1',
            'https://www.youtube.com/embed/bCpk5aFgVtg?autoplay=1',
            'https://www.youtube.com/embed/5LfiXvthTBA?autoplay=1',
            'https://www.youtube.com/embed/UqI3exV3YPM?autoplay=1',
            'https://www.youtube.com/embed/kx2_lOSBQ-Y?autoplay=1',
            'https://www.youtube.com/embed/bCpk5aFgVtg?autoplay=1',
            'https://www.youtube.com/embed/5LfiXvthTBA?autoplay=1',
            'https://www.youtube.com/embed/kx2_lOSBQ-Y?autoplay=1',
            'https://www.youtube.com/embed/bCpk5aFgVtg?autoplay=1',
            'https://www.youtube.com/embed/5LfiXvthTBA?autoplay=1',
            'https://www.youtube.com/embed/UqI3exV3YPM?autoplay=1',
            'https://www.youtube.com/embed/kx2_lOSBQ-Y?autoplay=1',
            'https://www.youtube.com/embed/bCpk5aFgVtg?autoplay=1',
            'https://www.youtube.com/embed/5LfiXvthTBA?autoplay=1',
            'https://www.youtube.com/embed/bCpk5aFgVtg?autoplay=1',
            'https://www.youtube.com/embed/5LfiXvthTBA?autoplay=1',
            'https://www.youtube.com/embed/kx2_lOSBQ-Y?autoplay=1',
            'https://www.youtube.com/embed/bCpk5aFgVtg?autoplay=1',
            'https://www.youtube.com/embed/5LfiXvthTBA?autoplay=1',
            'https://www.youtube.com/embed/UqI3exV3YPM?autoplay=1',
            'https://www.youtube.com/embed/kx2_lOSBQ-Y?autoplay=1',
            'https://www.youtube.com/embed/bCpk5aFgVtg?autoplay=1',
            'https://www.youtube.com/embed/5LfiXvthTBA?autoplay=1',
            'https://www.youtube.com/embed/bCpk5aFgVtg?autoplay=1',
            'https://www.youtube.com/embed/5LfiXvthTBA?autoplay=1',
            'https://www.youtube.com/embed/kx2_lOSBQ-Y?autoplay=1',
            'https://www.youtube.com/embed/bCpk5aFgVtg?autoplay=1',
            'https://www.youtube.com/embed/5LfiXvthTBA?autoplay=1',
            'https://www.youtube.com/embed/UqI3exV3YPM?autoplay=1',
            'https://www.youtube.com/embed/kx2_lOSBQ-Y?autoplay=1',
            'https://www.youtube.com/embed/bCpk5aFgVtg?autoplay=1',
            'https://www.youtube.com/embed/5LfiXvthTBA?autoplay=1',
        ]
        $('.openPopup').click(function(){
            let key = $(this).attr('data-key');
            $('.videoOverlay-' + key).css('display', 'block');
            $('.videoOverlay-' + key).find('iframe').attr('src', youtubeShortslinks[key]);
        })
        $('.close-btn').click(function(){
            var key = $(this).attr('data-key');
            $('.videoOverlay-' + key).css('display', 'none');
            $('.videoOverlay-' + key).find('iframe').attr('src', '');
        })
        var swiperMainCat = new Swiper(".MainCatVideo", {
            slidesPerView: 4,
            spaceBetween: 16,
            grabCursor: true,
            loop: true,
            navigation: {
                nextEl: ".swiper-button-prev-main-cat",
                prevEl: ".swiper-button-next-main-cat",
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
					spaceBetween: 16,
				}
			}
        });
        swiper.changeLanguageDirection('rtl');
    });
</script>
<?php
get_footer();