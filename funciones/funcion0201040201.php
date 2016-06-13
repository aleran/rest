<script type="text/javascript">
var Vsuma=0;
var VsumaPers=0;
</script>
<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();

$DataOrdenSQL01 = "select * from vista09 where Orden='$_POST[DataOrden]' ";
$DataOrdenSQL01 = mysql_query($DataOrdenSQL01);

$DataOrdenSQL02 = "select * from data14 where Orden='$_POST[DataOrden]' ";
$DataOrdenSQL02 = mysql_query($DataOrdenSQL02);
?>
<div>
<?php
	echo " &nbsp;&nbsp;&nbsp;<b style='font-size:170%'>Mesa: $_POST[Data]</b> <button id='EnvioOrden'>Guardar</button>";
?>
<button id="PlatoPersonalizado">Plato Personalizado</button>
</div>
<div id="OrMenuPrincipal"></div>
<div id="OrdenarDiv"><b>Pedidos</b> <span id="cambios-deorden"></span><br>
<table class="table-change" style="font-size:90%">
<?php
	while($DataOrdenROW01 = mysql_fetch_array($DataOrdenSQL01)){
		$delete = "<span onclick='deletechange(\".OrdenPd$DataOrdenROW01[Idoden]\",\"$DataOrdenROW01[Idoden]\",\"$DataOrdenROW01[Nombre]\",\"$_POST[DataOrden]\")' class='this-close type-orden'>X</span>";
		echo "<tr class='OrdenPd$DataOrdenROW01[Idoden]'><td>[$DataOrdenROW01[Cantidad]] ".$DataOrdenROW01["Nombre"]." $delete</td></tr>";
	}
	while($DataOrdenROW02 = mysql_fetch_array($DataOrdenSQL02)){
		$IdPer = $DataOrdenROW02["IdPerCan"];
		if($IdPer!=""){
				$ondelete01 = "<span onclick='deletechange01(\".personalizada-$DataOrdenROW02[Id]\",\"$DataOrdenROW02[Id]\",\"$IdPer\",\"$_POST[DataOrden]\")' class='this-close type-orden'>X</span>";
				echo "<tr class='personalizada-$DataOrdenROW02[Id]'><td><b>Plato Personalizado $ondelete01</b>";
				$DataSQL03 = "select * from vista10 where IdPersolizado='$IdPer' ";
				$DataSQL03 = mysql_query($DataSQL03) or die (mysql_error());
				echo "<ul class='none-padding'>";
				while($DataROW03 = mysql_fetch_array($DataSQL03)){
					$ondelete02 = "<span onclick='deletechange02(\".perso-$DataROW03[IdPer]\",\"$DataROW03[IdPer]\",\"$DataROW03[Nombre]\",\"$_POST[DataOrden]\")' class='this-close type-orden'>X</span>";
					echo "<li class='perso-$DataROW03[IdPer]'>".$DataROW03["Nombre"]."$ondelete02</li>";
				}
				echo "</ul></td></tr>";
			}
		// 
	}
?>
</table>
<form id="FormOrden">
<input type="hidden" name="DataId" id="DataId" value=" <?php echo $_POST['Data']; ?>" />
<input type="hidden" name="NumeroPedidos" id="NumeroPedidos" value="0" />
<input type="hidden" name="NumeroPedidosPers" id="NumeroPedidosPers" value="0" />
<input type="hidden" name="Personalizados" id="Personalizados" value="0" />
<input type="hidden" name="OrdenPedidoNumero" id="OrdenPedidoNumero" value="<?php echo $_POST['DataOrden']; ?>" />
</form>
<br id="FinForm">
</div>
<script src="js/funcion0201040201.js"></script>
<style>
.none-padding{
	margin: 0;
}
.none-padding li{
	padding: 2px;
}
.none-padding li:hover{
	background-color: white;
	padding: 1px;
	border: 1px solid #004276;
	border-radius: 5px;
}
.table-change{
	width: 100%;
}
.table-change td{
	background: linear-gradient(white,#dbdbdb);
	border: 1px solid silver;
	border-radius: 5px;
	padding: 5px;
	font-weight: bold;
	color: #004276;
	cursor: default;
}
.table-change td:hover{
	background: linear-gradient(#dbdbdb,white);
	border-color: #0279C0;
}
#OrdenarDiv{
max-height:300px;
overflow:auto;
}
@media screen and (max-height:600px){
#OrdenarDiv{
max-height:150px;
}
}
#OrMenuPrincipal,#OrdenarDiv{
width:49.5%;
float:left;
}
.MenuBack{
border:2px solid #dbdbdb;
border-radius:50px;
cursor:pointer;
}
.MenuBack:hover{
border:2px solid #0279C0;
background:linear-gradient(white,silver);
}
.MostrarSub{
width:50%;
margin-left:25px;
padding-left: 1em;
text-indent: 0em;
padding-top:1px;
padding-bottom:1px;
}
.MostrarSub li:before{
content: "\00BB \0020";
}
.MostrarSub li{
list-style: none;
border:1px solid silver;
border-radius:5px;
background:linear-gradient(white,#f0f0f0);
padding:4px;
color:#004276;
font-weight:bold;
cursor:pointer;
margin: 5px 5px 5px -15px;
}
.MostrarSub li:hover{
background:linear-gradient(#f0f0f0,white);
color:black;
}
.PrincipalOrden{
	border: 1px solid silver;
	border-radius: 5px;
	background: linear-gradient(white,gainsboro);
	margin: 5px;
	padding: 5px;
}
.head-pedido{
	width: 100%;
	font-weight: bold;
	padding: 6px;
	cursor: pointer;
}
.head-pedido:hover{
	color: grey;
}
.this-close{
	float: right;
	border: 2px solid silver;
	border-radius: 5px;
	color: white;
	background-color: red;
	padding-left: 4px;
	padding-right: 4px;
	cursor: pointer;
	font-weight: bold;
	font-size: 70%;
}
.type-orden{
	top: 0;
	right: 0;
}
.hospan{
	padding: 3px;
	width: 100%;
	cursor: default;
	color: #004276;
	font-weight: bold;
}
.hospan:hover{
	padding: 2px;
	border: 1px solid silver;
	border-radius: 5px;
	background:linear-gradient(white,#f0f0f0);
}
</style>
