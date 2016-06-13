<?php
function CheckCadena($palabra){
	$numero_error=0;
	if(strlen($palabra)==0){
		echo "<div id='error_vac' style='text-align:center'><span style='color:red'>¡No dejes campos en blanco!</span></div>";
		echo "<script>
		dialogos('#error_vac');
		</script>";
		return $numero_error=1;
	}
	if(strlen($palabra)!=0){
		$ipalabra=strlen($palabra);
		$nopermitidos = "¿?&\\$%'`´[]{}*";
		$inopermitidos = strlen($nopermitidos);
		$i=0;
		$y=0;
		$error_palabra=0;
		while($error_palabra==0 and $i<$ipalabra){
			while($error_palabra==0 and $y<$inopermitidos){
				$caracterc=utf8_encode(substr($palabra,$i,1));
				$caracternopermitido=utf8_encode(substr($nopermitidos,$y,1));
				if($caracterc==$caracternopermitido){
					$error_palabra=1;
				}
				if($caracterc!=$caracternopermitido){
					$error_palabra=0;
				}
				$y++;
			}
			$y=0;
			$i++;
		}
		if($error_palabra!=0){
			echo "<div id='ErrorCadenaTexto' style='text-align:center'>No uses caracteres especiales<br> <span style='color:red'>¿ ? & \\ $ % ' ` ´ [ ] { } * </span></div>";
			echo "<script>
			dialogos('#ErrorCadenaTexto');
			</script>";
			return $numero_error=1;
		}
		if($error_palabra==0){
			return $numero_error=0;
		}
	}
}
?>
