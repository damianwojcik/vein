<?php get_header(); ?>

<?php

	$title_heading = get_field('title_heading', 'option');
	$title_box_heading = get_field('title_box_heading', 'option');
	$title_box_content = get_field('title_box_content', 'option');
	$button_txt = get_field('button_txt', 'option');
	$button_url = get_field('button_url', 'option');
	$sidebar_boxes = get_field('sidebar_boxes', 'option');
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

			<?php
				$post_id = $sidebar_boxes[0]["sidebar_box"]->ID;
				$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), 'large');
			?>

			<a href="<?php echo get_permalink($post_id); ?>" class="caption-banner">

				<div class="info-box">

					<div class="triangle-right"></div>

					<h2><?php echo $sidebar_boxes[0]["sidebar_box"]->post_title ?></h2>

					<p>
						<?php the_field('description', $post_id); ?>
					</p>

					<div class="btn btn-gray">Więcej</div>

				</div>
				<!-- END info-box -->

				<div class="img-box" style="background-image: url('<?php echo $thumbnail[0]; ?>')"></div>

			</a>
			<!-- END caption-banner -->

			<?php
				$post_id = $sidebar_boxes[1]["sidebar_box"]->ID;
				$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), 'large');
			?>
			
			<a href="<?php echo get_permalink($post_id); ?>" class="caption-banner">

				<div class="img-box" style="background-image: url('<?php echo $thumbnail[0]; ?>')"></div>

				<div class="info-box">

					<div class="triangle-left"></div>

					<h2><?php echo $sidebar_boxes[1]["sidebar_box"]->post_title ?></h2>

					<p>
						<?php the_field('description', $post_id); ?>
					</p>

					<div class="btn btn-gray">Więcej</div>

				</div>
				<!-- END info-box -->

			</a>
			<!-- END caption-banner -->

			<div class="caption-banner">


				<?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(11), 'large'); ?>

				<div class="info-box">

					<div class="triangle-right"></div>

					<h2>Skontaktuj się</h2>

					<ul class="contact-details">

						<?php if( have_rows('list-phones', 'option') ): ?>

							<?php $i = 1; ?>

							<?php while ( have_rows('list-phones', 'option') ) : the_row(); ?>

								<?php $phone = get_sub_field('phone'); ?>
								
									<?php if($i <= 2){ ?>

										<li>
											<a href="callto:<?php echo $phone; ?>"><i class="fa fa-phone" aria-hidden="true"></i><?php echo $phone; ?></a>
										</li>

									<?php } ?>

								<?php $i = $i + 1; ?>

							<?php endwhile; ?>

						<?php endif; ?>

						<?php
							$emails = get_field('list-emails', 'option');
							$first_email = $emails[0];
						?>

						<li>
							<a href="mailto:<?php echo $emails[0]["email"]; ?>"><i class="fa fa-envelope" aria-hidden="true"></i><?php echo $emails[0]["email"]; ?></a>
						</li>
						
					</ul>

					<a class="btn btn-gray" href="<?php echo get_permalink(11); ?>">Jak dojechać</a>

				</div>
				<!-- END info-box -->

				<div id="map"></div>

			</div>
			<!-- END caption-banner -->

		</div>
		<!-- END span-right -->

	</div>
	<!-- END row-tight -->

</main>
<!-- END page-content -->

<?php get_footer(); ?>