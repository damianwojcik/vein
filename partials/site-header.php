<?php $logo = get_field('site_logo', 'option'); ?>

<header class="site-header">

	<div class="row-tight">

		<div class="logo-wrap">

			<h1 class="site-logo">
			
				<a href="<?= SITE_URL; ?>">
					<img class="b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">Vein
				</a>

			</h1>

		</div>
		<!-- END logo-wrap -->

		<div class="wrap">

			<!-- =================================================
				Top-panel
			================================================== -->
			<?php get_template_part("partials/section", "top-panel"); ?>


			<!-- =================================================
				Navigation
			================================================== -->
			<?php get_template_part("partials/section", "navigation"); ?>


			<a class="mobile-nav-toggle" href="#">
				<div class="menu-bars">
					<span class="menu-bar"></span>
					<span class="menu-bar"></span>
					<span class="menu-bar"></span>
				</div>
			</a>
			<!-- END mobile-nav-toggle -->

		</div>
		<!-- END wrap -->

	</div>
	<!-- END row-tight -->

</header>
<!-- END site-header -->