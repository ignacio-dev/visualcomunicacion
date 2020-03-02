<?php
	$current = 'Contacto';
	require_once 'includes/tools.php';
?>
<!DOCTYPE html>
<html>
<? require_once 'includes/head.php' ?>
<body>
	<? include_once 'includes/header.php' ?>
	<main>
		<article>
			<div>
				<h2><? printHeading() ?></h2>
				<? if ($_GET['sent'] == 'success'): ?>
					<p>¡Mensaje enviado!</p>
				<? else: ?>
					<? include 'includes/form.php' ?>
				<? endif; ?>
			</div>
		</article>
	</main>
	<? include_once 'includes/footer.php' ?>
	<? include_once 'includes/scripts.php' ?>
</body>
</html>