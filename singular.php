<?php
	$sidebar_select = get_field("sidebar_select");
	$gallery_images = get_field('gallery_container');
	$layout = get_field('layout');
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
			<div class="span-left <?php if($sidebar_select == 'nie'){ echo "full-width"; }?>">

				<article class="article-wrapper">

					<h1 class="offscreen"><?php the_title(); ?></h1>

					<?php the_content(); ?>

					<!-- BEGIN LOOP Gallery -->
					<?php if( !empty($gallery_images) ): ?>

						<h2></h2>

						<div class="gallery-photos">

							<?php foreach( $gallery_images as $image ): ?>

								<a class="gallery-photos--item <?php
									if($layout == '3 kolumny'){ echo "three-columns"; }
									if($layout == '4 kolumny'){ echo "four-columns"; }
								?>" rel="lightbox" href="<?php echo $image['url']; ?>">

									<div class="color-overlay"><i class="fa fa-search-plus" aria-hidden="true"></i></div>

									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">

								</a>
					                
					        <?php endforeach; ?>

						</div>
						<!-- END gallery-photos -->

					<?php endif; ?>
					<!-- END LOOP GALLERY -->
					
				</article>

			</div>
			<!-- END span-left -->

			<!-- =================================================
				Span-right
			================================================== -->
			<?php 

				if($sidebar_select == 'tak' OR empty( $sidebar_select ) ){

					get_template_part("partials/aside", "article"); 

				}

			?>

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