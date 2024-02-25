<?php
session_start(); // Iniciar sesión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once("conexion.php"); // Incluir el archivo de conexión

    // Recoger los datos del formulario
    $email = $_POST["email"];
    $contrasena = $_POST["password"];

    // Consulta SQL para verificar las credenciales del usuario
    $sql = "SELECT * FROM datos WHERE email = '$email' AND contrasena = '$contrasena'";
    $result = mysqli_query($conex, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        // Inicio de sesión exitoso
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        echo "Inicio de sesión exitoso. Bienvenido, $email!";
        // Redireccionar a otra página después de iniciar sesión
        header("Location: profile.php");
    } else {
        // Credenciales incorrectas
        echo "Correo electrónico o contraseña incorrectos.";
    }
}
?>
