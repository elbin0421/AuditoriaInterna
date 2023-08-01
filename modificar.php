<?php
	require 'conexion.php';
	
	$codigo = $_GET['codigo'];
	
	$sql = "SELECT * FROM errores WHERE codigo = '$codigo'";
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
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
				<img src="img/logo.png" class="avatar" alt="Avatar Image">
				<div class="form-group">
					<label for="planta" class="col-sm-2 control-label">Planta</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="planta" name="planta" placeholder="Planta" value="<?php echo $row['planta']; ?>" required>
					</div>
				</div>
				<div class="form-group">
					<label for="tienda" class="col-sm-2 control-label">Tienda</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="tienda" name="tienda" placeholder="Tienda" value="<?php echo $row['tienda']; ?>" required>
					</div>
				</div>
				
				<input type="hidden" id="codigo" name="codigo" value="<?php echo $row['codigo']; ?>" />
				
				<div class="form-group">
					<label for="supervisor" class="col-sm-2 control-label">Supervisor</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="supervisor" name="supervisor" placeholder="supervisor" value="<?php echo $row['supervisor']; ?>"  required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="fecha" class="col-sm-2 control-label">Fecha</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="fecha" name="fecha" placeholder="fecha" value="<?php echo $row['fecha']; ?>" >
					</div>
				</div>
				
				<div class="form-group">
					<label for="semana" class="col-sm-2 control-label">Semana</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="semana" name="semana" placeholder="semana" value="<?php echo $row['semana']; ?>" >
					</div>
				</div>
				
				<div class="form-group">
					<label for="mes" class="col-sm-2 control-label">Mes</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="mes" name="mes" placeholder="mes" value="<?php echo $row['mes']; ?>" >
					</div>
				</div>
				
				<div class="form-group">
					<label for="descripcion" class="col-sm-2 control-label">Descripcion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="descripcion" value="<?php echo $row['descripcion']; ?>" >
					</div>
				</div>
				
				<div class="form-group">
					<label for="valor" class="col-sm-2 control-label">Valor</label>
					<div class="col-sm-10">
						<input type="int" class="form-control" id="valor" name="valor" placeholder="valor" value="<?php echo $row['valor']; ?>" >
					</div>
				</div>
				
				<div class="form-group">
					<label for="error" class="col-sm-2 control-label">Error</label>
					<div class="col-sm-10">
						<input type="text" step="0.01" class="form-control" id="error" name="error" placeholder="error" value="<?php echo $row['error']; ?>" >
					</div>
				</div>
				
				<div class="form-group">
					<label for="solucion" class="col-sm-2 control-label">Solucion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="solucion" name="solucion" placeholder="solucion" value="<?php echo $row['solucion']; ?>" >
					</div>
				</div>
				
				<div class="form-group">
					<label for="deposito" class="col-sm-2 control-label">Deposito</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="deposito" name="deposito" placeholder="deposito" value="<?php echo $row['deposito']; ?>" >
					</div>
				</div>
				
				<!--<div class="form-group">
					<label for="estado_civil" class="col-sm-2 control-label">Estado Civil</label>
					<div class="col-sm-10">
						<select class="form-control" id="estado_civil" name="estado_civil">
							<option value="SOLTERO" <?php if($row['estado_civil']=='SOLTERO') echo 'selected'; ?>>SOLTERO</option>
							<option value="CASADO" <?php if($row['estado_civil']=='CASADO') echo 'selected'; ?>>CASADO</option>
							<option value="OTRO" <?php if($row['estado_civil']=='OTRO') echo 'selected'; ?>>OTRO</option>
						</select>
					</div>
				</div>-->
				
				<!--<div class="form-group">
					<label for="hijos" class="col-sm-2 control-label">¿Tiene Hijos?</label>
					
					<div class="col-sm-10">
						<label class="radio-inline">
							<input type="radio" id="hijos" name="hijos" value="1" <?php if($row['hijos']=='1') echo 'checked'; ?>> SI
						</label>
						
						<label class="radio-inline">
							<input type="radio" id="hijos" name="hijos" value="0" <?php if($row['hijos']=='0') echo 'checked'; ?>> NO
						</label>
					</div>
				</div>-->
				
				<!--<div class="form-group">
					<label for="intereses" class="col-sm-2 control-label">INTERESES</label>
					
					<div class="col-sm-10">
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Libros" <?php if(strpos($row['intereses'], "Libros")!== false) echo 'checked'; ?>> Libros
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Musica" <?php if(strpos($row['intereses'], "Musica")!== false) echo 'checked'; ?>> Musica
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Deportes" <?php if(strpos($row['intereses'], "Deportes")!== false) echo 'checked'; ?>> Deportes
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Otros" <?php if(strpos($row['intereses'], "Otros")!== false) echo 'checked'; ?>> Otros
						</label>
					</div>
				</div>-->
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="errores.php" type="cancelar" class="btn btn-default">Regresar</a>
						<!--<a href="errores.php" class="btn btn-default">Regresar</a>-->
						<!--<button type="submit" class="btn btn-primary">Guardar</button>-->
						<input type="submit" class="btn btn-primary" value="Guardar">
					</div>
				</div>
			</form>
		</div>
	</body>
</html>