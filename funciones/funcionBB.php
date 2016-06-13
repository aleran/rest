<?php
include("../config/config00.php");
$Data00 = $_POST["BusUsuEdit"];
if(strlen($Data00)!=0){
$DataSQL00 = "select * from data02 where Cedula like '$Data00%' and id!='1'";
$DataSQL00 = mysql_query($DataSQL00);
$i=0;
echo "<ul id='useridmos'>";
while($DataROW00 = mysql_fetch_array($DataSQL00)){
	echo "<li class='mod-user UserId' id='$DataROW00[CodigoTbr]'>$DataROW00[Type]$DataROW00[Cedula] - $DataROW00[PrimerNombre] $DataROW00[PrimerApellido] </li>";
	$i++;
}
if($i==0){
	$DataSQL01 = "select * from data02 where CodigoTbr like '$Data00%' and id!='1'";
	$DataSQL01 = mysql_query($DataSQL01);
	while($DataROW01 = mysql_fetch_array($DataSQL01)){
		echo "<li class='mod-user UserId' id='$DataROW01[CodigoTbr]'>($DataROW01[CodigoTbr]) $DataROW01[Type]$DataROW01[Cedula] - $DataROW01[PrimerNombre] $DataROW01[PrimerApellido] </li>";
		$i++;
	}
}
if($i==0){
	$DataSQL02 = "select * from data02 where concat(PrimerNombre,' ',PrimerApellido) like '$Data00%' and id!='1'";
	$DataSQL02 = mysql_query($DataSQL02);
	while($DataROW02 = mysql_fetch_array($DataSQL02)){
		echo "<li class='mod-user UserId' id='$DataROW02[CodigoTbr]'>$DataROW02[Type]$DataROW02[Cedula] - $DataROW02[PrimerNombre] $DataROW02[PrimerApellido] </li>";
		$i++;
	}
}
if($i==0){
	$DataSQL03 = "select * from data02 where concat(PrimerApellido,' ',PrimerNombre) like '$Data00%' and id!='1'";
	$DataSQL03 = mysql_query($DataSQL03);
	while($DataROW03 = mysql_fetch_array($DataSQL03)){
		echo "<li class='mod-user UserId' id='$DataROW03[CodigoTbr]'>$DataROW03[Type]$DataROW03[Cedula] - $DataROW03[PrimerNombre] $DataROW03[PrimerApellido] </li>";
		$i++;
	}
}
echo "</ul>";
if($i==0){
	echo "<center><span class='adver'>¡No hay resultados!</span></center>";
}
}
else echo "<center><span class='adver'>¡No hay resultados!</span></center>";
?>
<style>
.adver{
color:red;
font-weight:bold;
}
.UserId{
	border:1px solid white !important;
	padding:3px !important;
	cursor:pointer;
	width: 95% !important;
	background:none !important;
}
.UserId:hover{
	border:1px solid silver !important;
	border-radius:5px!important;
	background: linear-gradient(white,silver) !important;
}
.mod-user, .UserId:active{
	background: linear-gradient(silver,white);
}
.mod-user, .UserId:before{
content: "\00BB \0020";
}
#useridmos{
list-style: none;
margin-left:25px;
padding-left: 1em;
text-indent: 0em;
padding-top:1px;
padding-bottom:1px;
}
</style>
<script>

</script>
<script type="text/javascript" src="js/subfuncionB102.js"></script>
