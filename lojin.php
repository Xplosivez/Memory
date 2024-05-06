<?php
include("conexion.php");
//Enviar datos al formulario
if(isset($_POST["enter"])) {
//Leer los datos
    if(strlen($_POST["correo"]) >= 1 &&
       strlen($_POST["user"]) >= 1 &&
       strlen($_POST["passwor"]) >= 1 
    ) {
        //Colocando la informacion de los campos en una variable
        $correo = trim($_POST["correo"]);
        $user = trim($_POST["user"]);
        $password = trim($_POST["passwor"]);

        // Generar el hash de la contraseña
        $hash_password = password_hash($password, PASSWORD_DEFAULT);
    
        $consulta = "INSERT INTO prueba(correo, user, contra) VALUES ('$correo', '$user', '$hash_password')";

        $resul = mysqli_query($conex, $consulta);

        if($resul) {
?>
            <h3>¡Se ha registrado correctamente!</h3>
<?php
        } else {
?>
            <h3>Error al registrar</h3>
<?php
        }
    } else {
?>
        <h3>Llene todos los campos</h3>
<?php
    }

}
?>


