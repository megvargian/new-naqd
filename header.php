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
<body <?php body_class(); ?> style="<?php echo is_front_page() ? 'overflow: hidden;' : ''; ?>">
<div id="page" class="site main_page_wrapper">
	<header id="masthead" class="header-container py-4">
		<div class="container px-4">
			<div class="row">
				<div class="col-1 d-flex justify-content-start">
					<img class="logo" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/Naqd-logo-white.png" alt="naqd">
				</div>
				<div class="col justify-content-center d-flex align-items-center">
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
			<div class="row justify-content-center">
				<div class="col-10">
					<nav>
						<ul class="d-flex justify-content-center align-items-center tag-list">
							<li>
								<a href="#">
									لبنان
								</a>
							</li>
							<li>
								<a href="#">
								    العالم العربي
								</a>
							</li>
							<li>
								<a href="#">
								   العالم
								</a>
							</li>
							<li>
								<a href="#">
								   مجتمع
								</a>
							</li>
							<li>
								<a href="#">
									تقارير
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
</div>
<script>
jQuery(document).ready(function($) {
	$('.menu_mobile_nav').click(function(event) {
		$(this).toggleClass('active');
		$('html, body').toggleClass('hide_scroll');
	});
});
</script>
<div class="site-content">
