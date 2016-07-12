<?php

	if (function_exists( 'register_sidebar' )) {

		register_sidebar(array(
			'name' => 'Menu główne',
			'id'  => 'main_menu',
			'before_title' => '',
			'after_title' => '',
			'before_widget' => '',
			'after_widget'  => '',
		));
		
	}

?>
