<?php
// Necesitamos usar sesiones, por lo que siempre debe iniciar sesiones usando el siguiente código.
session_start();
// Si el usuario no ha iniciado sesión, redirigir a la página de inicio de sesión...
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'gastos';
$conexion = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// No tenemos la contraseña o la información de correo electrónico almacenada en las sesiones, por lo que podemos obtener los resultados de la base de datos.
$stmt = $conexion->prepare('SELECT password, email FROM users WHERE id = ?');
// En este caso, podemos usar el ID de la cuenta para obtener la información de la cuenta.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Perfil | Usuario</title>

	<link rel="icon" href="img/logo.png">
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <link rel="stylesheet" href="css/master.css">
</head>

<body class="loggedin">
    <nav class="navtop">
        <div>
            <h1>Sistema de Auditoria</h1>
            <a href="welcome.php">Inicio</a>
            <a href="perfil.php"><i class="fas fa-user-circle"></i>Información de Usuario</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Cerrar Sesión</a>
        </div>
    </nav>
    <div class="content">
        <img src="img/logo.png" class="avatar" alt="Avatar Image">
        <h2>Información de Usuario</h2>
        
        <div calss="perfil">
            <!--<h2><p>La siguiente es la información registrada de tu cuenta:</p></h2>-->
            <table class="tperfil">
                <caption>La siguiente es la información registrada de tu cuenta:</caption>
                <tr>
                    <td>Usuario:</td>
                    <td><?= $_SESSION['username'] ?></td>
                </tr>
                <tr>
                    <td>Contraseña:</td>
                    <td><?= $password ?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?= $email ?></td>
                </tr>

                    
                    <tr>
                        <br>
                        <br>    
                      <td>Nota:</td>
                      <td>Por motivos de seguridad su contraseña esta cifrada.</td>
                    </tr>
                  

            </table>

        </div>
       <div><h3></h3></div>
    </div>
</body>

</html>