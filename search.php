<?php
	$categories = get_the_category();
	$category_id = $categories[0]->cat_ID;
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
			<div class="span-left full-width">

				<article class="article-wrapper">

					<h1 class="offscreen"><?php the_title(); ?></h1>

						<?php if ( have_posts() ) : ?>

							<ul class="list-archive">

								 <?php while ( have_posts() ) : the_post();  ?>

								 	<?php 
										$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
										$title = get_the_title();
										$content = get_the_content();
										$trimmed_content = wp_trim_words( $content, 35 );
										$date = get_the_date();
									?>

									<li>

										<article class="list-archive--article">

											<a href="<?php the_permalink(); ?>">

												<div class="img-wrap" style="background-image: url('<?php if( !empty($thumbnail) ){ ?><?php echo $thumbnail[0];?><?php } ?>')"></div>
												<!-- END img-wrap -->

												<div class="text-wrap">

													<time><?php echo $date; ?></time>

													<h2><?php echo $title; ?></h2>

													<p>
														<?php echo $trimmed_content; ?> <span>Czytaj więcej &#8594;</span>
													</p>

												</div>
												<!-- END text-wrap -->

											</a>

										</article>
										<!-- END list-archive--article -->

									</li>

								 <?php endwhile; ?>

							</ul>
							<!-- END list-archive -->

						<?php else : ?>

			            	<p><?php _e('Przepraszamy, niestety nie znaleziono żadnych wpisów spełniających Twoje kryteria.'); ?></p>

			            <?php endif; ?>
					
				</article>
				<!-- END article-wrapper -->

			</div>
			<!-- END span-left -->

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