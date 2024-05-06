<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Verificar si se ha presionado el boton
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["enter"])) {
    // Obtener los datos del formulario
    $correo = $_POST["correo"];
    $password = $_POST["password"];

    // Conexión a la base de datos
    $host = 'localhost';
    $usuario = 'root';
    $contrasena = '';
    $basededatos = 'test2';

    $conex = new mysqli($host, $usuario, $contrasena, $basededatos);

    // Verificar la conexión
    if ($conex->connect_error) {
        die("Error de conexión: " . $conex->connect_error);
    }

    // Consulta SQL para verificar el usuario
    $consulta = "SELECT * FROM prueba WHERE correo = '$correo'";
    $resultado = $conex->query($consulta);

    if ($resultado->num_rows > 0) {
        // Usuario encontrado, verificar contraseña
        $fila = $resultado->fetch_assoc();
        $hash_password = $fila["contra"];

        if (password_verify($password, $hash_password)) {
            // Contraseña correcta, inicio de sesión exitoso
            session_start();
            $_SESSION["correo"] = $correo;
            header("Location:contenido.html");
            exit(); // Salir del script después de la redirección
        } else {
            // Contraseña incorrecta
            echo "<p>Contraseña incorrecta.</p>";
        }
    } else {
        // Usuario no encontrado
        echo "<p>Usuario no encontrado.</p>";
    }

    // Cerrar la conexión a la base de datos
    $conex->close();
}
?>
