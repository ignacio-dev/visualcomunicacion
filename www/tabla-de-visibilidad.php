<?php
	$current = 'Tabla de visibilidad';
	require_once 'includes/tools.php';
?>
<!DOCTYPE html>
<html>
<? require_once 'includes/head.php' ?>
<body>
	<? include_once 'includes/header.php' ?>
	<main>
		<article id="tabla-de-visibilidad-1">
			<div>
				<h2><? printHeading() ?></h2>
				<p>
					La siguiente tabla indica unos valores aproximados de legibilidad teniendo en cuenta<br class="nobr">
					diferentes distancias de observación. Estas distancias pueden oscilar entorno<br class="nobr">
					a un 10% dependiendo del color, el diseño y la tipografía escogida.<br><br>
					<em>*</em>Altura: se valora para las mayúsculas cuando el texto está compuesto<br class="nobr">
					en versales, y para las minúsculas cuando el mismo está en caja baja.
				</p>
				<table>
					<tr>
						<th>Distancia</th>
						<td>30m</td>
						<td>45m</td>
						<td>60m</td>
						<td>100m</td>
						<td>140m</td>
						<td>160m</td>
						<td>200m</td>
						<td>230m</td>
						<td>300m</td>
						<td>380m</td>
						<td>450m</td>
						<td>535m</td>
						<td>700m</td>
						<td>750m</td>
					</tr>
					<tr>
						<th><em>*</em>Altura</th>
						<td>8cm</td>
						<td>10cm</td>
						<td>15cm</td>
						<td>20cm</td>
						<td>25cm</td>
						<td>30cm</td>
						<td>38cm</td>
						<td>46cm</td>
						<td>60cm</td>
						<td>76cm</td>
						<td>90cm</td>
						<td>110cm</td>
						<td>140cm</td>
						<td>150cm</td>
					</tr>
				</table>
			</div>
		</article>
	</main>
	<? include_once 'includes/footer.php' ?>
	<? include_once 'includes/scripts.php' ?>
</body>
</html>