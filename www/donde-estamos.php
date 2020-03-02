<?php
	$current = 'Dónde estamos';
	require_once 'includes/tools.php';
?>
<!DOCTYPE html>
<html>
<? require_once 'includes/head.php' ?>
<body>
	<? include_once 'includes/header.php' ?>
	<main>
		<article id="donde-estamos">
			<div>
				<h2><? printHeading() ?></h2>
				<address>
					Avda. de la Industria, 50<br>
					28108 Alcobendas - Madrid<br><br>
					<i class="fas fa-phone"></i> 91 484 04 00<br>
					<i class="fas fa-fax"></i> 91 484 04 01<br>
				</address>
			</div>
		</article>
		<div class="google-maps">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3032.3446408559!2d-3.658135884804351!3d40.53397437935167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422c7c3559f0c5%3A0xe891fee7a87c397b!2sAv.+de+la+Industria%2C+50%2C+28108+Alcobendas%2C+Madrid%2C+Spain!5e0!3m2!1sen!2suk!4v1553594397190" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</main>
	<? include_once 'includes/footer.php' ?>
	<? include_once 'includes/scripts.php' ?>
</body>
</html>