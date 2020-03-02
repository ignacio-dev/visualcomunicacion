<?php
	$current = 'Expositores';
	require_once 'includes/tools.php';
?>
<!DOCTYPE html>
<html>
<? require_once 'includes/head.php' ?>
<body>
	<? include_once 'includes/header.php' ?>
	<main>
		<article id="expositores-1">
			<div>
				<h2><? printHeading() ?></h2>
				<p>
					Tenemos disponibles diferentes modelos de expositores de fácil montaje, ligeros, reutilizables,<br>
					sólidos, embalados en sencillas bolsas o maletas que ocupan muy poco espacio.<br>
					Son ideales para montajes rápidos de stands, conferencias, presentaciones, eventos…
				</p>
			</div>
		</article>
		<article id="expositores-2">
			<div>
				<img src="img/expositores/expositores-1.jpg">
				<dl>
					<dt>Pop Up Desplegable</dt>
					<dd>
						Estructura de aluminio, con gráfica textil<br>
						y sujeción con velcro.<br><br>
						Medidas: 300 x 230 cm<br><br>
						<img src="img/expositores/expositores-1_2.png">
					</dd>
				</dl>
			</div>
		</article>
		<article id="expositores-3">
			<div>
				<figure>
					<img src="img/expositores/expositores-2.jpg" id="directorio">
				</figure>
				<dl>
					<dt>Directorio</dt>
					<dd>
						Expositor fabricado a medida en tubo<br class="nobr">
						de aluminio lacado y gráfica montada<br class="nobr">
						sobre cartón pluma.<br><br>
						Medidas: 70x200 cm
					</dd>
				</dl>
			</div>
			<div>
				<figure>
					<img src="img/expositores/expositores-3.jpg" id="enara">
				</figure>
				<dl>
					<dt>Enara</dt>
					<dd>
						Estructura de aluminio, gráfica<br class="nobr">
						a doble cara en lona<br><br>
						Medidas: 85x200cm
					</dd>
				</dl>
			</div>
			<div>
				<figure>
					<img src="img/expositores/expositores-4.jpg" id="directorio2">
				</figure>
				<dl>
					<dt>Directorio</dt>
					<dd>
						Rotulación sobre estructura de<br class="nobr">
						aluminio y cristal.
					</dd>
				</dl>
			</div>
		</article>
	</main>
	<? include_once 'includes/footer.php' ?>
	<? include_once 'includes/scripts.php' ?>
</body>
</html>