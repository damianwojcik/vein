<?php
	/* Template Name: Strona Galeria */
?>

<?php $args = array(

	'posts_per_page'   => -1,
	'post_type'        => 'gallery'
	);

	$galleries_array = get_posts( $args );

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
			<article class="article-wrapper">

				<?php if( $galleries_array ){ ?>

					<ul class="gallery-listing">

						<?php foreach ($galleries_array as $gallery) {

							$title = $gallery->post_title;
							$thumbnail = wp_get_attachment_url( get_post_thumbnail_id( $gallery->ID ) );

						?>

							<li>

								<a href="<?php echo get_permalink($gallery->ID); ?>">

									<div class="img-wrap" style="background-image: url('<?php echo $thumbnail; ?>');"></div>

									<div class="meta-wrap">

										<h2><?php echo $title; ?></h2>

										<span>Zobacz galerię <i class="fa fa-chevron-right" aria-hidden="true"></i></span>

									</div>

								</a>

							</li>

						<?php } //end foreach ?>

					</ul>

				<?php } else { ?>

					<h2>Nie znaleziono żadnej galerii.</h2>

				<?php } ?>

			</article>

		</div>
		<!-- END row-tight -->

	</main>
	<!-- END main-content -->


	<!-- =================================================
		Aside sidebar-boxes
	================================================== -->
	<?php get_template_part("partials/aside", "sidebar-boxes"); ?>


</main>
<!-- END page-content -->


<?php get_footer(); ?>