<?php

	if( function_exists('acf_add_options_page') ) {
	
		acf_add_options_page(array(
			'page_title'	=> 'Opcje strony',
			'menu_title'	=> 'Opcje strony',
			'menu_slug'		=> 'page-options',
			'capability'	=> 'edit_posts',
			'parent_slug'	=> '',
			'icon_url'		=> 'dashicons-edit',
			'redirect'		=> true
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Strona główna',
			'menu_title'	=> 'Strona główna',
			'parent_slug'	=> 'page-options',
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Dane kontaktowe',
			'menu_title'	=> 'Dane kontaktowe',
			'parent_slug'	=> 'page-options',
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Banner reklamowy',
			'menu_title'	=> 'Banner reklamowy',
			'parent_slug'	=> 'page-options',
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Sidebar artykułu',
			'menu_title'	=> 'Sidebar artykułu',
			'parent_slug'	=> 'page-options',
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Loga partnerów',
			'menu_title'	=> 'Loga partnerów',
			'parent_slug'	=> 'page-options',
		));

	}

?>