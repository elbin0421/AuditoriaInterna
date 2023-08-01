<?php



session_start();

// Credenciales de acceso a base de datos.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'gastos';
// Conexión base de datos.
$conexion = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    // Si hay un error con la conexión, muestra el mensaje de error
    exit('Fallo en conexión de MySQL: ' . mysqli_connect_error());
}
// Ahora verificamos si se enviaron los datos del formulario de inicio de sesión, con la función isset () se verificará si existen los datos.
if (!isset($_POST['username'], $_POST['password'])) {
    // Si no se pueden obtener los datos muestra mensaje de error.
    header('Location: index.html');
}
// una configuración para evitar inyección SQL
if ($stmt = $conexion->prepare('SELECT id, password FROM users WHERE username = ?')) {
    // Parámetros de enlace (s = cadena, i = int, b = blob, etc.), en nuestro caso, el nombre de usuario es una cadena, por lo que usamos "s"
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    // Almacene el resultado para que podamos verificar si la cuenta existe en la base de datos.
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        // La cuenta existe, ahora verificamos la contraseña.
        // Nota: recuerde usar password_hash en su archivo de registro para almacenar las contraseñas cifradas.
        if ($_POST['password'] === $password) {
            // ¡Verificación exitosa! ¡El usuario ha iniciado sesión!
            // Crear sesiones, para que sepamos que el usuario ha iniciado sesión, básicamente actúan como cookies pero recuerdan los datos en el servidor.
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            header('Location: inicio.php');
        } else {
            // Contraseña Incorrecta
            header('Location: index.html');
        }
    } else {
        // Usuario Incorrecto
        header('Location: index.html');
    }


    $stmt->close();
}
