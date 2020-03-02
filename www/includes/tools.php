<?php

// Constants
define('SITENAME', 'Visual Comunicación');
define('TIMESTAMP', '3_001');


// Parse Special Characters For URL
function URLParse($str) {
	$str = str_replace(
		array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'), 
		array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'), 
		$str
	);
	$str = str_replace(
		array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'), 
		array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'), 
		$str );
	$str = str_replace(
		array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'), 
		array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'), 
		$str);
	$str = str_replace(
		array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'), 
		array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'), 
		$str);
	$str = str_replace(
		array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'), 
		array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'), 
		$str);
	$str = str_replace(
		array('ñ', 'Ñ', 'ç', 'Ç'), 
		array('n', 'N', 'c', 'C'), 
		$str
	);
	$str = str_replace(
		' ',
		'-',
		$str
	);
	return strtolower($str);
}

// Page Title + Appendage
function printTitle() {
	global $current;
	$appendage = ($current == 'Home') ? '' : ' | ' . $current_page;
	echo SITENAME . $appendage;
}

// Current Page CSS Stylesheet
function printCurrentStylesheet() {
	global $current;
	$fileName = URLParse($current) . '.css?v=' . TIMESTAMP;
	echo '<link rel="stylesheet" type="text/css" href="css/' . $fileName . '">';
}

// Logo
function printLogo() {
	global $current;
	$img = '<img src="img/logo.svg" id="logo">';
	$clickable = ($current == 'Home') ? false : true;	

	if ($clickable) {
		$logo = '<a href="index.php" class="logo">' . $img . '</a>';
	}
	else {
		$logo = $img;
	}

	echo $logo;
}

// Nav Links
function printNavLinks() {
	global $current;

	$navLinks = array(
		array(link => 'quienes-somos.php', name => 'Quiénes somos', button => false),
		array(link => 'donde-estamos.php', name => 'Dónde estamos', button => false),
		array(link => 'clientes.php',      name => 'Clientes',      button => false),
		array(link => 'contacto.php',      name => 'Contacto',      button => false),
		array(link => 'novedades.php',     name => 'Novedades',     button => true)
	);

	foreach ($navLinks as $navLink) {
		$classes = array();

		if ($navLink[button]) {
			array_push($classes, 'button');
		}
		if ($navLink[name] == $current) {
			array_push($classes, 'current');
			$navLink[link] = '#';
		}

		$classes = implode(' ', $classes);
		$_class  = ' class="' . $classes . '"';
		$_href   = ' href="' . $navLink[link] . '"';

		echo '<a' . $_href . $_class . ">" . $navLink[name] . '</a>';
		echo "\n";
	}
}

// Main Headings
function printHeading() {
	global $current;
	echo mb_strtoupper($current, 'UTF-8');
}