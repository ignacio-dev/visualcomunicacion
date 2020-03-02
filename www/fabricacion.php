<?php
	$current = 'Fabricación';
	require_once 'includes/tools.php';
?>
<!DOCTYPE html>
<html>
<? require_once 'includes/head.php' ?>
<body>
	<? include_once 'includes/header.php' ?>
	<main>
		<article id="fabricacion-1">
			<div>
				<h2><? printHeading() ?></h2>
				<dl>
					<dt>Renovación</dt>
					<dd>
						Actualización constante de maquinaria <br>
						para conseguir resultados óptimos.
					</dd>
				</dl>
			</div>
			<img src="img/fabricacion/fabricacion-1.png">
		</article>
		<img src="img/fabricacion/fabricacion-2.jpg" class="banner">
		<article id="fabricacion-3">
			<div>
				<img src="img/fabricacion/fabricacion-3.png">
				<dl>
					<dt>Fabricación corpórea</dt>
					<dd>
						Ejemplo de cartel indicador <br>
						realizado sobre plancha de metal.
					</dd>
				</dl>
			</div>
		</article>
		<img src="img/fabricacion/fabricacion-4.jpg" class="banner">
	</main>
	<? include_once 'includes/footer.php' ?>
	<? include_once 'includes/scripts.php' ?>
</body>
</html>