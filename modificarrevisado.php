<?php
	require 'conexion.php';
	
	$codigo = $_GET['codigo'];
	
	$sql = "SELECT * FROM revisiones WHERE codigo = '$codigo'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
?>
<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/navbar.css">
	<link rel="icon" href="img/logo.png">
	<link rel="stylesheet" href="css/master.css">

	
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">MODIFICAR REVISADO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="updaterevisado.php" autocomplete="off">
				<img src="img/logo.png" class="avatar" alt="Avatar Image">
			
				<div class="form-group">
					<label for="mes" class="col-sm-2 control-label">Mes</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="mes" name="mes" placeholder="Mes" value="<?php echo $row['mes']; ?>" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="semana" class="col-sm-2 control-label">Semana</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="semana" name="semana" placeholder="Semana" value="<?php echo $row['semana']; ?>" required>
					</div>
				</div>
				
				<input type="hidden" id="codigo" name="codigo" value="<?php echo $row['codigo']; ?>" />
				
				<div class="form-group">
					<label for="fecha_revision" class="col-sm-2 control-label">Fecha</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="fecha_revision" name="fecha_revision" placeholder="fecha de revision" value="<?php echo $row['fecha_revision']; ?>"  required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="planta" class="col-sm-2 control-label">Planta</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="planta" name="planta" placeholder="planta" value="<?php echo $row['planta']; ?>" >
					</div>
				</div>
				
				<div class="form-group">
					<label for="supervisor" class="col-sm-2 control-label">Supervisor</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="supervisor" name="supervisor" placeholder="supervisor" value="<?php echo $row['supervisor']; ?>" >
					</div>
				</div>
				<div class="form-group">
					<label for="cantidad_doc" class="col-sm-2 control-label">Documentos</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="cantidad_doc" name="cantidad_doc" placeholder="cantidad_doc" value="<?php echo $row['cantidad_doc']; ?>" >
					</div>
				</div>
				
				<div class="form-group">
					<label for="t_planta" class="col-sm-2 control-label">Planta</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="t_planta" name="t_planta" placeholder="t_planta" value="<?php echo $row['t_planta']; ?>" >
					</div>
				</div>
				<div class="form-group">
					<label for="t_tienda" class="col-sm-2 control-label">Tienda</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="t_tienda" name="t_tienda" placeholder="t_tienda" value="<?php echo $row['t_tienda']; ?>" >
					</div>
				</div>
				<div class="form-group">
					<label for="t_tnuevas" class="col-sm-2 control-label">Tnuevas</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="t_tnuevas" name="t_tnuevas" placeholder="t_tnuevas" value="<?php echo $row['t_tnuevas']; ?>" >
					</div>
				</div>
				<div class="form-group">
					<label for="t_tiendas14" class="col-sm-2 control-label">Tiendas 14</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="t_tiendas14" name="t_tiendas14" placeholder="t_tiendas14" value="<?php echo $row['t_tiendas14']; ?>" >
					</div>
				</div>
				<div class="form-group">
					<label for="t_tiendas15" class="col-sm-2 control-label">Tiendas 15</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="t_tiendas15" name="t_tiendas15" placeholder="t_tiendas15" value="<?php echo $row['t_tiendas15']; ?>" >
					</div>
				</div>
				<div class="form-group">
					<label for="t_tiendas16" class="col-sm-2 control-label">Tiendas 16</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="t_tiendas16" name="t_tiendas16" placeholder="t_tiendas16" value="<?php echo $row['t_tiendas16']; ?>" >
					</div>
				</div>
				<div class="form-group">
					<label for="t_granel" class="col-sm-2 control-label">Granel</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="t_granel" name="t_granel" placeholder="t_granel" value="<?php echo $row['t_granel']; ?>" >
					</div>
				</div>
				<div class="form-group">
					<label for="t_vip" class="col-sm-2 control-label">Vip</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="t_vip" name="t_vip" placeholder="t_vip" value="<?php echo $row['t_vip']; ?>" >
					</div>
				</div>
				<div class="form-group">
					<label for="t_gasera" class="col-sm-2 control-label">Gasera</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="t_gasera" name="t_gasera" placeholder="t_gasera" value="<?php echo $row['t_gasera']; ?>" >
					</div>
				</div>
				
				<div class="form-group">
					<label for="total" class="col-sm-2 control-label">Total</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="total" name="total" placeholder="total" value="<?php echo $row['total']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<!--<a href="revisados.php" class="btn btn-default">Regresar</a>-->
						<a href="revisados.php" type="cancelar" class="btn btn-default">Regresar</a>
						<!--<button type="submit" class="btn btn-primary">Guardar</button>-->
						<input type="submit" class="btn btn-primary" value="Guardar">
					</div>
				</div>
			</form>
		</div>
	</body>
</html>