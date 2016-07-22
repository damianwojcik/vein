<?php

	$sidebar_banner = get_field('sidebar_banner', 'option');
	$box_title = get_field('box_title', 'option');
	$box_content = get_field('box_content', 'option');
	$first_sidebar_button_txt = get_field('first_sidebar_button_txt', 'option');
	$first_sidebar_button_url = get_field('first_sidebar_button_url', 'option');
	$second_sidebar_button_txt = get_field('second_sidebar_button_txt', 'option');
	$second_sidebar_button_url = get_field('second_sidebar_button_url', 'option');

?>

<div class="span-right">

	<aside class="aside-article">
		
		<div class="wrap banner-wrap">

			<a href="<?php echo $first_sidebar_button_url; ?>" class="banner-wrap--link">
				
				<img class="b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $sidebar_banner['url']; ?>" alt="<?php echo $sidebar_banner['alt']; ?>">

			</a>

			<a href="<?php echo $first_sidebar_button_url; ?>" class="btn"><?php echo $first_sidebar_button_txt; ?></a>

		</div>
		<!-- END wrap -->

		<div class="wrap">

			<h2><?php echo $box_title; ?></h2>
		
			<p>
				<?php echo $box_content; ?>
			</p>

			<a href="<?php echo $second_sidebar_button_url; ?>" class="btn"><?php echo $second_sidebar_button_txt; ?></a>

		</div>
		<!-- END wrap -->

	</aside>
	<!-- END article-aside -->

</div>
<!-- END span-right -->