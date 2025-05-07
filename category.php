<?php
get_header();
?>
<section class="categories">
    <div class="container">
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
    });
</script>
<?php
get_footer();