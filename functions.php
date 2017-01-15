<?php 

	if ( ! isset ($content_width) ) {
		$content_width = 660;
	}
	
	
	function simonCurwenBlog_setup () {
		
		add_theme_support('automatic-feed-links');
		add_theme_support('title-tag');
	
	
	// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'SimonCurwenBlog' ),
) );

		
	}
	
	add_action ('after_setup_theme', 'simonCurwenBlog_setup');
	
	
	
	
	
	
	function simonCurwenBlog_scripts() {
		/* adding the styles */
		
		wp_enqueue_style('bootstrap-core', 
		get_template_directory_uri() .'/css/boostrap.css' );
		
		wp_enqueue_style('custom', 
		get_template_directory_uri() .'/style.css' );
		
		wp_enqueue_style('my-google-fonts', '//fonts.googleapis.com/css?family=Ubuntu:200,300,300italic', true );
		
		
		/* adding the scripts */
		
		wp_enqueue_script( 'bootstrap-js',
		get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), true );
		
		wp_enqueue_script( 'back-to-top-btn-js',
		get_template_directory_uri() . '/js/back-to-top-btn.js', array('jquery'), true );
		
		wp_enqueue_script( 'fontawesome-js', '//use.fontawesome.com/b6b57afdd0.js', true );
		

	}

	add_action ('wp_enqueue_scripts', 'simonCurwenBlog_scripts');

?>