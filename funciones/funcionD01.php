<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();

$data00 = $_POST["data00"];

$DataU01 = $_SESSION['idtbr'];

$OrdenSQL = "select * from data13 where IdOrden='$data00'";
$OrdenSQL = mysql_query($OrdenSQL);
$OrdenROW = mysql_fetch_object($OrdenSQL);
$InsertOrden = "insert into data16(IdOrden,Mesa,FechaDePedido,Estatus,UsuarioOrdena,UsuarioBorra)
				value('$OrdenROW->IdOrden','$OrdenROW->Mesa','$OrdenROW->FechaDePedido','$OrdenROW->Estatus','$OrdenROW->UsuarioOrdena','$DataU01') ";
mysql_query($InsertOrden);

$EstadoMesa = "update data11 set EstadoActual='0' and NumeroOrdenActivo='0' where MesaNumero='$OrdenROW->Mesa'";
mysql_query($EstadoMesa);

$DeleteOrden = "delete from data13 where IdOrden='$OrdenROW->IdOrden'";
mysql_query($DeleteOrden);

$ip = $_SERVER["REMOTE_ADDR"];
$LogSql = "insert into data06(IdOperador, Registro, Módulo, IP, Estado)
		   value('$DataU01','Borrar orden','Menú > Ordenar > Borrar Orden: $OrdenROW->IdOrden','$ip','¡Éxitoso!')";
mysql_query($LogSql);
?>
<div id="OrdenBorrada" title="Aviso">
Orden <?php echo $OrdenROW->IdOrden; ?> Borrada.
</div>
<script>
$("#VerMesa").remove();
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
$("#OrdenBorrada").dialog({
	modal:true,
	close:function(){
		$(this).remove();
	}
})
</script>