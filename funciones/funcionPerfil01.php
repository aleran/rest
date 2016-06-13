<span id="indexPdatos"></span>
<div style="position:absolute;right: 100px">
<a href="#indexPdatos" class="VIndice">Indice</a>
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
	<li><a href="#ResumenPdatos">Resumen</a></li>
	<li><a href="#EditarDatos">Editar mis datos</a></li>
</ul>
<hr>
<h5 id="ResumenPdatos">Resumen</h5>
<p class="DatosGuia">
En este apartado podemos visualizar los datos de mi perfil de usuario y además podemos editar nuestros datos. <br><br>
<img src="img/Guia/Perfil/Datos/Datos01.png" class="ImgGuia"><br>
</p>
<h5 id="EditarDatos">Editar mis datos</h5>
<p class="DatosGuia">
Para editar tus datos de usuario debes presionar el botón <b>"Editar"</b>, nos saldrá una ventana como esta. <br><br>
<img src="img/Guia/Perfil/Datos/Datos02.png" width="45%"><br><br>
Realiza los cambios y luego presionamos el botón <b>"Guardar Cambios"</b> <br><br>
(<b>Nota: </b>los campos que puedes editar son nombres y apellidos y contrseña). <br><br>
(<b>Nota: </b>al resetear la contraseña queda así "cio0000" sin comillas). <br><br>
</p>