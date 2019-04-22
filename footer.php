	</div><!-- #content -->

	<?php  
	$email_address = get_field('email_address','option');
	?>
	<footer id="colophon" class="site-footer clear" role="contentinfo">
		<div class="wrapper">
			<?php if ($email_address) { ?>
				<span class="foot-info"><a href="mailto:<?php echo antispambot($email_address,1); ?>"><?php echo antispambot($email_address); ?></a></span>
			<?php } ?>
			<?php wp_nav_menu( array( 'menu' => 'Footer Menu', 'menu_id' => 'footer--menu', 'menu_class'=>'footer-menu menu', 'container'=>false ) ); ?>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

<?php
global $post;
$pageID = ( isset($post->ID) ) ? $post->ID : 0;
if($pageID==9) { /* Features and Amenities Page ID */ ?> 
	<script type="text/javascript" src="<?php echo get_bloginfo('template_url') ?>/assets/js/vendors/jquery.mobile.min.js"></script>
	<script type="text/javascript">
	jQuery(document).ready(function ($) {
		
	});
	</script>
<?php } ?>

</body>
</html>
