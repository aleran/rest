<div id="ResultsBus" title="Buscar Retiro de inventario">
<input class="nextr iNext ui-corner-all" placeholder="Fecha inicio" id="InDatauno" autocompete="off" />
<input class="nextr iNext ui-corner-all" placeholder="Fecha inicio" id="InDatados" autocompete="off" />
<button id="SearchIn"><span class="octicon octicon-search"></span> Buscar</button>
<br>
<div id="gjl"></div>
</div>
<style>
.nextr{
padding:0.3em;
width:30%;
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
	width:500,
	height:360
});
$("#InDatauno").datepicker();
$("#InDatados").datepicker();
$("#InDatauno").focus();
$("#SearchIn").button().click(function(){
	if($("#InDatauno").val().length!=0 && $("#InDatados").val().length!=0){
	$.ajax({
		type:"post",
		url:"funciones/funcionInSearch00.php",
		data:{
			data01:$("#InDatauno").val(),
			data02:$("#InDatados").val()
		},
		beforeSend:function(){
			$("#gjl").html("Cargando...");
		},
		success:function(result){
			$("#gjl").html(result);
		}
	});
	}
	else{
		$("#gjl").html("Campos vacios...");
		}
});
</script>