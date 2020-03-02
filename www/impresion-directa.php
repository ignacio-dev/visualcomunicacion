<?php
	$current = 'Impresión directa';
	require_once 'includes/tools.php';
?>
<!DOCTYPE html>
<html>
<? require_once 'includes/head.php' ?>
<body>
	<? include_once 'includes/header.php' ?>
	<main>
		<article id="impresion-directa-1">
			<div>
				<h2><? printHeading() ?></h2>
				<p>
					Visual Comunicación es una de las primeras empresas en el sector de la rotulación<br>
					que realiza impresión directa sobre cualquier soporte, mediante un nuevo sistema.<br>
					Este sistema consigue mejor calidad que la serigrafía y es posible realizarlo sobre pequeños<br>
					y grandes soportes de hasta 3m x1,50 m.
				</p>
				<img src="img/impresion-directa/impresion-directa-1.png">
			</div>
		</article>
		<img src="img/impresion-directa/impresion-directa-2.jpg" class="banner">
	</main>
	<? include_once 'includes/footer.php' ?>
	<? include_once 'includes/scripts.php' ?>
</body>
</html>