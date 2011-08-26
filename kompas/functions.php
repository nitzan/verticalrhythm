<?php
	function kompas_setup() {
		// one menu needed
		register_nav_menu('header', __('The main navigation','kompas'));
		
		
		add_filter('excerpt_length', 'new_excerpt_length');
		add_filter('excerpt_more', 'new_excerpt_more');
	
		// some js
		wp_register_script('jquery-transform', get_bloginfo('stylesheet_directory').'/js/jquery-css-transform.js', array('jquery') );
		wp_register_script('jquery-transform-animate', get_bloginfo('stylesheet_directory').'/js/jquery-animate-css-rotate-scale.js', array('jquery-transform') );
		wp_register_script('kompas-js', get_bloginfo('stylesheet_directory').'/js/kompas.js', array('jquery') );
		
		if ( !is_admin() )
			wp_enqueue_script('kompas-js');
	}
	
	function new_excerpt_length($length) {
		return 25;
	}
	
	function new_excerpt_more($more) {
		global $post;
		return ' <a href="'. get_permalink($post->ID) . '">[&hellip;]</a>';
	}
	
	add_action('init','kompas_setup');
?>