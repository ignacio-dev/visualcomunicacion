<script type="text/javascript" src="js/script.js?v=<?= TIMESTAMP ?>"></script>
<? if ($current == 'Home' OR $current == 'Contacto'): ?>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<? endif; ?>
<? if ($current == 'Contacto'): ?>
	<? if ($_GET['sent'] !== 'success'): ?>
		<script type="text/javascript" src="js/contacto.js"></script>
	<? endif; ?>
<? endif; ?>