<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
?>
<div class="cont-op">
<span id="indexRegGeneral"></span>
<div style="position:absolute;right: 100px">
<a href="#indexRegGeneral" class="VIndiceReg">Indice</a>
</div>
<style>
.VIndiceReg{
	position: fixed;
	z-index: 20;
}
</style>
<script>
$(".VIndiceReg").button();
$(document).ready(function(){
	$(".guia-index li").click(function(){
		data = "./"+$(this).find("a").attr("href");
		window.location.replace(data);
	});
});
</script>
<ul class="guia-index">
	<li><a href="#ResumenRegistrosG">Resumen</a></li>
	<li><a href="#vRegistrosG">Ver un registro</a></li>
	<li><a href="#BRegistrosG">Buscar en un rango de fecha</a></li>
</ul>
<hr>
<h5 id="ResumenRegistrosG">Resumen</h5>
<p class="DatosGuia">
Este apartado muestra el registro general del sistema, todo el movimiento que se haga en el sistema 
quedará registrado y se podrá visualizar aquí. <br><br>
Hay dos pestañas la primera muestra los últimos quince (15) registros realizados y la segunda sirve para buscar entre rango de fechas. <br><br>
<img src="img/Guia/Registros/Registros00.png" class="ImgGuia" style="width:80%"><br><br>
</p>

<h5 id="vRegistrosG">Ver un registro</h5>
<p class="DatosGuia">
Para ver un registro lo puede hacer desde la tabla de los últimos quince (15) registros o buscar por rango de fecha. 
Sólo debe presionar en el registro para verlo y le saldrá una ventana con los datos. <br><br>
<img src="img/Guia/Registros/Registros01.png" class="ImgGuia" style="width:50%"><br><br>
</p>

<h5 id="BRegistrosG">Buscar en un rango de fecha</h5>
<p class="DatosGuia">
Para realizar una busqueda presionamos la pestaña <b>"Buscar"</b>, en la pestaña tendrmos 
dos campos de texto, el primer campo es la fecha inicial del rango y el segundo la fecha final. <br><br>
<img src="img/Guia/Registros/Registros02.png" class="ImgGuia" style="width:50%"><br><br>
Al presionar el campo de texto nos saldrá un calendario, seleccionamos las fechas y le damos <b>"Buscar Registro"</b>, luego nos saldrá una lista con los registros <br><br>
<img src="img/Guia/Registros/Registros03.png" class="ImgGuia" style="width:50%"><br><br>
</p>
</div>