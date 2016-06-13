<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
?>
<div class="cont-op">
<span id="indexReportesGeneral"></span>
<div style="position:absolute;right: 100px">
<a href="#indexReportesGeneral" class="VIndiceReporte">Indice</a>
</div>
<style>
.VIndiceReporte{
	position: fixed;
	z-index: 20;
}
</style>
<script>
$(".VIndiceReporte").button();
$(document).ready(function(){
	$(".guia-index li").click(function(){
		data = "./"+$(this).find("a").attr("href");
		window.location.replace(data);
	});
});
</script>
<ul class="guia-index">
	<li><a href="#ReporteGeneralResumen">Resumen</a></li>
	<li><a href="#ReporteGeneralDiario">Diario</a></li>
	<li><a href="#ReporteGeneralBuscar">Buscar</a></li>
</ul>
<hr>
<h5 id="ReporteGeneralResumen">Resumen</h5>
<p class="DatosGuia">
En este apartado podemos ver el reporte general del sistema, tiene dos pestañas <b>"Diario"</b> y <b>"Buscar"</b>. <br><br>
<img src="img/Guia/Reportes/Reportes0101.png" class="ImgGuia" style="width:80%"><br>
</p>
<h5 id="ReporteGeneralDiario">Diario</h5>
<p class="DatosGuia">
En el reporte diario podemos ver.
<ol>
	<li><b>Ordenes atendidas:</b> cantidad de ordenes realizadas.</li>
	<li><b>Platos despachados:</b> Cantidad de platos despachados.</li>
	<li><b>Ordenes Cancelados/Borradas:</b> cantidad de ordenes borradas.</li>
	<li><b>Recaudado:</b> cantidad de dinero recaudado.</li>
	<li><b>Inventario:</b> movimiento en el inventario
		<ol>
			<li><b>Nuevos productos ingresados:</b> cantidad y especificación de los productos ingresados</li>
			<li><b>Actualizado recientemente</b> productos que se han actualizado recientemente</li>
		</ol>
	</li>
</ol>
<img src="img/Guia/Reportes/Reportes01.png" class="ImgGuia" style="width:80%"><br>
</p>
<h5 id="ReporteGeneralBuscar">Buscar</h5>
<p class="DatosGuia">
Aqui podemos buscar un reporte dentro de un rango de fechas. Sólo debemos seleccionar en los campos de texto las dos 
fechas para el rango y presionamos el botón <b>"Buscar"</b>. (<b>Nota:</b> En este reporte se pueden visualizar las mismas opciones que en el diario). <br><br>
<img src="img/Guia/Reportes/Reportes02.png" class="ImgGuia" style="width:80%"><br>
</p>
</div>