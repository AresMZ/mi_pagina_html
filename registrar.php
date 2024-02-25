<?php

include("conexion.php");

if (isset($_POST['register'])) {
	if(
		strlen($_POST['name']) >= 1 &&
		strlen($_POST['email']) >= 1 &&
		strlen($_POST['password']) >= 1
	){
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
		$consulta = "INSERT INTO datos(nombre,email,contrasena)
			VALUES('$name', '$email', '$password')";
		$resultado = mysqli_query($conex, $consulta);
		if ($resultado) {
			?>
			<center><h3 class="success">Tu registro se ha completado</h3></center>
			<?php
		} else {
			?>
			<center><h3 class="error">Ocurrio un error</h3></center>
			<?php
		}

	} else {
		?>
			<center><h3 class="error">Llena todos los campos</h3></center>
			<?php
		}

}
?>
