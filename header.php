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
$tags = get_tags();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
	<style>
		<?php
			foreach ( $tags as $key => $tag ) {
		?>
			.header-container .tag-list li:nth-child(<?php echo $key + 1; ?>) button:hover{
				border-color: <?php echo get_field('border_color', 'post_tag_' . $tag->term_id);?>;
			}
			.header-container .tag-list li:nth-child(<?php echo $key + 1; ?>) button.active{
				border-color: <?php echo get_field('border_color', 'post_tag_' . $tag->term_id);?>;
			}
		<?php } ?>
	</style>
</head>
<body <?php body_class(); ?>>
<div class="transparent-black-overlay d-none"></div>
<div id="page" class="site main_page_wrapper">
	<?php if(is_singular('post')){ ?>
		<div id="progressBarContainer">
			<div id="progressBar"></div>
		</div>
	<?php } ?>
	<header id="masthead" class="header-container py-3">
		<nav>
			<div class="container-fluid px-4">
				<div class="row">
					<div class="col d-flex justify-content-start">
						<a href="<?php echo home_url(); ?>">
							<img class="logo d-block" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/Naqd-logo-white.png" alt="naqd">
						</a>
					</div>
					<?php //if(!is_singular('post')){ ?>
						<div class="col-9 justify-content-center d-lg-flex d-none align-items-center">
							<div class="d-block">
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
								<nav class="d-block mt-2">
									<ul class="d-flex justify-content-start align-items-center tag-list">
										<?php
											foreach ( $tags as $tag ) {
										?>
												<li>
													<button class="single-tag tag-<?php echo $tag->term_id ?>" data-tagId="<?php echo $tag->term_id ?>">
														<?php echo esc_html( $tag->name ); ?>
													</button>
												</li>
										<?php } ?>
									</ul>
								</nav>
							</div>
						</div>
					<?php //} ?>
					<div class="col d-flex justify-content-end align-items-center">
						<!-- <label class="toggle">
							<input type="checkbox" id="theme-toggle">
							<div class="slider">
								<div class="icon sun">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="orange" width="20" height="20">
									<path d="M12 18a6 6 0 100-12 6 6 0 000 12z"/>
									<path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M4.93 19.07l1.41-1.41M17.66 6.34l1.41-1.41"/>
								</svg>
								</div>
								<div class="icon moon">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="20" height="20">
									<path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"/>
								</svg>
								</div>
							</div>
						</label> -->
						<label class="switch">
							<input type="checkbox" id="changeTheme">
							<span class="slider">
								<span class="label-text EN helvetica-regular">En</span>
								<span class="label-text AR d-none helvetica-regular">Ar</span>
							</span>
						</label>
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
				<!-- <div class="row justify-content-center d-lg-flex d-none">
					<div class="col-10">
						<nav>
							<ul class="d-flex justify-content-center align-items-center tag-list">
								<?php
									//foreach ( $tags as $tag ) {
								?>
										<li>
											<button class="single-tag tag-<?php //echo $tag->term_id ?>" data-tagId="<?php // echo $tag->term_id ?>">
												<?php // echo esc_html( $tag->name ); ?>
											</button>
										</li>
								<?php // } ?>
							</ul>
						</nav>
					</div>
				</div> -->
			</div>
			<div id="menu_mobile" class="menu_on_mobile">
				<div class="menu_on_mobile_wrapper">
					<div class="menu_on_mobile_inner_wrapper" style="position: relative;">
						<div class="search-form">
							<form action="/search-articles">
								<div class="position-relative">
									<input placeholder="يبحث" type="search" required name="searchArticle">
									<button>
										<img src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/search.svg" alt="search">
									</button>
								</div>
							</form>
						</div>
						<div>
							<ul>
								<li>
									<a class="d-block page_font animated_menu_el" href="/category/أقلًا-منا/">
										أقلًا منا
									</a>
								</li>
								<li>
									<a class="d-block page_font animated_menu_el" href="/category/منشورات/">
										منشورات
									</a>
								</li>
								<li>
									<a class="d-block page_font animated_menu_el" href="/videos/">
										شاهد
									</a>
								</li>
								<li>
									<a class="d-block page_font animated_menu_el" href="/category/نشرة-نقد/">
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
	$('#changeTheme').click(function(){
		$('.EN').toggleClass('d-none');
		$('.AR').toggleClass('d-none');
	})
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
	$('.single-tag').click(function() {
		<?php if(!is_front_page()){?>
			window.location.href = '<?php echo get_home_url(); ?>/?tagId=' + $(this).attr('data-tagId');
		<?php }?>
		$(this).toggleClass('active');
		var activeTags = [];
		$('.single-tag.active').each(function() {
			activeTags.push($(this).attr('data-tagId'));
		});
		if(activeTags.length !== 0){
			filterPostsBasedTags(activeTags);
		} else {
			window.location.href = '<?php echo get_home_url(); ?>';
		}
	})
	function filterPostsBasedTags(activeTags) {
		$.ajax({
			type: 'POST',
			url: '<?php echo admin_url('admin-ajax.php'); ?>',
			data: {
				action: 'filter_post_based_tags',
				tags: activeTags,
			},
			success: function(response) {
				if (response === ''){
					// $('#load-more-button-cat').hide();
				}
				if (response) {
					$('#filter-container').replaceWith(response);
				} else {
					// No more posts to load
					// $('#load-more-button-cat').hide();
				}
			},
		});
	}
	// filter page after redirect
	<?php if(isset($_GET['tagId'])){?>
		$('.single-tag[data-tagId="<?php echo $_GET['tagId']; ?>"]').click();
	<?php }?>
});
</script>
<!-- <script>
    const toggle = document.getElementById('theme-toggle');
    const body = document.body;

	toggle.addEventListener('change', () => {
		// body.classList.toggle('dark');
		body.classList.toggle('light-theme');
	});
</script> -->
<div class="site-content">
