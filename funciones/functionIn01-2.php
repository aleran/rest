<div id="Pestañas" title="Buscar">
	<ul>
		<li><a href="#Productos">Producto</a></li>
		<li><a href="#Lote">Lote</a></li>
	</ul>
	
	<div id="Productos">
		<b>Nombre Producto</b><br>
		<input type="text" placeholder="Nombre del producto que desea buscar" onkeyup="BuscarPL(this)" onkeypress="return caraf(event, 'num_car','#Data00', 'El producto')" class="next iNext ui-corner-all" name="Data00" id="Data00" />
		<br><br><span class="Avisar"></span>
		<div id="BProducto"></div>
	</div>
	
	<div id="Lote">
		<b>Lote</b><br>
		<input type="text" placeholder="Lote del producto que desea buscar omita 'LT' al buscar" onkeyup="BuscarPL(this)" onkeypress="return caraf(event, 'num_car','#Data01', 'El lote')" class="next iNext ui-corner-all" name="Data01" id="Data01" />
		<br><br><span class="Avisar"></span>
		<div id="Blote"></div>
	</div>
</div>
<style>
.next{
padding:0.3em;
width:100%;
}
#Productos,#Lote{
width:60%;
height:90%;
}
.Avisar{
border-radius:5px;
}
</style>
<script>
$("#Pestañas").dialog({
	modal:true,
	close:function(){
		$(this).remove();
	},
	width:700,
	height:350
});
$("#Pestañas").tabs();
$( "#Pestañas" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
$( "#Pestañas li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );

function BuscarPL(data){
	if($(data).attr("id")=="Data00"){
		Destino = "funcionIn01-201.php";
		Busqueda = $("#BProducto");
	}
	if($(data).attr("id")=="Data01"){
		Destino = "funcionIn01-202.php";
		Busqueda = $("#Blote");
	}
	DataString = "Data="+$(data).val();
	$.ajax({
		type: "POST",
		url: "funciones/"+Destino,
		data: DataString,
		beforeSend:function(){
			Busqueda.html('Buscando...');
		},
		error:function(){
			Busqueda.html("<div class='ErrorCarga' title='Error de carga'><span style='color:red'>Disculpe, hubo un problema de conexión y no se pudo cargar su petición.</span></div>");
			$(".ErrorCarga").dialog({
				modal:true,
				close:function(){
					$(this).remove();
				}
			});
		},
		success:function(data){
			Busqueda.html(data);
		}
	});
}

function caraf(elEvento, permitidos, idelement, elemento) {
$(idelement).removeClass("ui-state-error");
var tps = $(".Avisar");
tps.removeClass("ui-state-error");
tps.html("");
var numeros = "0123456789";
var caracteres = " abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
var especilaes = "-+,_@";
var numeros_caracteres = numeros + caracteres;
var espe_car_nume = numeros + caracteres + especilaes;
var teclas_especiales = [8, 9, 37, 38, 40];
switch(permitidos) {
	case 'num':
		permitidos = numeros;
		break;
	case 'car':
		permitidos = caracteres;
		break;
	case 'num_car':
		permitidos = numeros_caracteres;
		break;
	case 'esp':
		permitidos = espe_car_nume;
		break;
}
var evento = elEvento || window.event;
var codigoCaracter = evento.charCode || evento.keyCode;
var caracter = String.fromCharCode(codigoCaracter);
var tecla_especial = false;
for(var i in teclas_especiales) {
	if(codigoCaracter == teclas_especiales[i]) {
		tecla_especial = true;
	}
	if(permitidos.indexOf(caracter) == -1 && codigoCaracter!=8 && codigoCaracter!=9 && codigoCaracter!=37 && codigoCaracter!=38 && codigoCaracter!=39 && codigoCaracter!=40){
		mensaje=elemento + " debe constar de caracteres alfanuméricos";
		if(codigoCaracter==13){
			mensaje="La tecla intro esta deshabilitada";
		}
		$(idelement).addClass( "ui-state-error" );
		tps
		.text( mensaje )
		.addClass( "ui-state-error" );
	}
}
return permitidos.indexOf(caracter) != -1 || tecla_especial;
}
</script>
