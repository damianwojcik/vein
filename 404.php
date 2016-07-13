<?php
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$sidebar_banner = get_field('sidebar_banner', 'option');
	$box_title = get_field('box_title', 'option');
	$box_content = get_field('box_content', 'option');
	$sidebar_button_txt = get_field('sidebar_button_txt', 'option');
	$sidebar_button_url = get_field('sidebar_button_url', 'option');
?>


<?php get_header(); ?>

<!-- =================================================
	Page-content
================================================== -->
<main class="page-content">

	<!-- =================================================
		Main-content
	================================================== -->
	<main class="main-content">

		<!-- =================================================
			Site Title
		================================================== -->
		<?php get_template_part("partials/site", "title"); ?>

		<div class="row-tight">

			<!-- =================================================
				Span-left
			================================================== -->
			<div class="span-left">

				<article class="article-wrapper">

					<h1 class="offscreen">Strona 404</h1>

					<h2>Strony nie znaleziono</h2>

					<p>

						Przepraszamy ale strona, której szukasz (<span style="opacity:0.7;"><?= $actual_link; ?></span>) nie została odnaleziona. Sprawdź, czy adres URL nie zawiera błędów lub wróć na <a href="<?= SITE_URL; ?>">stronę główną</a>.

					</p>
					
				</article>

			</div>
			<!-- END span-left -->

			<!-- =================================================
				Span-right
			================================================== -->
			<div class="span-right">

				<aside class="aside-article">
					
					<div class="wrap banner-wrap">
						
						<img src="<?php echo $sidebar_banner['url']; ?>" alt="<?php echo $sidebar_banner['alt']; ?>">

					</div>
					<!-- END wrap -->

					<div class="wrap">

						<h2><?php echo $box_title; ?></h2>
					
						<p>
							<?php echo $box_content; ?>
						</p>

						<a href="<?php echo $sidebar_button_url; ?>" class="btn"><?php echo $sidebar_button_txt; ?></a>

					</div>
					<!-- END wrap -->

				</aside>
				<!-- END article-aside -->

			</div>
			<!-- END span-right -->

		</div>
		<!-- END row-tight -->

	</main>
	<!-- END main-content -->


	<!-- =================================================
		Page Sidebar
	================================================== -->
	<?php get_template_part("partials/aside", "page-sidebar"); ?>


</main>
<!-- END page-content -->


<?php get_footer(); ?>