<?php 
	$sidebar_boxes = get_field('sidebar_boxes', 'option'); 
	$triangles = array('triangle-right','triangle-left'); 
?>

<aside class="sidebar-boxes">

	<?php $i = 0; ?>

	<?php foreach( $sidebar_boxes as $sidebar_box ): ?>

		<?php
			$post_id = $sidebar_box["sidebar_box"]->ID;
			$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), 'large');
			$heading = $sidebar_box["sidebar_box"]->post_title;
		?>

		<a href="<?php echo get_permalink($post_id); ?>" class="caption-banner">

			<?php if ($i % 2 == 1){ ?>

				<div class="img-box" style="background-image: url('<?php echo $thumbnail[0]; ?>')"></div>
				
			<?php } ?>

			<div class="info-box">

				<div class="<?php echo $triangles[$i]; ?>"></div>

				<h2><?php echo $heading; ?></h2>

				<p>
					<?php the_field('description', $post_id); ?>
				</p>

				<div class="btn btn-gray">Więcej</div>

			</div>
			<!-- END info-box -->

			<?php if ($i % 2 == 0){ ?>

				<div class="img-box" style="background-image: url('<?php echo $thumbnail[0]; ?>')"></div>

			<?php } ?>

		</a>
		<!-- END caption-banner -->

		<?php $i = $i + 1; ?>

	<?php endforeach; ?>


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

		<!-- Google API Map -->
		<div id="map"></div>

	</div>
	<!-- END caption-banner -->

</aside>
<!-- END page-sidebar -->