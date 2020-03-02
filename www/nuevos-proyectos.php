<?php
	$current = 'Nuevos proyectos';
	require_once 'includes/tools.php';
?>
<!DOCTYPE html>
<html>
<? require_once 'includes/head.php' ?>
<body>
	<? include_once 'includes/header.php' ?>
	<main>
		<article id="nuevos-proyectos">
			<div>
				<h2><? printHeading() ?></h2>
				<p>
					En esta sección encontrará una lista de nuestros proyectos más recientes. <br>
					Para obtener más información simplemente haga click en el proyecto deseado. 
				</p>
			</div>
		</article>
		<a href="europcar.php" class="btn-full-width" id="europcar">EUROPCAR</a>
		<a href="hertz.php" class="btn-full-width" id="hertz">HERTZ</a>
		<a href="agencia-espacial.php" class="btn-full-width" id="agencia-espacial">AGENCIA ESPACIAL</a>
		<a href="ilunion.php" class="btn-full-width" id="ilunion">ILUNION</a>
	</main>
	<? include_once 'includes/footer.php' ?>
	<? include_once 'includes/scripts.php' ?>
</body>
</html>