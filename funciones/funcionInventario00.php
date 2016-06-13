<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
?>
<div class="cont-op">
<span id="indexInventario"></span>
<div style="position:absolute;right: 100px">
<a href="#indexInventario" class="VIndiceInventario">Indice</a>
</div>
<style>
.VIndiceInventario{
	position: absolute;
	z-index: 20;
}
</style>
<script>
$(".VIndiceInventario").button();
$(document).ready(function(){
	$(".guia-index li").click(function(){
		data = "./"+$(this).find("a").attr("href");
		window.location.replace(data);
	});
});
</script>
<ul class="guia-index">
	<li><a href="#InventarioResumen">Resumen</a></li>
	<li><a href="#InventarioVProducto">Ver productos del inventario</a></li>
	<li><a href="#InventarioVLote">Ver lotes de productos</a></li>
	<li><a href="#InventarioActualizar">Actualizar Productos</a></li>
	<li><a href="#InventarioIngresar">¿Cómo ingresar productos?</a></li>
	<li><a href="#InventarioModificar">¿Cómo modificar productos?</a></li>
</ul>
<hr>
<h5 id="InventarioResumen">Resumen</h5>
<p class="DatosGuia">
En este apartado podemos mantener el control de los productos en el sistema, en donde tendremos el control de ingreso 
modificación y actualización de productos, aquí tendremos cuatro (4) pestañas.
<ol>
	<li>Ver inventario</li>
	<li>Actualizar</li>
	<li>Ingresar Producto</li>
	<li>Modificar</li>
</ol>
<img src="img/Guia/Inventario/Inventario01.png" class="ImgGuia" style="width:80%"><br>
</p>

<h5 id="InventarioVProducto">Ver productos del inventario</h5>
<p class="DatosGuia">
Para ver los productos ingresados en el sistema, seleccionamos la pestaña <b>"Ver Inventario"</b>, vamos a tener dos (2) opciones 
ya sea presionando el botón <b>"Buscar"</b> o clickeando en los productos que aparecen en pantalla. <br><br>
<img src="img/Guia/Inventario/Inventario02.png" class="ImgGuia" style="width:50%"><br><br>
Al seleccionar nos saldrá una ventana con los datos del producto y las próximas fechas de caducidad del lote en inventario. <BR><BR>
<img src="img/Guia/Inventario/Inventario03.png" class="ImgGuia" style="width:50%"><br><br>
Al darle click al lote podemos ver los datos del mismo. <br> <br>
<img src="img/Guia/Inventario/Inventario04.png" class="ImgGuia" style="width:50%"><br><br>
Si deseas buscar el producto presionas el botón <b>"Buscar"</b> nos saldrá una ventana indicandonos que deseamos buscar 
si el producto o lote de producto. <br><br>
<img src="img/Guia/Inventario/Inventario05.png" class="ImgGuia" style="width:80%"><br><br>
Ingresamos en el campo de texto el producto que deseamos buscar y debajo del campo de texto nos saldrá los resultados. <br><br>
<img src="img/Guia/Inventario/Inventario06.png" class="ImgGuia" style="width:80%"><br><br>
Le damos click a uno de los resultados y nos saldrá la información del producto.
</p>
<h5 id="InventarioVLote">Ver lotes de productos</h5>
<p class="DatosGuia">
Para ver los lote del producto hay dos formas. <br> <br>
<ol>
	<li>Desde la ventana de datos de producto "cómo se mensionó en el tema anterior"</li>
	<li>Presionando el botón <b>"Buscar"</b> y seleccionamos lote, en el campo texto ingresamos el número de lote y seleccionamos el lote.</li>
</ol>
<img src="img/Guia/Inventario/Inventario07.png" class="ImgGuia" style="width:80%"><br><br>
</p>
<h5 id="InventarioActualizar">Actualizar Productos</h5>
<p class="DatosGuia">
Para actualizar el producto seleccionamos desde la pestaña "Actalizar" uno de los dos (2) iconos al lado del producto 
(<span class="octicon octicon-plus"></span> Para agregar cantidad al producto y <span class="octicon octicon-trashcan"></span> Decrementar el producto). <br><br>
<img src="img/Guia/Inventario/Inventario08.png" class="ImgGuia" style="width:70%"><br><br>
Al seleccionar <span class="octicon octicon-plus"></span> podemos incrementar la cantidad del producto en el sistemas, 
nos saldrá la siguiente ventana y debemos ingresar la fecha de caducidad, la cantidad del producto y el tipo de unidad 
(Litro, kilogramo). <br> <br>
<img src="img/Guia/Inventario/Inventario09.png" class="ImgGuia" style="width:50%"><br><br>
Luego presionamos el botón actualizar y nos saldrá una ventana con el resumen de la operación. <br> <br>
<img src="img/Guia/Inventario/Inventario10.png" class="ImgGuia" style="width:50%"><br><br>
Si seleccionamos <span class="octicon octicon-trashcan"></span> podemos restar la cantidad de producto ya sea por caducado o por uso. <br>
Al presionar al icono nos saldrá una ventana donde debemos ingresar el motivo de la resta, la cantidad y el tipo de unidad. <br><br>
<img src="img/Guia/Inventario/Inventario11.png" class="ImgGuia" style="width:50%"><br><br>
Luego presionamos actualizar y nos saldrá una ventana con el resumen de la operación. <br> <br>
<img src="img/Guia/Inventario/Inventario12.png" class="ImgGuia" style="width:50%"><br><br>
</p>
<h5 id="InventarioIngresar">¿Cómo ingresar productos?</h5>
<p class="DatosGuia">
En la pestaña de <b>"Ingresar Producto"</b> presionamos el botón <b>"Ingresar Producto"</b>, nos saldrá una ventana e ingresaremos 
El nombre del producto, la descripción y el tipo de unidad (Litro, Kilogramo o por unidades). <br><br>
<img src="img/Guia/Inventario/Inventario13.png" class="ImgGuia" style="width:50%"><br><br>
Luego presionamos <b>"Ingresar"</b> y nos saldrá una ventana indicandonos el ingreso del nuevo producto. <br> <br>
<img src="img/Guia/Inventario/Inventario14.png" class="ImgGuia" style="width:50%"><br><br>
</p>
<h5 id="InventarioModificar">¿Cómo modificar productos?</h5>
<p class="DatosGuia">
Para modificar un producto debemos clickear en el icono <img src="img/edit.png" width="14px"> nos saldrá una ventana 
con el Nombre, la descripción y el tipo de unidad a modificar. <br> <br>
<img src="img/Guia/Inventario/Inventario15.png" class="ImgGuia" style="width:50%"><br><br>
Realizamos los cambios y presionamos <b>"Guardar Cambios"</b> (o tambien podemos eliminar). <br><br>
<img src="img/Guia/Inventario/Inventario16.png" class="ImgGuia" style="width:50%"><br><br>
Luego de guardar nos saldrá una notificación indicando el resumen de la operación. <br><br>
<img src="img/Guia/Inventario/Inventario17.png" class="ImgGuia" style="width:50%"><br><br>
Si deseamos borrar/eliminar el producto, presionamos el botón <b>"Eliminar"</b> nos saldrá una pregunta <b>"¿Desea eliminar el producto?"</b> <br><br>
<img src="img/Guia/Inventario/Inventario18.png" class="ImgGuia" style="width:50%"><br><br>
Luego presionamos aceptar y nos saldrá una ventana de notificación avisando que se ha borrado el producto. <br><br>
<img src="img/Guia/Inventario/Inventario19.png" class="ImgGuia" style="width:50%"><br><br>
</p>
</div>