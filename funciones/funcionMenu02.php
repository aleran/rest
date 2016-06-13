<span id="indexAnadir"></span>
<div style="position:absolute;right: 100px">
<a href="#indexAnadir" class="VIndice">Indice</a>
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
	<li><a href="#ResumenAnadir">Resumen</a></li>
	<li><a href="#AnadirPlatoCategoria">¿Como añadir Plato o Categoría?</a></li>
	<li><a href="#Tipos">Ingresar Tipo Plato/Categoría</a></li>
</ul>
<hr>
<h5 id="ResumenAnadir">Resumen</h5>
<p class="DatosGuia">
En este este apartado podemos añadir nuevos platos, categorias y piezas de un plato, además de poder visualizar 
una lista de los últimos diez (10) platos añadidos. <br><br>
<img src="img/Guia/Menu/Añadir/Añadir01.png" class="ImgGuia"><br>
</p>
<h5 id="AnadirPlatoCategoria">¿Como añadir Plato o Categoría?</h5>
<p class="DatosGuia">
1.- Para añadir un plato o categoría debe presionar el botón <b>"Nuevo Plato o Categoría"</b> luego le saldrá un ventana como la siguiente. <br><br>
<img src="img/Guia/Menu/Añadir/Añadir02.png" width="30%"><br><br>
2.- Luego ingresamos la opciones que deseamos y presionamos añadir. <br>
Nota: La instrucción siguiente explica como añadir plato común, categoria o piezas de un plato perzonalizado.
</p>

<h5 id="Tipos">Ingresar Tipo Plato/Categoría</h5>
<ol class="guia-index">
	<li><a href="#Pcomun">Plato común</a></li>
	<li><a href="#pPieza">Pieza</a></li>
	<li><a href="#PCategoria">Categoría</a></li>
</ol>
<p class="DatosGuia">
1.- <b id="Pcomun">Plato común: </b> es un plato, bebiba, postre o todo aquel que no requiere de modificación y 
ya ofrece un precio establecido además puede ser parte de una categoría. <br><br>
<img src="img/Guia/Menu/Añadir/Añadir0201.png" width="45%">
<img src="img/Guia/Menu/Añadir/Añadir0202.png" width="45%"><br><br>
(En el segundo caso el plato <b>"Gordon Blue"</b> seria el plato común en la categoría de pollos) y para añadir este tipo de plato puede ser de dos maneras. <br><br>

1.1.- <b>Primera manera:</b> luego de presionar <b>"Nuevo Plato o Categoría"</b>, ingresamos el nombre, ingresamos el costo (El botón 
debajo del costo debe estar activo, solo se desactiva al ingresar una categoría para indicar que no tiene costo), y luego seleccionamos 
en que parte del menú estará (los botones siguientes se dejaran inactivos), por último presionamos añadir. <br><br>
<img src="img/Guia/Menu/Añadir/Añadir03.png" width="60%"><br><br>
Luego nos saldrá un aviso con las opciones que ingresamos, indicandonos que hemos añadido con éxito el plato. <br><br>
<img src="img/Guia/Menu/Añadir/Añadir04.png" width="45%"><br><br>

1.2.- <b>Segunda manera: </b> esta manera se trata de añadir el plato común a una categoría, para realizar esta acción seguimos los pasos 
de la primera manera hasta seleccionar en que parte del menú estará, luego apareceran dos botones <b>"Es una categoría"</b> o <b>"Parte de una categoría"</b>. <br><br>
<img src="img/Guia/Menu/Añadir/Añadir0301.png" width="45%"><br><br>
Luego debemos seleccionar <b>"Parte de una categoría"</b>, y se desplegarán las categorias existentes en esa parte del menú. <br><br>
<img src="img/Guia/Menu/Añadir/Añadir05.png" width="45%"><br><br>
Seleccionamos la categoría (El botón <b>"Parte de un plato"</b> se dejará inactivo), y presionamos añadir, luegos nos saldrá un aviso, 
indicando que hemos ingresado con éxito el plato en la categoría seleccionada. <br><br>
<img src="img/Guia/Menu/Añadir/Añadir06.png" width="45%"><br><br>

2.- <b id="pPieza">Pieza o parte de un plato: </b> como su nombre lo indica es una pieza de un plato personalizado, 
un ejemplo es selecionar (Carne guisada, arroz o pasta y ensalada. Cada pieza es intercambiable) 
se puede identificar porque adelante del precio esta el nombre de <b>"Pieza"</b>. <br><br>
<img src="img/Guia/Menu/Añadir/Añadir0202.png" width="45%"><br><br>
Para añadir una pieza al menú, seguimos los pasos de la segunda manera para agregar un plato común. <br><br>
<img src="img/Guia/Menu/Añadir/Añadir05.png" width="60%"><br><br>
Luego seleccionamos <b>"Parte de un plato"</b><br><br>
<img src="img/Guia/Menu/Añadir/Añadir07.png" width="60%"><br><br>
Luego presionamos añadir y nos saldrá un aviso indicandonos que hemos agreado <b>"Parte un plato"</b> <br><br>
<img src="img/Guia/Menu/Añadir/Añadir08.png" width="45%"><br><br>

3.- <b id="PCategoria">Categoría: </b> es un grupo de platos comunes o de piezas que se ecuentran con caracteriscas comunes, por ejemplo "Pollos", 
este se identifica por ser de color azul y tener escrito <b>"Categoría"</b> a un lado. <br><br>
<img src="img/Guia/Menu/Añadir/Añadir0202.png" width="45%"><br><br>
Para añadir una categoría seguimos los pasos de la primera manera para añadir un plato común. <br><br>
<img src="img/Guia/Menu/Añadir/Añadir03.png" width="60%"><br><br>
Luego desmarcamos el botón debajo de costos y seleccionamos el botó <b>"Es una categoría"</b>.<br><br>
<img src="img/Guia/Menu/Añadir/Añadir09.png" width="45%"><br><br>
Luego presionamos añadir y nos saldrá una notificación indicandonos que hemos añadido una categoría (Nota el costo nos saldrá en 0.00). <br><br>
<img src="img/Guia/Menu/Añadir/Añadir10.png" width="45%"><br><br>

</p>