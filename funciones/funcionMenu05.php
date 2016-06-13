<span id="indexBuscarOrden"></span>
<div style="position:absolute;right: 100px">
<a href="#indexBuscarOrden" class="VIndice">Indice</a>
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
	<li><a href="#ResumenBuscarOrden">Resumen</a></li>
	<li><a href="#BBuscarOrden">¿Cómo Buscar una Orden?</a></li>
</ul>
<hr>
<h5 id="ResumenBuscarOrden">Resumen</h5>
<p class="DatosGuia">
En este apartado se pueden buscar las ordenes activas, despachadas y borradas del sistema. 
Lo primero que se puede ver es un campo de texto el cuál se usará para buscar la orden.<br><br>
<img src="img/Guia/Menu/BuscarOrden/BuscarOrden01.png" class="ImgGuia"><br>
</p>

<h5 id="BBuscarOrden">Buscar Orden</h5>
<p class="DatosGuia">
Para buscar una orden solo debemos ingresar el código de la orden en el campo de texto y nos saldrá una 
lista con los resultados de la busqueda con el código, número de mesa de atención y fecha de orden (<b>Nota:</b> la orden tiene un 
código estructurado por fecha siendo los primeros dos (2) números el año, los siguientes dos (2) el día y los 
siguientes dos (2) el mes, los que siguen son números aleatorios para no repetir la orden). <br><br>
<img src="img/Guia/Menu/BuscarOrden/BuscarOrden02.png" class="ImgGuia"><br><br>
Para ver la orden solo debemos clickear en la orden que muestra la tabla y nos mostrará los datos de la orden. <br><br>
<img src="img/Guia/Menu/BuscarOrden/BuscarOrden03.png" width="45%"><br><br>
(<b>Nota:</b> La primera tabla que aparece son las ordenes activas, la segunda tabla son las ordenes borradas). <br><br>
<img src="img/Guia/Menu/BuscarOrden/BuscarOrden04.png" width="60%"><br><br>
</p>