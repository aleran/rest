<span id="indexOrdene"></span>
<div style="position:absolute;right: 100px">
<a href="#indexOrdene" class="VIndice">Indice</a>
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
	<li><a href="#ResumenOrdenes">Resumen</a></li>
	<li><a href="#EstadoMesas">Estados de las mesas</a></li>
	<li><a href="#RealizarOrden">¿Cómo realizar una orden?</a></li>
	<li><a href="#ActualizarOrden">¿Cómo actualizar el estado de una orden?</a></li>
	<li><a href="#OrdenCambiar">¿Cómo cambiar una orden?</a></li>
	<li><a href="#BorrarOrden">¿Cómo borrar una orden?</a></li>
</ul>
<hr>
<h5 id="ResumenOrdenes">Resumen</h5>
<p class="DatosGuia">
En el apartado de ordenes se podrá visualizar el estado de todas de todas las mesas y el movimiento de las ordenes en el sistema.<br><br>
Lo primero que se dispondrá es el estado de todas las mesas con un identificativo por colores, el cúal se puede identicar en que estado se encunetra la orden.	<br><br>
<img src="img/Guia/Menu/Ordenes/Ordenes01.png" class="ImgGuia"><br>
</p>
<h5 id="EstadoMesas">Estados de las mesas</h5>
<ul>
	<li><img src="img/Guia/Menu/Ordenes/Ordenes05.png" class="ImgGuiaSmall"> Este color indica que la mesa se encuentralibre para realizar una orden.</li>
	<li><img src="img/Guia/Menu/Ordenes/Ordenes02.png" class="ImgGuiaSmall"> Este color indica que se ha realizado una orden y se encuentra en edición para ser procesada.</li>
	<li><img src="img/Guia/Menu/Ordenes/Ordenes04.png" class="ImgGuiaSmall"> Este color indica que la orden se ha mandado a la cocina para ser procesada.</li>
	<li><img src="img/Guia/Menu/Ordenes/Ordenes06.png" class="ImgGuiaSmall"> Este color indica que la orden se encuentra en la cocina.</li>
	<li><img src="img/Guia/Menu/Ordenes/Ordenes03.png" class="ImgGuiaSmall"> Este color indica que esta lista para ser despachada.</li>
</ul>
<h5 id="RealizarOrden">¿Cómo realizar una orden?</h5>
<p class="DatosGuia">
<b>
1.- Lo primero que se debe hacer es darle al icono que representa a una mesa libre. <img src="img/Guia/Menu/Ordenes/Ordenes05.png" class="ImgGuiaSmallSuper"><br><br>
</b>

Al hacerlo se trasladará a esta ventana.<br>
<img src="img/Guia/Menu/Ordenes/Ordenes07.png?as=2" class="ImgGuia"><br><br>

Sumario de la ventana. <br>
<table>
	<tr>
		<td style="width:10%"><img src="img/Guia/Menu/Ordenes/Ordenes08.png" class="ImgGuiaSmallSuper"></td><td>Este icono es un enlace para regresar al estado de las mesas.</td>
	</tr>
	<tr>
		<td style="width:10%"><img src="img/Guia/Menu/Ordenes/Ordenes09.png" class="ImgGuiaSmallSuper"></td><td>Este parte representa la mesa en atención.</td>
	</tr>
	<tr>
		<td style="width:10%"><img src="img/Guia/Menu/Ordenes/Ordenes12.png" width="100%"></td><td>Este boton es para perzonalizar un plato y seleccionar el contenido del plato.</td>
	</tr>
	<tr>
		<td style="width:10%"><img src="img/Guia/Menu/Ordenes/Ordenes10.png" width="100%"></td><td>Estas son las opciones para seleccionar los platos para la orden.</td>
	</tr>
	<tr>
		<td style="width:10%"><img src="img/Guia/Menu/Ordenes/Ordenes11.png" width="100%"></td><td>Este boton es para realizar una orden.</td>
	</tr>
</table>
<b>2.- Selecciona una de las opciones del menú (Opciones que contienen los platos para las ordenes "Ver apartado añadir")</b><br>
<img src="img/Guia/Menu/Ordenes/Ordenes10.png" width="30%"><br><br>
Para los platos existen tres (3) tipos platos que se pueden seleccionar (En el apartado añadir se explica con mas detalles).
<ol>
	<li>Plato común: es un plato, bebiba, postre o todo aquel que no requiere de modificación y ya ofrece un precio establecido (Puede ser parte de una categoría)</li>
	<li>Pieza: como su nombre lo indica es una pieza de un plato personalizado, para crear un plato personalizado se debe clickear en el boton "Plato Personalizado", un ejemplo es selecionar (Carne guisada, arroz o pasta y ensalada. Cada pieza intercambiable)</li>
	<li>Categoría: es un grupo de platos comunes o de piezas que se ecuentran con caracteriscas comunes, por ejemplo "Carnes"</li>
</ol>
Nota: Las piezas y categorías se identifican a un lado con la palabra "pieza" o "categoría" el Plato común se mantiene con el preci a un lado.
<img src="img/Guia/Menu/Ordenes/Ordenes13.png" class="ImgGuia"><br><br>
<b>3.- Para finalizar presionas el icono de ordenar para procesar tu orden.</b><br>
Luego aparecerá una ventana con el resumen dela orden.<br>
<img src="img/Guia/Menu/Ordenes/Ordenes14.png" width="40%"><br><br>
La ventana tendrá un campo de selección que dice "Editando", el cúal tendrá las opciones del <a href="#EstadoMesas">Estado de las mesas</a> ya mensionados anteriormente. <br>
Además dispondrá de tres (3) botones:
<ol>
	<li>Cambiar: opcion para añadir o eliminar platos a la orden.</li>
	<li>Actualizar: se utiliza para actualizar el estado de la mesa "previamente selecionado en el campo mensionado anteriormente".</li>
	<li>Eliminar: como su nombre lo indica funciona para borrar la orden.</li>
</ol>
</p>
<h5 id="ActualizarOrden">¿Cómo actualizar el estado de una orden?</h5>
<p class="DatosGuia">
Para actualizar primero se debe selecionar la mesa con la orden a actualizar. <br>
<img src="img/Guia/Menu/Ordenes/Ordenes15.png" class="ImgGuia"><br><br>
Seleccionamos el estado. <br>
<img src="img/Guia/Menu/Ordenes/Ordenes16.png" width="40%"><br><br>
Y presionamos el boton "Actualizar".

<h5 id="OrdenCambiar">¿Cómo cambiar una orden?</h5>
Para cambiar una orden primero se debe seleccionar la mesa con la orden a cambiar. <br>
<img src="img/Guia/Menu/Ordenes/Ordenes15.png" class="ImgGuia"><br><br>

Luego presionamos el boton cambiar. <br>
<img src="img/Guia/Menu/Ordenes/Ordenes14.png" width="40%"><br><br>

Nos saldrá una ventana similar para realizar una orden (El método de cambio es muy similar para realizar una orden, los únicos cambios es la eliminación de un plato el cuál se borrará al presionar la equis (x) que se encuentra aun lado, y el boton "Ordenar" se cambia por "Guardar").
<img src="img/Guia/Menu/Ordenes/Ordenes17.png" class="ImgGuia"><br><br>

<h5 id="BorrarOrden">¿Cómo borrar una orden?</h5>
Para borrar una orden primero se debe seleccionar la mesa con la orden a borrar. <br>
Luego presionamos el boton "Eliminar". <br>
Nos saldrá una ventana preguntando si desea borrar la orden. <br>
<img src="img/Guia/Menu/Ordenes/Ordenes18.png" width="40%"><br><br>
Presionamos aceptar y no saldrá un aviso confirmando la acción. <br>
<img src="img/Guia/Menu/Ordenes/Ordenes19.png" width="40%"><br><br>
</p>