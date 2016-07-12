<?php
	$sidebar_banner = get_field('sidebar_banner', 'option');
	$box_title = get_field('box_title', 'option');
	$box_content = get_field('box_content', 'option');
	$sidebar_button_txt = get_field('sidebar_button_txt', 'option');
	$sidebar_button_url = get_field('sidebar_button_url', 'option');
	// $sidebar_boxes = get_field('sidebar_boxes', 'option');
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
		<header class="site-title">

			<div class="row-tight">

				<div class="span-left" style="background-image: url('<?= THEME_URL; ?>/assets/img/title-home-bg.jpg')">

					<div class="wrap">

						<h1><?php the_title(); ?></h1>

					</div>
					<!-- END wrap -->

				</div>
				<!-- END span-left -->

			</div>
			<!-- END row-tight -->

		</header>
		<!-- END site-title -->

		<div class="row-tight">

			<!-- =================================================
				Span-left
			================================================== -->
			<div class="span-left">

				<article class="article-wrapper">

					<h1 class="offscreen"><?php the_title(); ?></h1>

					<?php the_content(); ?>
					
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
		Sidebar
	================================================== -->
	<aside class="sidebar">

		<h1 class="offscreen">Sidebar</h1>

		<div class="info-box">

			<h2>Ciekawostki</h2>

			<p>
				W roku 2009 zrealizowano inwestycję budowy stanowiska kontrolno-pomiarowego do paliw płynnych.
			</p>

			<a href="#" class="btn btn-gray">Więcej</a>

		</div>
		<!-- END info-box -->

		<div class="info-box">

			<?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(11), 'large'); ?>

			<h2>Skontaktuj się</h2>

			<ul class="contact-details">
				<li>
					<a href="callto:+48322115014"><i class="fa fa-phone" aria-hidden="true"></i>+48 (32) 211 50 14</a>
				</li>
				<li>
					<a href="callto:+48322115014"><i class="fa fa-phone" aria-hidden="true"></i>+48 (32) 211 50 14</a>
				</li>
				<li>
					<a href="mailto:vein@vein.com.pl"><i class="fa fa-envelope" aria-hidden="true"></i>vein@vein.com.pl</a>
				</li>
			</ul>

			<a class="btn btn-gray" href="<?php echo get_permalink(11); ?>">Jak dojechać</a>

		</div>
		<!-- END info-box -->

		<a href="<?php echo get_permalink(11); ?>" class="img-box" style="background-image: url('<?php echo $thumbnail[0]; ?>')"></a>

	</aside>
	<!-- END sidebar -->

</main>
<!-- END page-content -->


<?php get_footer(); ?>