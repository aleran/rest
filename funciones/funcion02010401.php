<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
$Data = $_POST["Data"];
$Data01 = $_POST["Data01"];

$NewData = "";
if($Data=="5"){
	$Data="0";
	$NewData = ",NumeroOrdenActivo='0'";
}

$SQL00 = "select * from data11 where MesaNumero='$Data01' ";
$SQL00 = mysql_query($SQL00);
$ROW00 = mysql_fetch_object($SQL00);

$ordenupdate = "update data13 set Estatus='$Data' where IdOrden='$ROW00->NumeroOrdenActivo'";
mysql_query($ordenupdate);

$DataSQL00 = "update data11 set EstadoActual='$Data'$NewData where MesaNumero='$Data01'";
mysql_query($DataSQL00);

$update_despacho = "UPDATE data14 SET Despacho='1' WHERE Orden='$ROW00->NumeroOrdenActivo'";
mysql_query($update_despacho);

?>
<center><span style="color:green">Datos Guardados</span></center>
<script type="text/javascript">
$.ajax({
		url: "funciones/funcion0201.php",
		beforeSend:function(){
			$("#CargaMenu").html("Cargando...");
		},
		error:function(){
			$("#CargaMenu").html("<b>Error de carga, no se pudo conectar al servidor...</b>");
		},
		success:function(data){
			$("#CargaMenu").html(data);
		}
	});
</script>