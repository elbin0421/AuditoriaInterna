<?php
// Necesitamos usar sesiones, por lo que siempre debe iniciar sesiones usando el siguiente código.
session_start();
// Si el usuario no ha iniciado sesión, redirigir a la página de inicio de sesión...
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.html');
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Página de Inicio</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body class="loggedin">
    <nav class="navtop">
        <div>
            <h1>Sistema de Login Básico ConfiguroWeb</h1>
            <a href="perfil.php"><i class="fas fa-user-circle"></i>Información de Usuario</a>
            <a href="cerrar-sesion.php"><i class="fas fa-sign-out-alt"></i>Cerrar Sesión</a>
        </div>
    </nav>
    <div class="content">
        <h2>Página de Inicio</h2>
        <p>Hola de nuevo, <?= $_SESSION['name'] ?> !!!</p>
    </div>
</body>

</html>