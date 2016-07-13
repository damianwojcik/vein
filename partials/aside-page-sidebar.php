<aside class="page-sidebar">

	<h1 class="offscreen">Sidebar</h1>

	<div class="info-box">

		<h2>Ciekawostki</h2>

		<p>
			W roku 2009 zrealizowano inwestycję budowy stanowiska kontrolno-pomiarowego do paliw płynnych.
		</p>

		<a href="#" class="btn btn-gray">Więcej</a>

	</div>
	<!-- END info-box -->

	<div class="info-box">

		<?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(11), 'large'); ?>

		<h2>Skontaktuj się</h2>

		<ul class="contact-details">
			<li>
				<a href="callto:+48322115014"><i class="fa fa-phone" aria-hidden="true"></i>+48 (32) 211 50 14</a>
			</li>
			<li>
				<a href="callto:+48322115014"><i class="fa fa-phone" aria-hidden="true"></i>+48 (32) 211 50 14</a>
			</li>
			<li>
				<a href="mailto:vein@vein.com.pl"><i class="fa fa-envelope" aria-hidden="true"></i>vein@vein.com.pl</a>
			</li>
		</ul>

		<a class="btn btn-gray" href="<?php echo get_permalink(11); ?>">Jak dojechać</a>

	</div>
	<!-- END info-box -->

	<div id="map"></div>

</aside>
<!-- END sidebar -->