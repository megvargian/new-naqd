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
		<div class="container-fluid px-4">
			<div class="row">
				<div class="col-2 d-flex justify-content-start">
					<img class="logo" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/Naqd-logo-white.png" alt="naqd">
				</div>
				<div class="col-4">
					<ul class="social-media-icons">
						<li class="mx-3">
							<img src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/insta-icon.svg" alt="insta">
						</li>
						<li class="mx-3">
							<img src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/insta-icon.svg" alt="insta">
						</li>
						<li class="mx-3">
							<img src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/insta-icon.svg" alt="insta">
						</li>
						<li class="mx-3">
							<img src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/insta-icon.svg" alt="insta">
						</li>
						<li class="mx-3">
							<img src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/insta-icon.svg" alt="insta">
						</li>
						<li class="mx-3">
							<img src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/insta-icon.svg" alt="insta">
						</li>
					</ul>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-10">
					<nav>
						<ul class="d-flex justify-content-center align-itmes-center tag-list">
							<li>
								<a href="#">
									لبنان
								</a>
							</li>
							<li>
								<a href="#">
									لبنان
								</a>
							</li>
							<li>
								<a href="#">
									لبنان
								</a>
							</li>
							<li>
								<a href="#">
									لبنان
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
});
</script>
<div class="site-content">
