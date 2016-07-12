<?php

	$quote = get_field('quote', 'option');

?>

<section class="top-panel">

	<div class="span-left">

		<div class="wrap">

			<blockquote><?php echo $quote; ?></blockquote>

		</div>
		<!-- END wrap -->

	</div>
	<!-- END span-left -->

	<div class="span-right">

		<div class="wrap">

			<h2>Szybki kontakt</h2>

			<ul class="contact-details">

				<?php
					$emails = get_field('list-emails', 'option'); // get all the rows
					$first_email = $emails[0]; // get the first row
					$phones = get_field('list-phones', 'option'); // get all the rows
					$first_phone = $phones[0]; // get the first row	
				?>

				<li>
					<a href="mailto:<?php echo $emails[0]["email"]; ?>"><i class="fa fa-envelope" aria-hidden="true"></i><?php echo $first_email["email"]; ?></a>
				</li>

				<li>
					<a href="callto:+48322115014"><i class="fa fa-phone" aria-hidden="true"></i><?php echo $first_phone["phone"]; ?></a>
				</li>

			</ul>
			<!-- END contact-details -->

		</div>
		<!-- END wrap -->

	</div>
	<!-- END span-right -->

</section>
<!-- END section top-panel -->