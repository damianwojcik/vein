<header class="site-title">

	<div class="row-tight">

		<div class="span-left" style="background-image: url('<?= THEME_URL; ?>/assets/img/title-home-bg.jpg')">

			<div class="wrap">

				<h1>
					<?php
						if ( is_category() ) {
						  single_cat_title();
						} elseif ( is_404() ) {
						  echo 'Strona 404';
						} elseif (is_search()) {
							echo 'Wyniki wyszukiwania';
						} else {
						  the_title();
						}
					?>
				</h1>

			</div>
			<!-- END wrap -->

		</div>
		<!-- END span-left -->

	</div>
	<!-- END row-tight -->

</header>
<!-- END site-title -->