<section class="banner">

	<div class="wrap">

		<h2 class="offscreen">Banner reklamowy</h2>

		<?php if( have_rows('ad_banner', 'option') ): ?>

			<?php while( have_rows('ad_banner', 'option') ): the_row(); ?>

				<?php
					$banner_img = get_sub_field('banner_img');
					$banner_url = get_sub_field('banner_url');
				?>

				<a href="<?php echo $banner_url; ?>"><img src="<?php echo $banner_img['url']; ?>" alt="$banner_img['alt'];"></a>

			<?php endwhile; ?>

		<?php endif; ?>

	</div>
	<!-- END wrap -->

</section>
<!-- END section banner -->