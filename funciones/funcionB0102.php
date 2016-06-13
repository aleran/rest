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
	<th>Modificar</th>
</thead>
<tbody id='UsuariosRegistradosMod'>
</tbody>
<tfoot>
<th class='lista-cambiar' colspan='5'>
<img src='img/backoff.png' id='BackUsersOffMod' class='back-forward'/>
<img src='img/back.png' id='BackUsersOnMod' class='back-forward'/>

<img src='img/stepbackoff.png' id='StepBackUsersOffMod' class='back-forward'/>
<img src='img/stepbackon.png' id='StepBackUsersOnMod' class='back-forward'/>
<div id='pagina_actualMod' class='actual-pagina'></div>
<img src='img/stepforwardon.png' id='StepForwardUsersOnMod' class='back-forward'/>
<img src='img/stepforwardoff.png' id='StepForwardUsersOffMod' class='back-forward'/>

<img src='img/fow.png' id='ForwardUsersOnMod' class='back-forward'/>
<img src='img/fowoff.png' id='ForwardUsersOffMod' class='back-forward'/>
</th>
</tfoot>
</table>";
?><br>
<div id="cargadatos"></div>
<div id="searchresuluserdataLo"></div>
<script type="text/javascript" src="js/subfunciones.js"></script>
<script type="text/javascript" src="js/subfuncionB102.js"></script>
<div id="dialogform" title="Modificar usuario">
<p class="validateTips">Todos los campos son requeridos.</p>
<div id="editarusuario"></div>
</div>
<center><button id="BEditarW">Buscar</button></center>
<script type="text/javascript">
$("#BEditarW").button();
$("#BEditarW").click(function(){
	resultados = $("#searchresuluserdataLo");
	$.ajax({
		url:"funciones/funcionSuser.php",
		beforeSend:function(){
			resultados.html("Cargando...");
		},
		error:function(){
			resultados.html("Error...");
		},
		success:function(xhr){
			resultados.html(xhr);
		}
	});
});
</script>