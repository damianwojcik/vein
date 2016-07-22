<?php get_header(); ?>

<?php
	$title_heading = get_field('title_heading', 'option');
	$title_box_heading = get_field('title_box_heading', 'option');
	$title_box_content = get_field('title_box_content', 'option');
	$title_box_banner = get_field('title_box_banner', 'option');
	$title_box_banner_link = get_field('link', $title_box_banner["ID"]);
?>


<!-- flag to recognize in jQuery if is_home() -->
<span id="homepage-flag" style="display: none"></span>


<!-- =================================================
	Site Title
================================================== -->
<header class="site-title">

	<div class="row-tight row-content">

		<!-- =================================================
			Span-left
		================================================== -->
		<div class="span-left b-lazy" data-src="<?= THEME_URL; ?>/assets/img/title-home-bg.jpg">

			<div class="wrap">

				<h1><?php echo $title_heading; ?></h1>

			</div>
			<!-- END wrap -->

		</div>
		<!-- END span-left -->


		<!-- =================================================
			Span-right
		================================================== -->
		<div class="span-right" id="site-title--span-right">

			<div class="triangle-left"></div>

			<div class="wrap">

				<h2><?php echo $title_box_heading; ?></h2>

				<p>
					<?php echo $title_box_content; ?>
				</p>

				<a href="<?php echo $title_box_banner_link; ?>" target="_blank">
					<img class="b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $title_box_banner['url']; ?>" alt="<?php echo $title_box_banner['alt']; ?>">
				</a>

			</div>
			<!-- END wrap -->

		</div>
		<!-- END span-right -->

	</div>
	<!-- END row-tight -->

</header>
<!-- END site-title -->


<!-- =================================================
	Page-content
================================================== -->
<main class="page-content">

	<div class="row-tight">

		<!-- =================================================
			Span-left
		================================================== -->
		<div class="span-left">

			<!-- =================================================
				Section intro
			================================================== -->
			<?php get_template_part("partials/section", "intro"); ?>

			<!-- =================================================
				Section art-boxes
			================================================== -->
			<?php get_template_part("partials/section", "art-boxes"); ?>


			<!-- =================================================
				Section banner
			================================================== -->
			<?php get_template_part("partials/section", "banner"); ?>


		</div>
		<!-- END span-left -->


		<!-- =================================================
			Span-right
		================================================== -->
		<div class="span-right">

			<!-- =================================================
				Aside sidebar-boxes
			================================================== -->
			<?php get_template_part("partials/aside", "sidebar-boxes"); ?>

		</div>
		<!-- END span-right -->

	</div>
	<!-- END row-tight -->

</main>
<!-- END page-content -->

<?php get_footer(); ?>