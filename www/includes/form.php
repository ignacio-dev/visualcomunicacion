<form action="includes/send.php" method="POST">
	<input type="text" name="nombre" placeholder="Nombre" required data-gramm_editor="false" value="<?= $_GET['name'] ?>">
	<input type="mail" name="email" placeholder="E-mail" required data-gramm_editor="false" value="<?= $_GET['email'] ?>">
	<input type="phone" name="telefono" placeholder="Teléfono (opcional)" data-gramm_editor="false" value="<?= $_GET['phone'] ?>">
	<input type="text" name="empresa" placeholder="Empresa (opcional)" data-gramm_editor="false" value="<?= $_GET['company'] ?>">
	<input type="text" name="cif" placeholder="CIF (opcional)" data-gramm_editor="false" value="<?= $_GET['cif'] ?>">
	<input type="text" name="domicilio" placeholder="Domicilio (opcional)" data-gramm_editor="false" value="<?= $_GET['address'] ?>">
	<textarea name="mensaje" placeholder="Mensaje" required data-gramm_editor="false"><?= $_GET['message'] ?></textarea>
	<div id="recaptcha-wrap">
		<? if ($_GET['captcha'] == 'fail'): ?>
			<div class="error" style="margin-bottom: 14px">
				<span>ERROR: Debes marcar esta casilla:</span>
			</div>
		<? endif; ?>
		<div id="recaptcha" class="g-recaptcha" data-sitekey="6LeyQJcUAAAAABhuqoRmU0B5DnfudVlfbXV6ifHt"></div></div>
	<button type="submit" name="enviar" class="button">Enviar</button>
</form>