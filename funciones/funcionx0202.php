<div class="cont-op">
	<input type="text" name="RangoFecha01" id="RangoFecha01" class="iNext ui-corner-all" autocomplete="off" placeholder="Inicio del rango" readonly />
	<input type="text" name="RangoFecha02" id="RangoFecha02" class="iNext ui-corner-all" autocomplete="off" placeholder="Fin del rango" readonly />
	<button id="SearchDate">Buscar</button><br>
	<div id="LoadReportes"></div><br>
</div>
<script>
$("#RangoFecha01, #RangoFecha02").datepicker().css({
	padding:"5px",
	width:"200px"
});
$("#SearchDate").button().click(function(){
	//funcionx020201
	val00 = $("#RangoFecha01").val();
	val01 = $("#RangoFecha02").val();
	if(val00.length!=0 && val01.length!=0){
	$.ajax({
		type:"get",
		url:"funciones/funcionx020201.php",
		data:"data00="+$("#RangoFecha01").val()+"&&data01="+$("#RangoFecha02").val(),
		beforeSend:function(){
			$("#LoadReportes").html("Cargando...");
		},
		error:function(){
			$("#LoadReportes").html("Error...");
		},
		success:function(data){
			$("#LoadReportes").html(data);
		}
	});
	}
	else{
		$("#LoadReportes").html("Uno o ambos rangos esta en blanco");
	}
});
</script>