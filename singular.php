<?php
	$sidebar_banner = get_field('sidebar_banner', 'option');
	$box_title = get_field('box_title', 'option');
	$box_content = get_field('box_content', 'option');
	$sidebar_button_txt = get_field('sidebar_button_txt', 'option');
	$sidebar_button_url = get_field('sidebar_button_url', 'option');
	$sidebar_select = get_field("sidebar_select");
	$gallery_images = get_field('gallery_container');
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

						<div class="gallery-photos">

							<?php foreach( $gallery_images as $image ): ?>

								<a class="gallery-photos--item" rel="lightbox" href="<?php echo $image['url']; ?>">

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
			<?php if($sidebar_select == 'tak'){ ?>

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

			<?php } ?>

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