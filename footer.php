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
</body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W399GS3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</html>
