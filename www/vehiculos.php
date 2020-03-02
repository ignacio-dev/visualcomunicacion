<?php
	$current = 'Vehículos';
	require_once 'includes/tools.php';
?>
<!DOCTYPE html>
<html>
<? require_once 'includes/head.php' ?>
<body>
	<? include_once 'includes/header.php' ?>
	<main>
		<article id="vehiculos-1">
			<div>
				<h2><? printHeading() ?></h2>
				<figure>
					<figcaption>
						La rotulación de vehículos permite una<br>
						comunicación continua y en movimiento.<br>
						Realiza publicidad en un soporte gratuito<br>
						cuyo único coste es el de personalizar el<br>
						vehículo. Podemos reproducir fotografías,<br>
						textos y logotipos utilizando vinilos de larga<br>
						duración (hasta 9 años) como removibles<br>
						para campañas cortas.
					</figcaption>
					<img src="img/vehiculos/vehiculos-1.jpg">
				</figure>
			</div>
		</article>
		<img src="img/vehiculos/vehiculos-2.jpg" class="banner">
	</main>
	<? include_once 'includes/footer.php' ?>
	<? include_once 'includes/scripts.php' ?>
</body>
</html>