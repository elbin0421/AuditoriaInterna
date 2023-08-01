<html lang="es">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	 <title>Nuevo|Registro</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/navbar.css">
	<link rel="icon" href="img/logo.png">
	<link rel="stylesheet" href="css/master.css">
	<link rel="stylesheet" href="main.css">

	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
	
	<body>
		<div class="container">
			<div class="row" id="titulo">
				<h3 style="text-align:center">AGREGAR DOCUMENTO CON ERRORES</h3>
			</div>
			
		<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
			<img src="img/logo.png" class="avatar" alt="Avatar Image">
			
					<div class="form-group">
					<label for="planta" class="col-sm-2 control-label">Planta</label>
					<div class="col-sm-10">
						<select class="form-control" id="planta" name="planta" required>
						    <option value="elegir"></option>
							<option value="Villanueva">Calpules</option>
							<option value="Calpules">Ceiba</option>
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
					<label for="tienda" class="col-sm-2 control-label">Tienda</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="tienda" name="tienda" placeholder="Tienda" required>
					</div>
				</div>
			
				<div class="form-group">
					<label for="supervior" class="col-sm-2 control-label">Supervisor</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="supervisor" name="supervisor" placeholder="Nombre del Supervisor" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="fecha" class="col-sm-2 control-label">Fecha</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="fecha" name="fecha" placeholder="Fecha" required>
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
					<label for="descripcion" class="col-sm-2 control-label">Descripcion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion del Gasto">
					</div>
				</div>
				
				<div class="form-group">
					<label for="valor" class="col-sm-2 control-label">Valor</label>
					<div class="col-sm-10">
						<input type="int" step="0.01" class="form-control" id="valor" name="valor" placeholder="Ingrese el Valor de Factura">
					</div>
				</div>
				
					<div class="form-group">
					<label for="error" class="col-sm-2 control-label">Error</label>
					<div class="col-sm-10">
						<!--<input type="text" class="form-control" id="error" name="error" placeholder="Error">-->
						<textarea class="form-control" id="error" name="error" placeholder="Descripcion del Error" rows=2 cols=132></textarea>
					
					</div>
					
					
				</div>
				
				<div class="form-group">
					<label for="solucion" class="col-sm-2 control-label">Solucion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="solucion" name="solucion" placeholder="Solucion">
					</div>
				</div>
				
				<div class="form-group">
					<label for="deposito" class="col-sm-2 control-label">Deposito</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="deposito" name="deposito" placeholder="No. Deposito">
					</div>
				</div>
				

				

				
				<!--<div class="form-group">
					<label for="hijos" class="col-sm-2 control-label">¿Tiene Hijos?</label>
					
					<div class="col-sm-10">
						<label class="radio-inline">
							<input type="radio" id="hijos" name="hijos" value="1" checked> SI
						</label>
						
						<label class="radio-inline">
							<input type="radio" id="hijos" name="hijos" value="0"> NO
						</label>
					</div>
				</div>
				
				<div class="form-group">
					<label for="intereses" class="col-sm-2 control-label">INTERESES</label>
					
					<div class="col-sm-10">
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Libros"> Libros
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Musica"> Musica
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Deportes"> Deportes
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Otros"> Otros
						</label>
					</div>
				</div>-->
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="errores.php" type="cancelar" class="btn btn-default">Regresar</a>
						<!--<input type="regresar" class="btn btn-primary" value="Regresar">-->
						<input type="submit" class="btn btn-primary" value="Guardar">
						<!--<button type="submit" class="btn btn-primary">Guardar</button>-->
					</div>
				</div>
			</form>
		</div>
	</body>
</html>