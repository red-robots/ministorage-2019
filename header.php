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
<link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
<script defer src="<?php bloginfo( 'template_url' ); ?>/assets/svg-with-js/js/fontawesome-all.js"></script>
<?php wp_head(); ?>
<?php 
$analytics = get_field('google_analytics','option'); 
echo $analytics;
?>

<!-- Hotjar Tracking Code for https://ministoragecarolina.com/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1322501,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

<script type="application/ld+json">
{

"@context" : "http://schema.org",

"@type" : "Organization",

"name" : "The Mini Storage Center",

"image" : "http://ministoragecarolina.com/bw/wp-content/themes/ministorage-carolina/images/logo.png",

"url" : "https://ministoragecarolina.com/",

"parentOrganization": 

[

{

"@type": "LocalBusiness",

"name" : "The Mini Storage Center",

"address": {

"@type": "PostalAddress",

"addressLocality": "Charlotte",

"addressRegion": "NC",

"postalCode": "28208",

"streetAddress": "2318 Freedom Dr"

},

"telephone" : "(704) 393-1425",

"email" : "fd@ministoragecarolina.com",

"image" : "http://ministoragecarolina.com/bw/wp-content/themes/ministorage-carolina/images/logo.png"

},

{

"@type": "LocalBusiness",

"name" : "The Mini Storage Center",

"address": {

"@type": "PostalAddress",

"addressLocality": "Charlotte",

"addressRegion": "NC",

"postalCode": "28205",

"streetAddress": "1515 E. Sugar Creek Rd"

},

"telephone" : "(704) 375-7983",

"email" : "sc@ministoragecarolina.com",

"image" : "http://ministoragecarolina.com/bw/wp-content/themes/ministorage-carolina/images/logo.png"

},

{

"@type": "LocalBusiness",

"name" : "The Mini Storage Center",

"address": {

"@type": "PostalAddress",

"addressLocality": "Charlotte",

"addressRegion": "NC",

"postalCode": "28205",

"streetAddress": "4500 Monroe Rd"

},

"telephone" : "(704) 333-7064",

"email" : "mr@ministoragecarolina.com",

"image" : "http://ministoragecarolina.com/bw/wp-content/themes/ministorage-carolina/images/logo.png"

},

{

"@type": "LocalBusiness",

"name" : "The Mini Storage Center",

"address": {

"@type": "PostalAddress",

"addressLocality": "Charlotte",

"addressRegion": "NC",

"postalCode": "28209",

"streetAddress": "4475 South Blvd"

},

"telephone" : "(704) 523-1156",

"email" : "sb@ministoragecarolina.com",

"image" : "http://ministoragecarolina.com/bw/wp-content/themes/ministorage-carolina/images/logo.png"

},

{

"@type": "LocalBusiness",

"name" : "The Mini Storage Center",

"address": {

"@type": "PostalAddress",

"addressLocality": "Charlotte",

"addressRegion": "NC",

"postalCode": "28273",

"streetAddress": "700-A Westinghouse Blvd"

},

"telephone" : "(704) 588-3915",

"email" : "wb@ministoragecarolina.com",

"image" : "http://ministoragecarolina.com/bw/wp-content/themes/ministorage-carolina/images/logo.png"

},

{

"@type": "LocalBusiness",

"name" : "The Mini Storage Center",

"address": {

"@type": "PostalAddress",

"addressLocality": "Columbia",

"addressRegion": "SC",

"postalCode": "29169",

"streetAddress": "730 Chris Dr"

},

"telephone" : "(803) 794-4228",

"image" : "http://ministoragecarolina.com/bw/wp-content/themes/ministorage-carolina/images/logo.png"

},

{

"@type": "LocalBusiness",

"name" : "501 Mini Storage",

"address": {

"@type": "PostalAddress",

"addressLocality": "Conway",

"addressRegion": "SC",

"postalCode": "29526",

"streetAddress": "490 University Forest Dr"

},

"telephone" : "(843) 349-9800",

"email" : "501@ministoragecarolina.com",

"image" : "http://ministoragecarolina.com/bw/wp-content/themes/ministorage-carolina/images/logo.png"

},

{

"@type": "LocalBusiness",

"name" : "501 Mini Storage",

"address": {

"@type": "PostalAddress",

"addressLocality": "Conway",

"addressRegion": "SC",

"postalCode": "29526",

"streetAddress": "1488 Hwy 501"

},

"telephone" : "(843) 349-9800",

"email" : "501@ministoragecarolina.com",

"image" : "http://ministoragecarolina.com/bw/wp-content/themes/ministorage-carolina/images/logo.png"

},

{

"@type": "LocalBusiness",

"name" : "501 Mini Storage",

"address": {

"@type": "PostalAddress",

"addressLocality": "Conway",

"addressRegion": "SC",

"postalCode": "29526",

"streetAddress": "1480 Hwy 501 Bus"

},

"telephone" : "(843) 349-9800",

"email" : "501@ministoragecarolina.com",

"image" : "http://ministoragecarolina.com/bw/wp-content/themes/ministorage-carolina/images/logo.png"

},

{

"@type": "LocalBusiness",

"name" : "Garden City Self Storage",

"address": {

"@type": "PostalAddress",

"addressLocality": "Garden City",

"addressRegion": "SC",

"postalCode": "29576",

"streetAddress": "12053 Hwy 17 Bypass"

},

"telephone" : "(843) 651-0440",

"email" : "gc@ministoragecarolina.com",

"image" : "http://ministoragecarolina.com/bw/wp-content/themes/ministorage-carolina/images/logo.png"

},

{

"@type": "LocalBusiness",

"name" : "Garden City Storage",

"address": {

"@type": "PostalAddress",

"addressLocality": "Garden City",

"addressRegion": "SC",

"postalCode": "29576",

"streetAddress": "605 Boundary Ave"

},

"telephone" : "(843) 651-0440",

"email" : "gc@ministoragecarolina.com",

"image" : "http://ministoragecarolina.com/bw/wp-content/themes/ministorage-carolina/images/logo.png"

},

{

"@type": "LocalBusiness",

"name" : "Garden City Storage",

"address": {

"@type": "PostalAddress",

"addressLocality": "Garden City",

"addressRegion": "SC",

"postalCode": "29576",

"streetAddress": "565 Pine Ave"

},

"telephone" : "(843) 651-0440",

"email" : "gc@ministoragecarolina.com",

"image" : "http://ministoragecarolina.com/bw/wp-content/themes/ministorage-carolina/images/logo.png"

},

{

"@type": "LocalBusiness",

"name" : "Coastal Storage & Retail",

"address": {

"@type": "PostalAddress",

"addressLocality": "Myrtle Beach",

"addressRegion": "SC",

"postalCode": "29588",

"streetAddress": "Coastal Storage & Retail"

},

"telephone" : "(843) 650-6802",

"email" : "707@ministoragecarolina.com",

"image" : "http://ministoragecarolina.com/bw/wp-content/themes/ministorage-carolina/images/logo.png"

},

{

"@type": "LocalBusiness",

"name" : "The Mini Storage Center",

"address": {

"@type": "PostalAddress",

"addressLocality": "Rock Hill",

"addressRegion": "SC",

"postalCode": "29732",

"streetAddress": "1370 Constitution Blvd"

},

"telephone" : "(803) 985-3660",

"email" : "rh@ministoragecarolina.com",

"image" : "http://ministoragecarolina.com/bw/wp-content/themes/ministorage-carolina/images/logo.png"

},

{

"@type": "LocalBusiness",

"name" : "The Mini Storage Center",

"address": {

"@type": "PostalAddress",

"addressLocality": "Spartanburg",

"addressRegion": "SC",

"postalCode": "29301",

"streetAddress": "350 E. Blackstock Rd"

},

"telephone" : "(864) 587-9515",

"email" : "sp@ministoragecarolina.com",

"image" : "http://ministoragecarolina.com/bw/wp-content/themes/ministorage-carolina/images/logo.png"

}

]

}
</script>
</head>

<?php  
$page_template = ( is_page_template() && get_page_template_slug()) ? basename(get_page_template_slug()) : '';
$page_template = ($page_template) ? str_replace('.php','',$page_template) : '';
$page_has_navigation = ($page_template && $page_template=='page-nonavigation') ? false : true;
?>
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

		        <?php if ($page_has_navigation) { ?>
		        	
		        
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

				<?php } ?>
			</div>
		</div><!-- wrapper -->
	</header><!-- #masthead -->

	<div id="content" class="site-content clear">
