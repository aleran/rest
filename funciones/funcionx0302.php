<div class="cont-op">
<input type="text" id="DataFe00" class="iNext ui-corner-all" autocomplete="off" readonly="on" placeholder="Fecha de inicio del rango" />
<input type="text" id="DataFe01" class="iNext ui-corner-all" autocomplete="off" readonly="on" placeholder="Fecha final del rango" />
<button id="Evaluar">Buscar registro</button><br>
<div id="LoadLog"></div>
<div id="MostrarRegistros"></div>
<br>
</div>

<script>
$("#DataFe00, #DataFe01").datepicker().css({
	padding:"5px",
	width:"200px"
});
$("#Evaluar").button().click(function(){
	val00 = $("#DataFe00").val();
	val01 = $("#DataFe01").val();
	if(val00.length!=0 && val01.length!=0){
	$.ajax({
		type:"get",
		url:"funciones/funcionx030201.php",
		data:"data00="+$("#DataFe00").val()+"&&data01="+$("#DataFe01").val(),
		beforeSend:function(){
			$("#LoadLog").html("Cargando...");
		},
		error:function(){
			$("#LoadLog").html("Error...");
		},
		success:function(data){
			$("#LoadLog").html(data);
		}
	});
	}
	else{
		$("#LoadLog").html("Uno o ambos rangos esta en blanco");
	}
});
</script>