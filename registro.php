<?php

	include ('conexion.php');
	ini_set('display_errors', 'off');
	ini_set('display_startup_errors', 'off');
	error_reporting(0);
	//Recuperacion de las Variables
	
	$UserName = htmlentities($_POST['Username']);
	$contraseña =htmlentities($_POST['Password']);
	$Correo = htmlentities($_POST['Email']);
	$Telefono = htmlentities($_POST['Phone']);
	$mysqli=conexion();
	if($mysqli->connect_errno){
		echo "El sitio esta presentando problemas";
		exit;
	}
	$sql = "INSERT INTO registro values ('$UserName', '$contraseña', '$Correo', '$Telefono')";
	if($mysqli->query($sql)==TRUE){
		echo "<script>alert('Usuario Registrado Correctamente');";		
		header("Location:/nutri_fitness/login.php");
		exit();
	}else {
		echo "error";
	}
	//Iniciamos sentencia SQL
	$conn->close();

?>
