<?php
/**
 * Enqueue scripts and styles.
 */
function acstarter_scripts() {
	wp_enqueue_style( 'acstarter-style', get_template_directory_uri() . '/style.min.css' );

	wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', false, '1.10.2', true);
		wp_enqueue_script('jquery');

	

	wp_enqueue_script( 
			'acstarter-blocks', 
			get_template_directory_uri() . '/assets/js/vendors.min.js', 
			array(), '20120206', 
			true 
		);

	wp_enqueue_script( 
			'jsselect2', 
			get_template_directory_uri() . '/assets/js/vendors/select2.full.min.js', 
			array(), '20190301', 
			true 
		);

	wp_enqueue_script( 
			'resize_sensor', 
			get_template_directory_uri() . '/assets/js/vendors/ResizeSensor.js', 
			array(), '20190301', 
			true 
		);

	wp_enqueue_script( 
			'sticky_sidebar', 
			get_template_directory_uri() . '/assets/js/vendors/sticky-sidebar.js', 
			array(), '20190301', 
			true 
		);

	wp_enqueue_script( 
			'acstarter-custom', 
			get_template_directory_uri() . '/assets/js/custom.js', 
			array(), '20120206', 
			true 
		);

	wp_enqueue_script( 
		'font-awesome', 
		'https://use.fontawesome.com/8f931eabc1.js', 
		array(), '20180424', 
		true 
	);



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'acstarter_scripts' );