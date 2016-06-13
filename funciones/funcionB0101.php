<?php
include("../config/config02.php");
funcion00();
echo "
<table class='usuarios-reg'>
<thead>
	<th>Código</th>
	<th>Cédula</th>
	<th>Nombres y Apellidos</th>
	<th>Usuario</th>
	<th>Fecha de ingreso</th>
</thead>
<tbody id='UsuariosRegistrados'>
</tbody>
<tfoot>
<th class='lista-cambiar' colspan='5'>
<img src='img/backoff.png' id='BackUsersOff' class='back-forward'/>
<img src='img/back.png' id='BackUsersOn' class='back-forward'/>

<img src='img/stepbackoff.png' id='StepBackUsersOff' class='back-forward'/>
<img src='img/stepbackon.png' id='StepBackUsersOn' class='back-forward'/>
<div id='pagina_actual' class='actual-pagina'></div>
<img src='img/stepforwardon.png' id='StepForwardUsersOn' class='back-forward'/>
<img src='img/stepforwardoff.png' id='StepForwardUsersOff' class='back-forward'/>

<img src='img/fow.png' id='ForwardUsersOn' class='back-forward'/>
<img src='img/fowoff.png' id='ForwardUsersOff' class='back-forward'/>
</th>
</tfoot>
</table>";
?>
<script type="text/javascript" src="js/subfunciones.js"></script>
<div id="DatosUsuarios" title="Datos del usuario">
</div>
<br>
<center><button id="BuscarUsuario" class="ButtonClass">Buscar Usuario</button></center>
<div id="Busqueda"></div>
<script>
$("#BuscarUsuario").click(function(){
	$.ajax({
		url: "funciones/funcionB010101.php",
		beforeSend:function(){
			$("#Busqueda").html("<img src='img/loading.gif' style='width:2%'/>Procesando, espere por favor...");
		},
		success:function(data){
			$("#Busqueda").html(data);
		}
	});
});
</script>
