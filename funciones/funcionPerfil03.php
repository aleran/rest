<span id="indexRegistroUsuario"></span>
<div style="position:absolute;right: 100px">
<a href="#indexRegistroUsuario" class="VIndice">Indice</a>
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
	<li><a href="#RegResumenUser">Resumen</a></li>
	<li><a href="#UserUltimo">Últimos 15</a></li>
	<li><a href="#UserRegBuscar">Buscar</a></li>
</ul>
<hr>
<h5 id="RegResumenUser">Resumen</h5>
<p class="DatosGuia">
Este apartado muestra el registro de los movimientos del usuario en el sistema, tiene dos pestañas <b>"Últimos 15"</b> y <b>"Buscar"</b> <br><br>
<img src="img/Guia/Perfil/Registros/Registros01.png" class="ImgGuia"><br>
</p>
<h5 id="UserUltimo">Últimos 15</h5>
<p class="DatosGuia">
Aquí podemos ver los últimos 15 registros que realizó el usuario. <br> <br>
<img src="img/Guia/Perfil/Registros/Registros02.png" class="ImgGuia"><br><br>
Al darle click a unos de los registros podemos ver el estado del mismo. <br><br>
<img src="img/Guia/Perfil/Registros/Registros03.png" width="45%"><br>
</p>
<h5 id="UserRegBuscar">Buscar</h5>
<p class="DatosGuia">
Aquí podemos buscar registros dentro de un rango de fechas. Sólo debemos seleccionar en los campos de texto las dos 
fechas para el rango y presionamos el botón <b>"Buscar Registros"</b> <br><br>
<img src="img/Guia/Perfil/Registros/Registros04.png" class="ImgGuia"><br><br>
Al darle click a unos de los registros podemos ver el estado del mismo al igual que en el diario.
</p>