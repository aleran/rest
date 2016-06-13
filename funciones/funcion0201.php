<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
?>
<style>
.Mesas{
margin: 0 auto;
width:60%;
}
.Mesas td{
text-align:center;
cursor:pointer;
border:2px solid silver;
border-radius:5px;
}
.Mesas td:hover{
border:2px solid #0279C0;
}
.Mesas td:active{
border:2px solid #c00;
}
.DataMesaPedido,#EditPedi{
background-color: gainsboro;
}
.DataMesaC,#ProcesandoMesa{
background-color: #61c9c6;
}
.DataMesaRet,#OrdenCocina{
background-color: #caed3e;
}
.MesaDespachando,#Despachando{
background-color: #6ac961;
}
.colors{
	display: inline-block;
	border: 1px solid silver;
	width: 13px;
	height: 13px;
}
.Nm{
	font-size: 13px !important;
}
</style>
<h3>Mesas
<div class="colors" id="Desocupado" title="Mesa desocupada"></div>
<!-- <div class="colors" id="EditPedi" title="Editando Orden"></div> -->
<div class="colors" id="OrdenCocina" title="Orden en cocina"></div>
<div class="colors" id="ProcesandoMesa" title="Platos por despachar"></div>
<div class="colors" id="Despachando" title="Despachando Orden"></div>
<button class="Nm">Recargar</button>
</h3>
<table class='Mesas'>
	<tr>
		<?php
		$DataSQL00 = "select * from data11 where Estado='1'";
		$DataSQL00 = mysql_query($DataSQL00);
		$i=0;
		mysql_query("update data11 set EstadoActual='0' where NumeroOrdenActivo='0'");
		while($DataROW00 = mysql_fetch_array($DataSQL00)){
			$i++;
			$itr = $i%5;
			$TDClass="";
			if($DataROW00["EstadoActual"]==0){
				$TDClass = "DataMesa";
			}
			if($DataROW00["EstadoActual"]==1){
				$TDClass = "EstadoMesa DataMesaPedido";
			}
			if($DataROW00["EstadoActual"]==2){
				$TDClass = "EstadoMesa DataMesaC";
			}
			if($DataROW00["EstadoActual"]==3){
				$TDClass = "EstadoMesa DataMesaRet";
			}
			if($DataROW00["EstadoActual"]==4){
				$TDClass = "EstadoMesa MesaDespachando";
			}
			echo "<td class='$TDClass' data='$DataROW00[MesaNumero]'><img src='img/table.png' width='50%' /> <br> <b>Mesa: $DataROW00[MesaNumero]</b></td>";
			if($itr==0){
				echo "</tr><tr>";
			}
		}
		?>
	</tr>
</table>
<script src="js/funcion0201.js"></script>
