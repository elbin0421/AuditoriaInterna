<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<?php
	require 'conexion.php';
	
	$where = "";
	
	if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE codigo LIKE '%$valor'";
		}
	}
	$sql = "SELECT * FROM errores $where";
	$resultado = $mysqli->query($sql);
	
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />  
    <title>Auditoria|Interna</title>
	
	<link rel="icon" href="img/logo.png">
      
    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">-->
    
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="css/main.css">
      
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
           
    <!--font awesome con CDN-->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
     
	<!--==============-->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="index/css/navbar.css">
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	

	
	
  </head>
    
  <body> 
     <header>
        <!-- ===========================
        HERO AREA
        =========================== -->
        <div id="hero">
            <!--<div class="container herocontent">
                <h2 class="wow fadeInUp" data-wow-duration="2s">GoArbit</h2>-->
                 <!--<div class="logo">
                 <img src="img/logo.png" alt="">-->
                <!--</div>
                <h3 class="wow fadeInDown" data-wow-duration="3s"><strong>Bienvenido al sistema de auditoria</strong></h3>
                <h4 class="wow fadeInDown" data-wow-duration="3s"><strong>Revisiones y errores encontrados</strong></h4>
            </div>-->
        <!-- ===========================
         NAVBAR START
         =========================== -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
			
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									   <span class="sr-only">Toggle navigation</span>
									   <span class="icon-bar"></span>
									   <span class="icon-bar"></span>
									   <span class="icon-bar"></span>
									</button>

								<a class="navbar-brand" href="#hero">
									<span class="brandicon icon-grid"></span>
									<!--<img src="index/carousel0/logo.png" alt="">-->
									<span class="brandname">Auditoria</span>
								</a>
							</div>

                <div class="collapse navbar-collapse">
								<ul class="nav navbar-nav navbar-right">
									<!--YOUR NAVIGATION ITEMS STRAT BELOW-->
									<li><a href="welcome.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
									<li><a href="errores.php"><span class="glyphicon glyphicon-question-sign"></span> Errores</a></li>
									<li><a href="revisados.php"><span class="glyphicon glyphicon-ok-sign"></span> Revisados</a></li>
									<li><a href="#portfolio"><span class="glyphicon glyphicon-ok-sign"></span></a></li>
									<li><a href="#testimonials"><span class="glyphicon glyphicon-plus"></span></a></li>
									<li><a href="#"><span class="glyphicon glyphicon-hand-right "></span></a></li>
									
								  <li class="dropdown">
								  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-hand-right"></span> Otros <span class="caret"></span></a>
								  <ul class="dropdown-menu">

									<li><a href="perfil.php">Perfil<span class="icon-dot-single"></span></a></li>
									<li><a href="reset-password.php">Cambia tu contraseña<span class="icon-dot-single"></span></a></li>
									<li><a href="logout.php">Cierra la sesión<span class="icon-dot-single"></span></a></li>
									<!--<li><a href="#">Something else here</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">Separated link</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">One more separated link</a></li>-->
								  </ul>
								  </li>
							
							</div>
                <!--.nav-collapse -->
            </div>
        </nav>
        <!--navbar end-->
         <!--<h1 class="text-center text-light">Documentos de</h1>
         <h2 class="text-center text-light">Gastos <span class="badge badge-warning">Revisados</span></h2>-->	 
     </header>    
    <div style="height:30px"></div>
    	<div id="titulo" class="titulo">
     	 <h1 class="text-center text-light">Documentos Con Errores</span></h1>
        <!--<h2 class="text-center text-light">Con <span class="badge badge-warning">Errores</span></h2>-->
        </div>
    <!--Ejemplo tabla con DataTables-->
    <div class="container">
				<div class="row">
						<table class="table-boton">
							<tr>
								<td><a href="nuevo.php" class="btn btn-primary">Nuevo <span class="glyphicon glyphicon-plus"></span></a>
								</td>
							</tr>	
						</table>
				
			   </div>
			   
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Codigo</th>
							<th>Planta</th>
							<th>Tienda</th>
							<th>Supervisor</th>
							<th>Fecha</th>
							<th>Semana</th>
							<th>Mes</th>
							<!--<th>Descipcion</th>-->
							<th>Valor</th>
							<th>Error</th>
							<th>Solucion</th>
							<th>Deposito</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					
					<tbody>
					<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
							<tr>
								<td><?php echo $row['codigo']; ?>
								<td><?php echo $row['planta']; ?></td>
								<td><?php echo $row['tienda']; ?></td>
								<td><?php echo $row['supervisor']; ?></td>
								<td><?php echo $row['fecha']; ?></td>
								<td><?php echo $row['semana']; ?></td>
								<td><?php echo $row['mes']; ?></td>
								<!--<td><?php echo $row['descripcion']; ?></td>-->
								<td><?php echo $row['valor']; ?></td>
								<td><?php echo $row['error']; ?></td>
								<td><?php echo $row['solucion']; ?></td>
								<td><?php echo $row['deposito']; ?></td>
								<td><a href="modificar.php?codigo=<?php echo $row['codigo']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
								<td><a href="#" data-href="eliminar.php?codigo=<?php echo $row['codigo']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>
							</tr>
						<?php } ?>
					</tbody>      
                       </table>                  
                    </div>
                </div>
        </div>  
    </div> 
	</div> 
			<!-- Modal -->
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					</div>
					
					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						<a class="btn btn-danger btn-ok">Eliminar</a>
					</div>
				</div>
			</div>
		</div>
		
		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>
	<div id="footer">
  		<!--<img src="index/carousel0/swirl2.png" width="1188" id="img2">-->
  	</div>
	
     
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     
    <!-- para usar botones en datatables JS -->  
    <script src="datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>  
    <script src="datatables/JSZip-2.5.0/jszip.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/pdfmake.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
     
    <!-- código JS propìo-->    
    <script type="text/javascript" src="js/main.js"></script>  
    
    
  </body>
</html>