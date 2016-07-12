<footer class="site-footer">

	<div class="row-tight">

		<h2 class="offscreen">Stopka strony</h2>

		<div class="span-left">

			<p>2016 &copy; <a href="#">studionext.pl</a></p>

		</div>
		<!-- END span-left -->

		<div class="span-right">

			<nav class="footer-nav">

				<h2 class="offscreen">Nawigacja stopki</h2>
				
				<?php

					$args = array(
					'container'       => 'ul',
					'container_class' => '',
					'menu_class'      => ''
					);

					wp_nav_menu($args);

				?>

			</nav>
			<!-- END footer-nav -->

		</div>
		<!-- END span-right -->

	</div>
	<!-- END row-tight -->

</footer>
<!-- END site-footer -->