<span id="indexResumenUsuario"></span>
<div style="position:absolute;right: 100px">
<a href="#indexResumenUsuario" class="VIndice">Indice</a>
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
	<li><a href="#ResumenUser">Resumen</a></li>
	<li><a href="#ResumenDiarioUsuario">Diario</a></li>
	<li><a href="#ResumenBuscarUsuario">Buscar</a></li>
</ul>
<hr>
<h5 id="ResumenUser">Resumen</h5>
<p class="DatosGuia">
Este apartado podemos ver un resumen o reporte de las ordenes realizadas por el usuario, tiene dos pestañas <b>"Diario"</b> y <b>"Buscar"</b>. <br><br>
<img src="img/Guia/Perfil/Resumen/Resumen01.png" class="ImgGuia"><br>
</p>
<h5 id="ResumenDiarioUsuario">Diario</h5>
<p class="DatosGuia">
El resumen diario se puede ver las ordenes realizadas y borradas en el día por el usuario. <br><br>
<img src="img/Guia/Perfil/Resumen/Resumen02.png" class="ImgGuia"><br>
</p>
<h5 id="ResumenBuscarUsuario">Buscar</h5>
<p class="DatosGuia">
En buscar podemos buscar ordenes dentro de un rango de fechas. Sólo debemos seleccionar en los campos de texto las dos 
fechas para el rango y presionamos el botón <b>"Buscar Ordenes"</b> <br><br>
<img src="img/Guia/Perfil/Resumen/Resumen03.png" class="ImgGuia"><br><br>
(<b>Nota:</b> en ambos casos <b>"Diario y Buscar"</b> podemos darle click a la orden y visualizar el estado de la misma).
</p>