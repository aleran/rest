<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<title>
		<?php
			$titleSQL = "SELECT * FROM data00 WHERE Estado='1'";
			$titleSQL = mysql_query($titleSQL) or die ("<h3>No se pudo cargar el Título:</h3><b style='color:red'>(".mysql_error().")</b>");
			$titleROW = mysql_fetch_array($titleSQL);
			$titulo = $titleROW['NombreSistema'];
			echo $titulo;
		?>
	</title>
	<link rel="shortcut icon" href="./img/icon.png" type="image/ico"/>
	<link rel="stylesheet" href="css/jquery-ui-tema.css"/>
	<link rel="stylesheet" href="css/tema.css"/>
	<link rel="stylesheet" href="css/index.css"/>
	<link rel="stylesheet" href="css/menu.css"/>
	<link rel="stylesheet" href="css/date.css"/>
	<link rel="stylesheet" href="css/guia.css"/>
	<link rel="stylesheet" href="css/checkbox.css"/>
	<link rel="stylesheet" href="css/octicons/octicons.css"/>
	<link rel="stylesheet" href="css/accordion.min.css"/>
	<script src="js/jquery-1.10.2.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/funciones.js"></script>
	<script src="js/accordion.min.js"></script>
</head>
