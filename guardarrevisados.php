<?php
	
	require 'conexion.php';
	
	$mes = $_POST['mes'];
	$semana = $_POST['semana'];
	$fecha_revision = $_POST['fecha_revision'];
	$planta = $_POST['planta'];
	$supervisor = $_POST['supervisor'];
	$cantidad_doc = $_POST['cantidad_doc'];
	$t_planta = $_POST['t_planta'];
	$t_tienda = $_POST['t_tienda'];
	$t_tnuevas = $_POST['t_tnuevas'];
	$t_tiendas14 = $_POST['t_tiendas14'];
	$t_tiendas15 = $_POST['t_tiendas15'];
	$t_tiendas16 = $_POST['t_tiendas16'];
	$t_granel = $_POST['t_granel'];
	$t_vip = $_POST['t_vip'];
	$t_gasera = $_POST['t_gasera'];
	$total = $_POST['total'];
	
	$sql = "INSERT INTO revisiones (mes, semana, fecha_revision, planta, supervisor, cantidad_doc, t_planta, t_tienda, t_tnuevas, t_tiendas14, t_tiendas15, t_tiendas16,t_granel, t_vip,t_gasera, total) VALUES ('$mes','$semana', '$fecha_revision', '$planta','$supervisor', '$cantidad_doc', '$t_planta', '$t_tienda', '$t_tnuevas', '$t_tiendas14', '$t_tiendas15', '$t_tiendas16', '$t_granel', '$t_vip', '$t_gasera', '$total')";
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
					
					<a href="revisados.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>
