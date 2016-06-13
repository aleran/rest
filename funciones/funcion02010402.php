<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$DataChange00 = $_POST["data"];
$DataSQL00 = "select * from vista05 where NumeroOrdenActivo='$DataChange00'";
$DataSQL00 = mysql_query($DataSQL00);
$DataROW00 = mysql_fetch_array($DataSQL00);
if($DataROW00["MesaNumero"]==""){
	echo "Esta orden ya fue despachada...";
}
if($DataROW00["MesaNumero"]!=""){
?>
<!-- <div class="LoadFullScreen"> -->
	<!-- <div class="content-mod"> -->
		<!-- <div class="header-content">Cambiar Orden: -->
		<div id="ContentCambio" title='<?php echo $DataROW00["NumeroOrdenActivo"]; ?>'>
			<?php
				echo "
				<script>
					var data00='$DataROW00[NumeroOrdenActivo]';
					var data01='$DataROW00[MesaNumero]';
				</script>
				";
			?>
			<!-- <span class="button-close ui-button-icon-primary ui-icon ui-icon-closethick"></span> -->
		<!-- </div> -->
		<div class="sec-content" id="LoadSecContent">

		</div>
		</div>
	<!-- </div> -->
<!-- </div> -->
<?php } ?>
<script type="text/javascript">
$("#ContentCambio").dialog({
	modal:true,
	close:function(){
		$(this).remove();
	},
	width:800,
	height:450
});
$.ajax({
	type:"post",
	url: "funciones/funcion0201040201.php",
	data: "Data="+data01+"&&DataOrden="+data00,
	beforeSend:function(){
		$("#LoadSecContent").html("Cargando...");
	},
	error:function(){
		$("#LoadSecContent").html("Error de conexión...");
	},
	success:function(data){
		$("#LoadSecContent").html(data);
	}
});
$(".button-close").click(function(){
	$(".LoadFullScreen").remove();
	$("#VerMesa").dialog("close");
	DataString = "Data="+data01;
	$.ajax({
		type:"POST",
		url: "funciones/funcion020104.php",
		data: DataString,
		beforeSend:function(){
			$("#OrdenarCheck").html("Cargando...");
		},
		error:function(){
			$("#OrdenarCheck").html("Error de conexion...");
		},
		success:function(data){
			$("#OrdenarCheck").html(data);
		}
	});
});
</script>
<style type="text/css">
.button-close{
	position: absolute;
	top: 10px;
	right: 10px;
	background-color: white;
	border-radius: 5px;
	border: 1px solid silver;
}
.button-close:hover{
	border-color: red;
}
.header-content{
	width: 99%;
	background-color: #0279C0;
	color: white;
	padding: 5px;
	border-radius: 5px;
	font-weight: bold;
}
.content-mod{
	background-color: white;
	width: 65%;
	height: 65%;
	border-radius: 5px;
	border: 1px solid silver;
	overflow-y: auto;
	overflow-x: hidden;
	color:black;
	padding: 5px;
}
.sec-content{
	padding: 10px;
}
</style>