<input type="text" id="DataFepOr00" class="iNext ui-corner-all" autocomplete="off" readonly="on" placeholder="Fecha de inicio del rango" />
<input type="text" id="DataFepOr01" class="iNext ui-corne1-all" style='border-radius:5px' autocomplete="off" readonly="on" placeholder="Fecha final del rango" />
<button id="UserSearchOr">Buscar ordenes</button><br>
<div class="LoadLog"></div>
<div class="ShowOrden"></div>
<br>

<script>
$("#DataFepOr00, #DataFepOr01").datepicker().css({
	padding:"5px",
	width:"200px"
});
$("#UserSearchOr").button().click(function(){
	val00 = $("#DataFepOr00").val();
	val01 = $("#DataFepOr01").val();
	if(val00.length!=0 && val01.length!=0){
	$.ajax({
		type:"get",
		url:"funciones/funcionP020201.php",
		data:"data00="+$("#DataFepOr00").val()+"&&data01="+$("#DataFepOr01").val(),
		beforeSend:function(){
			$(".LoadLog").html("Cargando...");
		},
		error:function(){
			$(".LoadLog").html("Error...");
		},
		success:function(data){
			$(".LoadLog").html(data);
		}
	});
	}
	else{
		$(".LoadLog").html("Uno o ambos rangos esta en blanco");
	}
});
</script>