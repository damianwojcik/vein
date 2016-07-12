<section class="intro">

	<div class="wrap">

		<h2><?php echo $intro_heading; ?></h2>

		<?php if( have_rows('intro_list', 'option') ): ?>

			<ul class="list-featured">

				<?php while( have_rows('intro_list', 'option') ): the_row(); ?>

					<?php $list_element = get_sub_field('list_element'); ?>
			
					<li><?php echo $list_element; ?></li>

				<?php endwhile; ?>

			</ul>
			<!-- END featured-list -->

		<?php endif; ?>

	</div>
	<!-- END wrap -->

</section>
<!-- END section intro -->