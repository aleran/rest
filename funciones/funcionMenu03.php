<span id="indexEditar"></span>
<div style="position:absolute;right: 100px">
<a href="#indexEditar" class="VIndice">Indice</a>
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
	<li><a href="#ResumenEditar">Resumen</a></li>
	<li><a href="#CEditarPlato">¿Cómo editar un plato o categoría?</a></li>
</ul>
<hr>
<h5 id="ResumenEditar">Resumen</h5>
<p class="DatosGuia">
En este apartado se podrá visualizar los últimos diez (10) plato/categoría que se han actualizado, además un campo de texto 
para buscar otro plato/categoría que se desee editar o borrar. <br><br>
<img src="img/Guia/Menu/Editar/Editar01.png" class="ImgGuia"><br><br>
</p>

<h5 id="CEditarPlato">¿Cómo editar un plato o categoría?</h5>
<p class="DatosGuia">
Para poder editar un plato o categoría hay dos formas
<ol>
	<li>Seleccionar el plato/categoría de la lista de los últimos diez (10).</li>
	<li>Ingresar en el campo de texto el plato a editar(Los resultados aparecerán justo debajo del campo de texto).</li>
</ol>

(<b>Nota: </b> los platos o categorías que tengan una orden relacionada no pondrán ser borradas o ser editadas mas allá del nombre y el costo.)<br><br>
Al seleccionar un plato/categoría nos saldrá una ventana. <br><br>
<img src="img/Guia/Menu/Editar/Editar02.png" width="45%"><br><br>
En la ventana tenemos dos opciones <b>"Guardar"</b> y <b>"Eliminar"</b>, si no se eliminará el plato o categoría se realizan los cambios 
y presionamos <b>"Guardar"</b>.
(<b>Nota: </b> Las opciones de edición son similares a los de añadir un plato o categoría visite el apartado de <b>"Añadir" </b> para revisar las opciones.)<br><br>

Si presionamos <b>"Eliminar" </b> nos saldrá una ventana preguntandon si <b>"¿Desea borrar el plato?"</b>.<br><br>
<img src="img/Guia/Menu/Editar/Editar03.png" width="45%"><br><br>
Luego seleccionamos aceptar y nos saldrá una ventana notificando el éxito de la acción. <br><br>
<img src="img/Guia/Menu/Editar/Editar04.png" width="45%"><br><br>
</p>