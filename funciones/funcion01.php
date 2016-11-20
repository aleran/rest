<style>
.menu-del-dia{
	list-style: none;
margin-left:25px;
padding-left: 1em;
text-indent: 0em;
padding-top:1px;
padding-bottom:1px;
}
.menu-del-dia li:before{
content: "\00BB \0020";
}
.menu-del-dia li{
	border:1px solid silver;
	border-radius:5px;
	background:linear-gradient(white,#f0f0f0);
	padding:4px;
	color:#FF841B;
	font-weight:bold;
	cursor:pointer;
	margin: 5px 5px 5px -15px;
}
.menu-del-dia li:hover{
	background:linear-gradient(#f0f0f0,white);
	color:black;
}
.ocultar{display:none;}
</style>
<div id="OrdenarCheck"></div>
<div id="ShowOrdenActive"></div>
<script src="js/funcion01.js"></script>