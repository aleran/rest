<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();

$Data00 = $_POST["DataId"];
$Data01 = $_POST["NumeroPedidos"];
$Data02 = "OD".date("ydmHis");
$Data03 = $_POST["Personalizados"];
$Data04 = $_POST["NumeroPedidosPers"];

$DataU01 = $_SESSION['idtbr'];
$DataSQL00 = "insert into data13(IdOrden,Mesa,Estatus,UsuarioOrdena,efectivo,debito,credito) values('$Data02','$Data00','3','$DataU01','0','0','0')"; //agregar tipos de pago efectivo, debito y credito
$DataSQL00 = mysql_query($DataSQL00);

$DataSQL03 = "update data11 set EstadoActual='3',NumeroOrdenActivo='$Data02' where MesaNumero='$Data00' ";
$DataSQL03 = mysql_query($DataSQL03);

$ip = $_SERVER["REMOTE_ADDR"];
$LogSql = "insert into data06(IdOperador, Registro, Módulo, IP, Estado)
		   value('$DataU01','Registro de Orden','Menú > Ordenar > Mesa: $Data00 - Orden: $Data02','$ip','¡Éxitoso!')";
mysql_query($LogSql);

echo "
<script>
DataIdO = '$Data00';
</script>
";

$iterador=1;
while($iterador<=$Data01){
	if(array_key_exists("Pedido".$iterador, $_POST)){
		$IdOrden = $_POST["Pedido".$iterador]; //." - ".$_POST["Cant".$iterador]."<br>";
		$CantidadOr = $_POST["Cant".$iterador];
		$DataSQL01 = "select * from data12 where id='$IdOrden' ";
		$DataSQL01 = mysql_query($DataSQL01);
		$DataROW01 = mysql_fetch_array($DataSQL01);

		$DataSQL02 = "insert into data14(Orden,IdPlato,Costo,Personalizado,Cantidad) value('$Data02','$DataROW01[id]','$DataROW01[Costo]','0','$CantidadOr')";
		$DataSQL02 = mysql_query($DataSQL02);
	}
	$iterador++;
}
$iterar = 0;
while($iterar<=$Data03){
	if(array_key_exists("PersoOrde".$iterar, $_POST)){
		$IdOrden = $_POST["PersoOrde".$iterar];
		$PerOrden = $IdOrden."PSO".date("ymdHis");

		$DataSQL03 = "insert into data14(Orden,IdPerCan,Costo,Personalizado,Cantidad) value('$Data02','$PerOrden','0','1','0')";
		$DataSQL03 = mysql_query($DataSQL03);

		$iteradorsec=1;
		while($iteradorsec<=$Data04){
			if(array_key_exists("PedidoPerso-".$IdOrden."-".$iteradorsec, $_POST)){
				$IdOrdens = $_POST["PedidoPerso-".$IdOrden."-".$iteradorsec];
				$DataSQL04 = "select * from data12 where id='$IdOrdens' ";
				$DataSQL04 = mysql_query($DataSQL04);
				$DataROW04 = mysql_fetch_array($DataSQL04);
				
				$DataSQL05 = "insert into data15(IdPersolizado,IdPlatoSec,CostoSec) value('$PerOrden','$DataROW04[id]','$DataROW04[Costo]')";
				$DataSQL05 = mysql_query($DataSQL05);
			}
			$iteradorsec++;
		}
	}
	$iteradorsec=1;
	$iterar++;
}
?>


<script>
DataString = "Data="+DataIdO;
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
