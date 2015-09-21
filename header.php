<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package siteorigin-north
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'siteorigin-north' ); ?></a>

	<header id="masthead" class="site-header layout-standard" role="banner">
		<div class="container">

			<div class="container-inner">
				<div class="site-branding">
					<?php siteorigin_north_display_logo() ?>
					<?php if( siteorigin_setting('branding_site_description') ) : ?>
						<p class="site-description"><?php bloginfo( 'description' ); ?></p>
					<?php endif ?>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">

					<a href="#menu" id="mobile-menu-button">
						<svg version="1.1" id="menu-icon" class="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
							<path class="line line-1" d="M3,5h18c0.3,0,0.5,0.1,0.7,0.3C21.9,5.5,22,5.7,22,6s-0.1,0.5-0.3,0.7C21.5,6.9,21.3,7,21,7H3 C2.7,7,2.5,6.9,2.3,6.7C2.1,6.5,2,6.3,2,6s0.1-0.5,0.3-0.7C2.5,5.1,2.7,5,3,5z"/>
							<path class="line line-2" d="M3,11h18c0.3,0,0.5,0.1,0.7,0.3S22,11.7,22,12s-0.1,0.5-0.3,0.7S21.3,13,21,13H3c-0.3,0-0.5-0.1-0.7-0.3 C2.1,12.5,2,12.3,2,12s0.1-0.5,0.3-0.7C2.5,11.1,2.7,11,3,11z"/>
							<path class="line line-3" d="M3,17h18c0.3,0,0.5,0.1,0.7,0.3S22,17.7,22,18s-0.1,0.5-0.3,0.7S21.3,19,21,19H3c-0.3,0-0.5-0.1-0.7-0.3 C2.1,18.5,2,18.3,2,18s0.1-0.5,0.3-0.7C2.5,17.1,2.7,17,3,17z"/>
						</svg>
						<?php echo esc_html( siteorigin_setting('responsive_menu_text') ) ?>
					</a>

					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</div>

		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div class="container">
