<span id="indexMesas"></span>
<div style="position:absolute;right: 100px">
<a href="#indexMesas" class="VIndice">Indice</a>
</div>
<style>
.VIndice{
	position: fixed;
}
</style>
<script>
$(".VIndice").button();
$(document).ready(function(){
	$(".guia-index li").click(function(){
		data = "./"+$(this).find("a").attr("href");
		window.location.replace(data);
	});
});
</script>
<ul class="guia-index">
	<li><a href="#ResumenMesa">Resumen</a></li>
	<li><a href="#AñadirMesa">¿Cómo Agregar una Mesa?</a></li>
	<li><a href="#EditarMesa">¿Cómo Editar una Mesa?</a></li>
</ul>
<hr>
<h5 id="ResumenMesa">Resumen</h5>
<p class="DatosGuia">
En este apartado se podrá agregar y editar las mesas para las ordenes en el sistema. <br><br>
<img src="img/Guia/Menu/Mesas/Mesas01.png" width="45%"><br><br>

Se puede ver que solo hay dos botones <b>"Agregar Mesa"</b> y <b>"Editar Mesa"</b>. <br><br>
</p>

<h5 id="AñadirMesa">¿Cómo Agregar una Mesa?</h5>
<p class="DatosGuia">
Para agregar mesa debes clickear el botón <b>"Agregar Mesa"</b>, aparecerá una ventana preguntando <b>¿Desea agregar una nueva mesa?</b>. <br><br>
<img src="img/Guia/Menu/Mesas/Mesas02.png" width="45%"><br><br>

Luego presionamos aceptar y nos saldrá una notificación indicando que se agregó una nueva mesa y el número de mesa. <br> <br>
<img src="img/Guia/Menu/Mesas/Mesas03.png" width="45%"><br>
</p>

<h5 id="EditarMesa">¿Cómo Editar una Mesa?</h5>
<p class="DatosGuia">
Para editar una mesa debemos clickear el botón <b>"Editar Mesa"</b>, nos saldrá una ventana para seleccionar la mesa. <br><br>
<img src="img/Guia/Menu/Mesas/Mesas04.png" width="45%"><br><br>
Al seleccionar se puede ver el estado de la mesa si esta <b>"Activa"</b> o <b>"Inactiva"</b><br><br>
<img src="img/Guia/Menu/Mesas/Mesas05.png" width="45%"><br><br>
Seleccionamos la mesa a editar, nos saldrá para seleccionar el estado, seleccionamos el estado y presionamos guardar. <br><br>
<img src="img/Guia/Menu/Mesas/Mesas06.png" width="45%"><br><br>
Nos saldrá una notificación indicando el número mesa que editamos y estado de la mesa. <br><br>
<img src="img/Guia/Menu/Mesas/Mesas07.png" width="45%"><br><br>
</p>