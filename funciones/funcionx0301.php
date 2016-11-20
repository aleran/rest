<div class="inl">
<div id="content-log"></div>
<br>
<style type="text/css">
.Registro{
width:80%;
margin-left:25px;
padding-left: 1em;
text-indent: 0em;
padding-top:1px;
padding-bottom:1px;
}
.Registro li:before{
content: "\00BB \0020";
}
.Registro li{
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
.Registro li:hover{
background:linear-gradient(#f0f0f0,white);
color:black;
}
.Registros{
	font-size: 75%;
	border: 1px solid silver;
	border-radius: 5px;
	cursor: default;
	margin:0 auto;
}
.Registros td{
	border: 1px solid silver;
	text-align: center;
	padding: 3px;
}
.Registros tr:hover{
background-color: silver;
}
.inl{
	max-height: 380px;
	overflow: auto;
}
</style>
</div>
<script type="text/javascript">

function reajax00(){
	$.ajax({
		url: "funciones/funcionx030102.php",
		beforeSend:function(){
			// $("#content-log").html("Cargando...");
		},
		error:function(){
			$("#content-log").html("Error...");
		},
		success:function(data){
			$("#content-log").html(data);
			$(".VerRegistro").click(function(){
				data = $(this).attr("data");
				$.ajax({
					type: "post",
					url: "funciones/funcionx030101.php",
					data: "data="+data,
					beforeSend:function(){
						$("#MostrarRegistro").html("Cargando...").fadeIn(30);
					},
					error:function(){
						$("#MostrarRegistro").html("Error...").delay(300).fadeOut(400);
					},
					success:function(data){
						$("#MostrarRegistro").html(data);
					}
				});
			});
		}
	});
}
reajax00();

setInterval(reajax00,8000);
</script>