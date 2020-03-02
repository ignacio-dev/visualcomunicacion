<?php
	$current = 'Nuevos proyectos';
	require_once 'includes/tools.php';
?>
<!DOCTYPE html>
<html>
<? require_once 'includes/head.php'; ?>
<body>
	<? include_once 'includes/header.php' ?>
	<main>
		<article class="np-general" id="np-agencia-espacial">
			<h2><? printHeading() ?> (AGENCIA ESPACIAL)</h2>
		</article>
		<figure class="multifig">
			<img src="img/nuevos-proyectos/agencia-espacial/npagencia-espacial2-1.jpg?v=<?= TIMESTAMP ?>">
			<img src="img/nuevos-proyectos/agencia-espacial/npagencia-espacial2-2.jpg?v=<?= TIMESTAMP ?>">
			<img src="img/nuevos-proyectos/agencia-espacial/npagencia-espacial2-3.jpg?v=<?= TIMESTAMP ?>">
			<img src="img/nuevos-proyectos/agencia-espacial/npagencia-espacial2-4.jpg?v=<?= TIMESTAMP ?>">
		</figure>
	</main>
	<? include_once 'includes/footer.php' ?>
	<? include_once 'includes/scripts.php' ?>
</body>
</html>