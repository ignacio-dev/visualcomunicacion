<!-- IMG PRE-LOAD -->
<div style="display: none!important;">
	<img src="../img/home/slider/1.jpg?v=1b">
	<img src="../img/home/slider/2.jpg?v=1b">
	<img src="../img/home/slider/3.jpg?v=1b">
	<img src="../img/home/slider/4.jpg?v=1b">
</div>
<!-- CALL TO ACTION -->
<section id="landing-header">
	<!-- BACKGROUND GALERY -->
	<div id="photo-gal"></div>
	<!-- FORM -->
	<div style="position: relative; height: 100%!important; box-sizing: border-box;">
		<form id="call-to-action" action="includes/send.php" method="POST">
			<h3>
				Solicite presupuesto<br>sin compromiso.
			</h3>
			<br>
			<input type="text" name="nombre" placeholder="Nombre" required data-gramm_editor="false">
			<input type="mail" name="email" placeholder="E-mail" required data-gramm_editor="false">
			<textarea name="mensaje" placeholder="Mensaje" required data-gramm_editor="false"></textarea>
			<div id="recaptcha-wrap">
				<div id="recaptcha" class="g-recaptcha" data-sitekey="6LeyQJcUAAAAABhuqoRmU0B5DnfudVlfbXV6ifHt"></div>
			</div>
			<button type="submit" name="enviar" class="button">Enviar</button>
		</form>
	</div>
</section>