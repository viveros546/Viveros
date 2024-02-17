<?php
include("con_db.php");

if (isset($_POST['register'])) {
    $usuario = trim($_POST['usuarioInicio']);
    $contrasena = trim($_POST['contrasenaInicio']);

    if (strlen($usuario) > 0 && strlen($contrasena) > 0) {
        // Hash de la contraseña (utiliza la función de hash adecuada, como password_hash)
        $hashed_password = password_hash($contrasena, PASSWORD_DEFAULT);

        $consulta = "INSERT INTO usuarios(usuario, contrasena) VALUES ('$usuario', '$hashed_password')";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {
            echo "<h3 class='ok'>¡Te has registrado correctamente!</h3>";
        } else {
            echo "<h3 class='bad'>¡Ups, ha ocurrido un error al registrar!</h3>";
            echo "Error: " . mysqli_error($conex); // Muestra detalles del error
        }
    } else {
        echo "<h3 class='bad'>¡Por favor, completa todos los campos!</h3>";
    }
}
?>
