<section class="navigation">

	<h2 class="offscreen">Nawigacja strony</h2>
	
	<nav class="primary-nav">

		<h2 class="offscreen">Nawigacja desktopowa</h2>

		<?php

			$args = array(
			'container'       => 'ul',
			'container_class' => '',
			'menu_class'      => ''
			);

			wp_nav_menu($args);

		?>

	</nav>
	<!-- END primary-nav -->

	<nav class="search-box">

		<h2 class="offscreen">Wyszukiwanie</h2>

		<?php get_search_form(); ?>

	</nav>
	<!-- END search-box -->

</section>
<!-- END navigation -->