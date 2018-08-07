<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package elpuas
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div 
	class="preloader" 
	style="width:100vw; 
	height:100vh;
	-webkit-transition:transition: height .5s;
	transition: height .5s; background-image:url(https://www.elpuas.com/wp-content/uploads/2018/08/skull-icon-Asset-3.svg);
	display: block;
    background-repeat: no-repeat;
    background-size: 10%;
    background-position: center;
    background-blend-mode: soft-light;
	background-color: #4843b7;" 
	>
		&nbsp;
	</div>
	

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'elpuas' ); ?></a>
	<div id="content" class="site-content">
