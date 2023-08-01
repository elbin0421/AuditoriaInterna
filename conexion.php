<?php
	$username="root";
	$password="";
	$servername="localhost";
	$database="gastos";
	
	$mysqli = new mysqli($servername, $username, $password, $database);
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
	//verificamos la conexion a base datos
/*if(!$mysqli) 
        {
            echo "Server❌" . mysql_error();
        }
  else
        {
            echo "<b><h3>Server✔</h3></b>" ;
        }
        //indicamos el nombre de la base datos
        $datab = "gastos";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($mysqli,$datab);

        if (!$db)
        {
        echo "Data Base❌";
        }
        else
        {
        echo "<h3>Data Base✔</h3>" ;
        }*/
?>