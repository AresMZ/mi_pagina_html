<?php
session_start(); // Iniciar sesión

// Verificar si el usuario está autenticado
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php"); // Redirigir al inicio de sesión si no está autenticado
    exit;
}

// Datos bancarios ficticios (reemplaza con datos reales)
$numeroCuenta = "9876543210";
$saldo = "100,000.00€";

// Ejemplo de imágenes y documentos
$imagenPerfil = "profile.jpg"; // Ruta a la imagen de perfil del usuario
$documentoWord = "carta_del_banco.docx"; // Ruta al archivo Word
$documentoExcel = "finanzas.xlsx"; // Ruta al archivo Excel
$documentoPDF = "costos.pdf"; // Ruta al archivo PDF

// HTML para mostrar los datos bancarios y los documentos
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi perfil</title>
    <!-- Agrega tus estilos CSS aquí -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Bienvenido, <?php echo $_SESSION['email']; ?>!</h1>
	<div class="cerrar-sesion">
        <a href="logout.php">Cerrar sesión</a>
    </div>
    </header>
    <section class="datos-bancarios">
        <h2>Datos bancarios:</h2>
	<img src="<?php echo $imagenPerfil; ?>" alt="Imagen de perfil">
        <p>Número de cuenta: <?php echo $numeroCuenta; ?></p>
        <p>Saldo disponible: <?php echo $saldo; ?></p>
    </section>
    <section class="imagenes-documentos">
        <h2>Documentación bancaria:</h2>
        <a href="<?php echo $documentoWord; ?>" target="_blank">Carta del banco <img src="word.png" width="28"/> </a>
        <a href="<?php echo $documentoExcel; ?>" target="_blank">Reporte financiero <img src="excel.jpg" width="42"/></a>
        <a href="<?php echo $documentoPDF; ?>" target="_blank">Costes financieros <img src="pdf.jpg" width="30"/></a>
    </section>
</body>
</html>

