<html lang="es">
<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Nuevo|Registro</title>

		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/navbar.css">
		<link rel="icon" href="img/logo.png">
		<link rel="stylesheet" href="css/master.css">
		

	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
	
	<body>
		<div class="container">
			<div class="row" id="titulo">
				<h3 style="text-align:center">AGREGAR REVISADOS</h3>
			</div>
			
	<form class="form-horizontal" method="POST" action="guardarrevisados.php" autocomplete="off">
			<img src="img/logo.png" class="avatar" alt="Avatar Image">
			
				<div class="form-group">
					<label for="mes" class="col-sm-2 control-label">Mes</label>
					<div class="col-sm-10">
						<select class="form-control" id="mes" name="mes" required>
						    <option value="elegir"></option>
							<!--<option value="enero">Enero</option>
							<option value="febrero">Febrero</option>
							<option value="marzo">Marzo</option>
							<option value="abril">Abril</option>
							<option value="Mayo">Mayo</option>
							<option value="Junio">Junio</option>-->
							<option value="Julio">Julio</option>
							<option value="Agosto">Agosto</option>
							<option value="Septiembre">Septiembre</option>
							<option value="Octubre">Octubre</option>
							<option value="Noviembre">Noviembre</option>
							<option value="Diciembre">Diciembre</option>
						</select>
					</div>
					</div>
			
					<div class="form-group">
					<label for="semana" class="col-sm-2 control-label">Semana</label>
					<div class="col-sm-10">
						<select class="form-control" id="semana" name="semana" required>
						    <option value="elegir"></option>
							<option value="Primera Semana">Primera Semana</option>
							<option value="Segunda Semana">Segunda Semana</option>
							<option value="Tercera Semana">Tercera Semana</option>
							<option value="Cuarta Semana">Cuarta Semana</option>
						</select>
					</div>
					</div>
				
				<div class="form-group">
					<label for="fecha_revision" class="col-sm-2 control-label">Fecha</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="fecha_revision " name="fecha_revision" placeholder="Fecha" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="planta" class="col-sm-2 control-label">Planta</label>
					<div class="col-sm-10">
						<select class="form-control" id="planta" name="planta" required>
						    <option value="elegir"></option>
							<option value="Calpules">Calpules</option>
							<option value="Ceiba">Ceiba</option>
							<option value="EL Chile">EL Chile</option>
							<option value="Guanabano">Guanabano</option>
							<option value="Saba">Saba</option>
							<option value="San Matias">San Matias</option>
							<option value="Santa Elena">Santa Elena</option>
							<option value="Santa Rosa">Santa Rosa</option>
							<option value="Tulin">Tulin</option>
							<option value="Villanueva">Villanueva</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label for="supervisor" class="col-sm-2 control-label">Supervisor</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="supervisor" name="supervisor" placeholder="Supervisor">
					</div>
				</div>
					
				<div class="form-group">
					<label for="cantidad_doc" class="col-sm-2 control-label">Cantidad</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="cantidad_doc" name="cantidad_doc" placeholder="Cantidad de docuementos">
					</div>
				</div>
				<div class="form-group">
					<label for="t_planta" class="col-sm-2 control-label">Planta</label>
					<div class="col-sm-10">
						<input type="int" step="0.01" class="form-control" id="t_planta" name="t_planta" placeholder="Total Planta">
					</div>
				</div>
				<div class="form-group">
					<label for="t_tienda" class="col-sm-2 control-label">Tienda</label>
					<div class="col-sm-10">
						<input type="int" step="0.01" class="form-control" id="t_tienda" name="t_tienda" placeholder="Total Tienda">
					</div>
				</div>
				<div class="form-group">
					<label for="t_tnuevas" class="col-sm-2 control-label">TNuevas</label>
					<div class="col-sm-10">
						<input type="int" step="0.01" class="form-control" id="t_tnuevas" name="t_tnuevas" placeholder="Total TNuevas">
					</div>
				</div>
				<div class="form-group">
					<label for="t_tiendas14" class="col-sm-2 control-label">Tiendas14</label>
					<div class="col-sm-10">
						<input type="int" step="0.01" class="form-control" id="t_tiendas14" name="t_tiendas14" placeholder="Total Tiendas 2014">
					</div>
				</div>
				<div class="form-group">
					<label for="t_tiendas15" class="col-sm-2 control-label">Tiendas15</label>
					<div class="col-sm-10">
						<input type="int" step="0.01" class="form-control" id="t_tiendas15" name="t_tiendas15" placeholder="Total Tiebdas 2015">
					</div>
				</div>
				<div class="form-group">
					<label for="t_tiendas16" class="col-sm-2 control-label">Tiendas16</label>
					<div class="col-sm-10">
						<input type="int" step="0.01" class="form-control" id="t_tiendas16" name="t_tiendas16" placeholder="Total Tiendas 2016">
					</div>
				</div>
				
				<div class="form-group">
					<label for="t_granel" class="col-sm-2 control-label">Granel</label>
					<div class="col-sm-10">
						<input type="int" step="0.01" class="form-control" id="t_granel" name="t_granel" placeholder="Total Granel">
					</div>
				</div>
				<div class="form-group">
					<label for="t_vip" class="col-sm-2 control-label">VIP</label>
					<div class="col-sm-10">
						<input type="int" step="0.01" class="form-control" id="t_vip" name="t_vip" placeholder="Total VIP">
					</div>
				</div>
				<div class="form-group">
					<label for="t_gasera" class="col-sm-2 control-label">Gasera</label>
					<div class="col-sm-10">
						<input type="int" step="0.01" class="form-control" id="t_gasera" name="t_gasera" placeholder="Total Gasera">
					</div>
				</div>
				<div class="form-group">
					<label for="total" class="col-sm-2 control-label">Total</label>
					<div class="col-sm-10">
						<input type="int" step="0.01" class="form-control" id="total" name="total" placeholder="Total Semana">
					</div>
				</div>
								
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="revisados.php" type="cancelar" class="btn btn-default">Regresar</a>
						<!--<a href="revisados.php" class="btn btn-default">Regresar</a>-->
						<input type="submit" class="btn btn-primary" value="Guardar">
						<!--<button type="submit" class="btn btn-primary">Guardar</button>-->
					</div>
				</div>
			</form>
		</div>
	</body>
</html>