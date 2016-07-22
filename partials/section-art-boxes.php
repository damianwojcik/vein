<?php
	$args = array('posts_per_page' => 2, 'category' => '4');
	$posts_array = get_posts( $args );
?>

<?php if (!empty($posts_array)){ ?>

	<section class="art-boxes">

		<div class="wrap">

			<h2><?php echo get_cat_name(4);?></h2>

		</div>
		<!-- END wrap -->

		<ul class="list-articles">

			<?php foreach ($posts_array as $post) { ?>

				<?php
					$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
					$title = get_the_title();
					$date = get_the_date();
				?>

				<li>

					<article class="article-tile">

						<!-- <a href="<?php the_permalink(); ?>"> -->

							<div class="img-wrap b-lazy" data-src="<?php echo $thumbnail[0]; ?>">

								<!-- <span><time><?php echo $date; ?></time></span> -->

							</div>
							<!-- END img-wrap -->

							<div class="text-wrap">

								<div class="triangle-top"></div>

								<h3><?php echo $title; ?></h3>

								<!-- <span class="read-more">Więcej</span> -->

							</div>
							<!-- END text-wrap -->

						<!-- </a> -->

					</article>
					<!-- END article-tile -->

				</li>

			<?php } // END foreach ?>

		</ul>

	</section>
	<!-- END section art-boxes -->

<?php } // END if !empty($posts_array) ?>
