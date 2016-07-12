<nav class="mobile-navigation">

	<h2 class="offscreen">Nawigacja mobilna</h2>

	<?php

		$args = array(
		'container'       => 'ul',
		'container_class' => '',
		'menu_class'      => ''
		);

		wp_nav_menu($args);

	?>
	
</nav>
<!-- END mobile-navigation -->