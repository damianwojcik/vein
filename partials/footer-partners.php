<?php $gallery = get_field('gallery_logos', 'option'); ?>


<?php if( $gallery ){ ?>

	<footer class="partners">

		<div class="container">

			<h2 class="offscreen">Partnerzy</h2>

			<div class="gallery-heading">

				<h2>Serwis <br> firm</h2>

				<span>&#8594;</span>

			</div>
			<!-- END gallery-heading -->

		    <div class="swiper-container">

        		<div class="swiper-wrapper">

				<?php foreach ($gallery as $image) {

					$link = get_field('link', $image['id']);

				?>

				<div class="swiper-slide">

					<a href="<?php if($link){ echo $link; }else { echo '#'; } ?>" target="_blank">

						<img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />

					</a>

				</div>
				<!-- END swiper-slide -->

				<?php }//end foreach ?>

			    </div>
			    <!-- END swiper-wrapper -->

   			 </div>
   			 <!-- END swiper-container -->

		</div>
		<!-- END container -->

	</footer>
	<!-- END footer-partners -->

<?php }//endif ?>