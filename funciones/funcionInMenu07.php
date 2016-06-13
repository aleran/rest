<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$id = $_POST["id"];
$MenuSQL01 = "SELECT * FROM data17 WHERE id='$id'";
$MenuSQL01 = mysql_query($MenuSQL01);
$MenuROW01 = mysql_fetch_object($MenuSQL01);
?>
<div id="EditarMenus" title="Editar el Menú: <?php echo $MenuROW01->NombreMenu; ?>">
	<label>Nombre del menú</label>
	<input type="hidden" id="IdMenu" name="IdMenu" value="<?php echo $MenuROW01->id; ?>">
	<input id="NombreMenuEditar" type="text" class="text ui-widget-content ui-corner-all" autocomplete="off" onkeypress="return permitidosLetrasEditar(event, 'esp','#NombreMenu', 'nombre del menu')" placeholder="Ingresar el nombre del menú" value="<?php echo $MenuROW01->NombreMenu; ?>" />
	<div class="validateTips"></div>
	<div id="SaveDataEdit"></div>
</div>
<script>
$("#EditarMenus").dialog({
	modal:true,
	close:function(){
		$(this).remove();
	},
	width:350,
	buttons:{
		Guardar:function(){
			NombreMenuEditar = $("#NombreMenuEditar");
			IdMenu = $("#IdMenu");
			SaveDataEdit = $("#SaveDataEdit");
			if(NombreMenuEditar.val()==0){
				$(".validateTips").html("Nombre del menú vacio");
			}
			if(NombreMenuEditar.val()!=0){
				$.ajax({
					type:"post",
					url:"funciones/funcionInMenu08.php",
					data:{
						id:IdMenu.val(),
						name:NombreMenuEditar.val()
					},
					success:function(success){
						SaveDataEdit.html(success);
					}
				});
			}
		}
	}
});
function permitidosLetrasEditar(elEvento, permitidos, idelement, elemento) {
$("input").removeClass( "ui-state-error" );
var tps = $( ".validateTips" );
var numeros = "0123456789";
var caracteres = " abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚ";
var especilaes = "-+,_@";
var numeros_caracteres = numeros + caracteres;
var espe_car_nume = numeros + caracteres + especilaes;
var teclas_especiales = [8, 9, 37, 38, 40, 46];
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
	if(permitidos.indexOf(caracter) == -1 && codigoCaracter!=8 && codigoCaracter!=9 && codigoCaracter!=37 && codigoCaracter!=38 && codigoCaracter!=39 && codigoCaracter!=40 && codigoCaracter!=46){
		mensaje="El " + elemento + " debe constar de caracteres alfabéticos";
		if(codigoCaracter==13){
			mensaje="La tecla intro esta deshabilitada";
		}
		$(idelement).addClass( "ui-state-error" );
		tps
		.text( mensaje )
		.addClass( "ui-state-highlight" );
		setTimeout(function() {
			tps.removeClass( "ui-state-highlight", 1500 );
		}, 500 );
	}
}
return permitidos.indexOf(caracter) != -1 || tecla_especial;
}
</script>