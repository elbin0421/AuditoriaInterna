<?php
	
	require 'conexion.php';
	
	$planta = $_POST['planta'];
	$tienda = $_POST['tienda'];
	$supervisor = $_POST['supervisor'];
	$fecha = $_POST['fecha'];
	$semana = $_POST['semana'];
	$mes = $_POST['mes'];
	$descripcion = $_POST['descripcion'];
	$valor = $_POST['valor'];
	$error = $_POST['error'];
	$solucion = $_POST['solucion'];
	$deposito = $_POST['deposito'];
	
	
	
	/*$hijos = isset($_POST['hijo']) ? $_POST['hijos'] : 0;
	$intereses = isset($_POST['intereses']) ? $_POST['intereses'] : null;
	
	$arrayIntereses = null;
	
	$num_array = count($intereses);
	$contador = 0;
	
	if($num_array>0){
		foreach ($intereses as $key => $value) {
			if ($contador != $num_array-1)
			$arrayIntereses .= $value.' ';
			else
			$arrayIntereses .= $value;
			$contador++;
		}
	}*/
	
	$sql = "INSERT INTO errores (planta, tienda, supervisor, fecha, semana, mes, descripcion,valor,error,solucion,deposito) VALUES ('$planta', '$tienda', '$supervisor', '$fecha', '$semana', '$mes', '$descripcion', '$valor', '$error', '$solucion', '$deposito')";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/navbar.css">
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="errores.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>
