<?php
	$current = 'Home';
	require_once 'includes/tools.php';
?>
<!DOCTYPE html>
<html>
<? require_once 'includes/head.php'; ?>
<body>
	<? include_once 'includes/header.php'; ?>
	<main>
		<? include_once 'includes/home/call-to-action.php' ?>
		<? include_once 'includes/home/nuevos-proyectos-banner.php' ?>
		<? include_once 'includes/home/square-menus.php' ?>
	</main>
	<? include_once 'includes/footer.php' ?>
	<? include_once 'includes/scripts.php' ?>
</body>
</html>