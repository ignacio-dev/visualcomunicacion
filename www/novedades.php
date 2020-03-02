<?php
	$current = 'Novedades';
	require_once 'includes/tools.php';
?>
<!DOCTYPE html>
<html>
<? require_once 'includes/head.php' ?>
<body>
	<? include_once 'includes/header.php' ?>
	<main id="novedades">
		<article id="novedades-texturas">
			<div>
				<h2><? printHeading() ?></h2>
				<div style="width: 100%!important">
					<section>
						<h3>TEXTURAS</h3>
						<br><br>
						<p>
							Nuevos films texturizados <dfn title="Envoltura de pared">Wallwrap</dfn>, especialmente fabricados para revestimientos<br class="nobr">
							interiores. Son una excelente opción para hoteles, restaurantes, espacios<br class="nobr">
							comerciales y lugares de trabajo. Están provistos de un potente adhesivo <br class="nobr">
							aplicable a una gran variedad de superficies.					
						</p>
						<br><br>
						<div class="product">
							<h3>Disponibles en tres texturas diferentes</h3>
							<br><br><br>
							<img src="img/novedades/texturas/todos.jpg?v=2">
						</div>
						<dl>
							<div class="product">
								<dt>Efecto canvas</dt>
								<dd>
									Proporciona a las imágenes impresas un efecto<br class="nobr">
									lienzo, perfecto para la reproducción de obras fotográficas y artísticas.<br><br>
									Espesor: 250 mc.
									<img src="img/novedades/texturas/canvas.jpg">
								</dd>
							</div>
							<div class="product">
								<dt>Efecto veneciano</dt>
								<dd>
									Proporciona un aspecto muy realista como de pintura<br class="nobr">
									a espátula gracias a su efecto de grabado profundo.<br><br>
									Espesor: 300 mc.<br>						
									Medidas: 1,37x30 m<br><br>
									<strong>IMPORTANTE:</strong> Clasificación al fuego: B-s2-d0
									<img src="img/novedades/texturas/veneciano.jpg">
								</dd>
							</div>
							<div class="product">
								<dt>Efecto cuero</dt>
								<dd>
									Imitación de textura de piel.<br><br>
									Espesor: 225 mc.
									<img src="img/novedades/texturas/leather.jpg">
								</dd>
							</div>
						</dl>
					</section>
					<br><br>
					<section>
						<h3>IMANES</h3>
						<br><br>
						<p>
							Innovador material magnético imprimible, de gran formato, con una amplia variedad<br class="nobr">
							de espesores y fácilmente intercambiable por el usuario. Se aplica una superfice<br class="nobr">
							magnética donde luego se podrán colocar láminas removibles,<br class="nobr">
							muy sencillas de reemplazar.<br><br>
							Ideales para comunicaciones y promociones periódicas. El material puede ser liso<br class="nobr">
							o con textura de imitación lienzo.<br><br>					
							Espesor: de 300 a 850 mc.<br>
							Anchos disponibles: 62 cm y 100 cm en bobinas de 15 y 30 m.
						</p>
						<br><br>
						<div class="product">
							<img src="img/novedades/imanes/animales.jpg">
						</div>
						<div class="product">
							<img src="img/novedades/imanes/folio.jpg">
						</div>
						<div class="product">
							<img src="img/novedades/imanes/koala.jpg">
						</div>
					</section>
				</div>
			</div>
		</article>
	</main>
	<? include_once 'includes/footer.php' ?>
	<? include_once 'includes/scripts.php' ?>
</body>
</html>