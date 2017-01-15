<?php 

	if ( ! isset ($content_width) ) {
		$content_width = 660;
	}
	
	
	function simonCurwenBlogWP_setup () {
		
		add_theme_support('automatic-feed-links');
		add_theme_support('title-tag');
	
	
	// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'Simon Curwen Blog' ),
) );

		
	}
	
	add_action ('after_setup_theme', 'simonCurwenBlogWP_setup');
	
	
	
	
	
	
	function simonCurwenBlog_scripts() {
		/* adding the styles */
		
		wp_enqueue_style('bootstrap-core', 
		get_template_directory_uri() .'/css/boostrap.css;' );
		
		wp_enqueue_style('custom', 
		get_template_directory_uri() .'/style.css;' );
		
		
		/* adding the scripts */
		
		wp_enqueue_script( 'bootstrap-js',
		get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), true );
		
		wp_enqueue_script( 'back-to-top-btn-js',
		get_template_directory_uri() . '/js/back-to-top-btn.js', array('jquery'), true );
		
	}

	add_action ('wp_enqueue_scripts', 'simonCurwenBlog_scripts');

?>