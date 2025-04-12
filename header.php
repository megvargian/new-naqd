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

$general_fields = get_fields('options');
$header_fields = $general_fields['header'];
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
	<header id="masthead" class="header-container">

	</header>
</div>
<script>
jQuery(document).ready(function($) {
});
</script>
<div class="site-content">
