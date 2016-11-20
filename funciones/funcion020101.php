<script type="text/javascript">
var Vsuma=0;
var VsumaPers=0;
</script>
<?php
include("../config/config00.php");
include("../config/config02.php");
funcion00();
?>
<div><img src="img/back.png" class="MenuBack" width="3%" />
<?php
	echo " &nbsp;&nbsp;&nbsp;<b style='font-size:170%'>Mesa: $_POST[Data]</b> <button id='EnvioOrden'>Ordenar</button>";
?>

</div>
<div id="OrMenuPrincipal"></div>
<div id="OrdenarDiv"><b>Pedidos</b><br>
<form id="FormOrden">
<input type="hidden" name="DataId" id="DataId" value=" <?php echo $_POST['Data']; ?>" />
<input type="hidden" name="NumeroPedidos" id="NumeroPedidos" value="0" />
<input type="hidden" name="NumeroPedidosPers" id="NumeroPedidosPers" value="0" />
<input type="hidden" name="Personalizados" id="Personalizados" value="0" />
</form>
<br id="FinForm">
</div>
<script src="js/funcion020101.js"></script>
<style>
#OrdenarDiv{
max-height:340px;
overflow:auto;
}
@media screen and (max-height:400px){
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
border:2px solid #FF8015;
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
color:#FF841B;
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
	color: #FF841B;
	font-weight: bold;
}
.hospan:hover{
	padding: 2px;
	border: 1px solid silver;
	border-radius: 5px;
	background:linear-gradient(white,#f0f0f0);
}
</style>
