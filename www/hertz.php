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
		<article class="np-general" id="np-hertz">
			<h2><? printHeading() ?> (HERTZ)</h2>
		</article>
		<figure class="multifig">
			<img src="img/nuevos-proyectos/hertz/nphertz2-1.jpg?v=<?= TIMESTAMP ?>">
			<img src="img/nuevos-proyectos/hertz/nphertz2-2.jpg?v=<?= TIMESTAMP ?>">
			<img src="img/nuevos-proyectos/hertz/nphertz2-3.jpg?v=<?= TIMESTAMP ?>">
			<img src="img/nuevos-proyectos/hertz/nphertz2-4.jpg?v=<?= TIMESTAMP ?>">
		</figure>
	</main>
	<? include_once 'includes/footer.php' ?>
	<? include_once 'includes/scripts.php' ?>
</body>
</html>