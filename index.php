<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">

<?php
include("./config/config00.php");
include("./config/config01.php");
include("./config/config02.php");
?>
<body onload="$('#a00').show('fold');">
	<div id="contenedor">
		<div id="cabecera"></div>
		<hr>
		<?php funcion00(); ?>
		<?php funcion01(); ?>
		<?php funcion02(); ?>
		<?php funcion03(); ?>
		<?php errores(); ?>
		<div id="footer">
		</div>
	</div>	
</body>
</html>
