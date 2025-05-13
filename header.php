<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="transparent-black-overlay d-none"></div>
<div id="page" class="site main_page_wrapper">
	<header id="masthead" class="header-container py-4">
		<nav>
			<div class="container-fluid px-4">
				<div class="row">
					<div class="col-1 d-flex justify-content-start">
						<a href="<?php echo home_url(); ?>">
							<img class="logo d-block" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/Naqd-logo-white.png" alt="naqd">
						</a>
					</div>
					<div class="col justify-content-center d-lg-flex d-none align-items-center">
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
					<div class="col">
						<button class="hamburger hamburger--collapse" type="button">
							<div class="menu_mobile_nav">
								<div class="hamburger_menu_icon">
									<div class="line"></div>
									<div class="line middle_line"></div>
									<div class="line"></div>
								</div>
							</div>
						</button>
					</div>
				</div>
				<?php if(is_front_page()){?>
					<div class="row justify-content-center d-lg-flex d-none">
						<div class="col-10">
							<nav>
								<ul class="d-flex justify-content-center align-items-center tag-list">
									<li>
										<a href="/category/لبنان/">
											لبنان
										</a>
									</li>
									<li>
										<a href="/category/لبنان/">
											العالم العربي
										</a>
									</li>
									<li>
										<a href="/category/لبنان/">
										العالم
										</a>
									</li>
									<li>
										<a href="/category/لبنان/">
										مجتمع
										</a>
									</li>
									<li>
										<a href="/category/لبنان/">
											تقارير
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				<?php } ?>
			</div>
			<div id="menu_mobile" class="menu_on_mobile">
				<div class="menu_on_mobile_wrapper">
					<div class="menu_on_mobile_inner_wrapper" style="position: relative;">
						<div class="search-form">
							<form action="/">
								<div class="position-relative">
									<input placeholder="يبحث" type="text" required>
									<button>
										<img src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/search.svg" alt="search">
									</button>
								</div>
							</form>
						</div>
						<div>
							<ul>
								<li>
									<a class="d-block page_font animated_menu_el" href="/category/لبنان/">
										أقلًا منا
									</a>
								</li>
								<li>
									<a class="d-block page_font animated_menu_el" href="/category/لبنان/">
										منشورات
									</a>
								</li>
								<li>
									<a class="d-block page_font animated_menu_el" href="/category/لبنان/">
										شاهد
									</a>
								</li>
								<li>
									<a class="d-block page_font animated_menu_el" href="/category/لبنان/">
										نشرة نقد
									</a>
								</li>
							</ul>
							<div class="green-border"></div>
							<ul>
								<li>
									<a class="d-block page_font animated_menu_el" href="/personal-info">
										اكتبوا معنا
									</a>
								</li>
								<li>
									<a class="d-block page_font animated_menu_el" href="/about-and-contact-us">
										عن نقد
									</a>
								</li>
								<li>
									<a class="d-block page_font animated_menu_el" href="/about-and-contact-us#contact-us">
										اتصلوا بنا
									</a>
								</li>
							</ul>
							<ul class="social-media-icons pt-3">
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
				</div>
			</div>
		</nav>
	</header>
</div>
<script>
jQuery(document).ready(function($) {
	$('.menu_mobile_nav').click(function(event) {
		$(this).toggleClass('active');
		$('html, body').toggleClass('hide_scroll');
		$('.menu_on_mobile').toggleClass('active');
		$('.transparent-black-overlay').toggleClass('d-none');
	});
	$(document).on("click", function(event) {
		if (!$(event.target).closest(".menu_on_mobile").length && !$(event.target).closest(".menu_mobile_nav").length ) {
			$('.menu_mobile_nav').removeClass('active');
			$('html, body').removeClass('hide_scroll');
			$('.menu_on_mobile').removeClass('active');
			$('.transparent-black-overlay').addClass('d-none');
		}
	});
	function isInViewport(element) {
		const rect = element.getBoundingClientRect();
		return rect.top <= window.innerHeight && rect.bottom >= 0;
	}
	function checkFadeIn() {
		$('.fade-in').each(function () {
			if (isInViewport(this)) {
				$(this).addClass('visible');
			} else {
				$(this).removeClass('visible');
			}
		});
	}
	$(window).on('resize', checkFadeIn);
	checkFadeIn(); // Run on page load too
	$(window).on('scroll', function () {
		checkFadeIn();
	});
});
</script>
<div class="site-content">
