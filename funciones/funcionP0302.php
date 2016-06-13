<input type="text" id="DataFep00" class="iNext ui-corner-all" autocomplete="off" readonly="on" placeholder="Fecha de inicio del rango" />
<input type="text" id="DataFep01" class="iNext ui-corner-all" autocomplete="off" readonly="on" placeholder="Fecha final del rango" />
<button id="EvaluarUser">Buscar registro</button><br>
<div class="LoadLog"></div>
<div class="MostrarRegistros"></div>
<br>

<script>
$("#DataFep00, #DataFep01").datepicker().css({
	padding:"5px",
	width:"200px"
});
$("#EvaluarUser").button().click(function(){
	val00 = $("#DataFep00").val();
	val01 = $("#DataFep01").val();
	if(val00.length!=0 && val01.length!=0){
	$.ajax({
		type:"get",
		url:"funciones/funcionP030201.php",
		data:"data00="+$("#DataFep00").val()+"&&data01="+$("#DataFep01").val(),
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