<?php get_header(); ?>

<?php

	$title_heading = get_field('title_heading', 'option');
	$title_box_heading = get_field('title_box_heading', 'option');
	$title_box_content = get_field('title_box_content', 'option');
	$button_txt = get_field('button_txt', 'option');
	$button_url = get_field('button_url', 'option');
?>


<!-- =================================================
	Site Title
================================================== -->
<header class="site-title">

	<div class="row-tight">

		<!-- =================================================
			Span-left
		================================================== -->
		<div class="span-left" style="background-image: url('<?= THEME_URL; ?>/assets/img/title-home-bg.jpg')">

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

				<a href="<?php echo $button_url; ?>" class="btn btn-red"><?php echo $button_txt; ?></a>

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
				Section news
			================================================== -->
			<?php get_template_part("partials/section", "news"); ?>


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
				Aside page-sidebar
			================================================== -->
			<?php get_template_part("partials/aside", "page-sidebar"); ?>

		</div>
		<!-- END span-right -->

	</div>
	<!-- END row-tight -->

</main>
<!-- END page-content -->

<?php get_footer(); ?>