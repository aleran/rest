<style>
.menu-del-dia-caja{
	list-style: none;
margin-left:25px;
padding-left: 1em;
text-indent: 0em;
padding-top:1px;
padding-bottom:1px;
}
.menu-del-dia-caja li:before{
content: "\00BB \0020";
}
.menu-del-dia-caja li{
	border:1px solid silver;
	border-radius:5px;
	background:linear-gradient(white,#f0f0f0);
	padding:4px;
	color:#FF841B;
	font-weight:bold;
	cursor:pointer;
	margin: 5px 5px 5px -15px;
}
.menu-del-dia-caja li:hover{
	background:linear-gradient(#f0f0f0,white);
	color:black;
}
.ocultar{display:none;}
</style>
<div id="OrdenarCheckCaja"></div>
<div id="ShowOrdenActiveCaja"></div>
<div id="show_print">
	<button class="btn-print" id="back-ordenlist" title="Regresar">
		<span class='octicon octicon-chevron-left'></span>
	</button>
	<button class="btn-print" title="Imprimir" id="imprimir-text">
		<span class='octicon octicon-file-text'></span>
	</button>
	<div id="content_print"></div>
</div>
<script src="js/funcionDes.js"></script>