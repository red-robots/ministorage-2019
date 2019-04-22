<?php
/**
 * The header for theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script defer src="<?php bloginfo( 'template_url' ); ?>/assets/svg-with-js/js/fontawesome-all.js"></script>
<?php wp_head(); ?>
<?php $analytics = get_field('google_analytics','option'); ?>
<?php if ($analytics) { ?><?php echo $analytics ?><?php } ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header clear" role="banner">
		<div class="wrapper clear">
			<div class="innerwrap clear">
				<?php if( get_custom_logo() ) { ?>
		            <div class="logo">
		            	<?php the_custom_logo(); ?>
		            </div>
		        <?php } else { ?>
		            <h1 class="logo">
			            <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
		            </h1>
		        <?php } ?>
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<span id="toggleMenu" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'MENU', 'acstarter' ); ?><span><i></i></span></span>
					<?php 
						wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'container_class'=>'main-menu-wrapper desktop','link_before'=>'<span>','link_after'=>'</span>' ) ); 
						wp_nav_menu( array( 'menu' => 'Mobile Menu', 'menu_id' => 'mobile-primary-menu', 'container_class'=>'main-menu-wrapper mobile','link_before'=>'<span>','link_after'=>'</span>' ) ); 
					?>
					<?php 
						$hdr_button_name = get_field('header_button_name','option'); 
						$hdr_button_link = get_field('header_button_link','option'); 
					?>
					<?php if ($hdr_button_name && $hdr_button_link) { ?>
						<a class="header-button" href="<?php echo $hdr_button_link ?>"><span><?php echo $hdr_button_name ?></span></a>
					<?php } ?>
				</nav><!-- #site-navigation -->
			</div>
		</div><!-- wrapper -->
	</header><!-- #masthead -->

	<div id="content" class="site-content clear">
