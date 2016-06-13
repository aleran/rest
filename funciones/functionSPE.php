<div id="ResultsBus" title="Buscar Producto">
<input class="next iNext ui-corner-all" placeholder="Nombre del producto que desea buscar" id="LData" autocompete="off" onkeypress="return caraftwo(event, 'num_car','#LData', 'El producto')" />
<br>
<br>
<div id="RKL"></div>
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
$("#ResultsBus").dialog({
	modal:true,
	close:function(){
		$(this).remove();
	},
	width:400,
	height:360
});
$("#LData").keyup(function(){
	datos = $(this).val();
	if (datos.length!=0){
	$.ajax({
		type:"post",
		url:"funciones/functionSPE00.php",
		data:{data:datos},
		beforeSend:function(){
			$("#RKL").html("Buscando...");
		},
		success:function(resultados){
			$("#RKL").html(resultados);
		}
	});
	}
	else{
		$("#RKL").html("No hay resultados");
	}
});
function caraftwo(elEvento, permitidos, idelement, elemento) {
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