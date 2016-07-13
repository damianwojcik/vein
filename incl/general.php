<?php

	add_theme_support( 'post-thumbnails' );

	add_action( 'wp_head', 'enqueue_styles' );
	add_action( 'wp_footer', 'enqueue_scripts' );


	function enqueue_styles() {

		// load styles
		wp_enqueue_style( 'font_styles_awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css' , '', NULL);
		wp_enqueue_style( 'site_styles', THEME_URL .'/style.css', '', NULL);

	}


	function enqueue_scripts() {

		// load scripts
		wp_enqueue_script("jquery");
		wp_enqueue_script( 'google_map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDEQYwOpCD3Fdca3ngNoNXdHEpl1jLlmwo' , '', NULL);
		wp_enqueue_script( 'site_scripts', THEME_URL . '/assets/js/scripts.js', '', NULL);

	}
