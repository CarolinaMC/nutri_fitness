<?php 

include ('conexion.php');
 ini_set('display_errors', 'off');
 ini_set('display_startup_errors', 'off');
 error_reporting(0);



if(isset($_POST['Username']) && isset($_POST['Password']) && 
!empty($_POST['Username']) && !empty($_POST['Password'])){
	$userName = $_POST['Username'];
	$contrasena =$_POST['Password'];
	$existeUsuario = FALSE;
	$conn = conexion();
	$sql = "SELECT * FROM registro WHERE username = '$userName' AND clave = '$contrasena' " ;
	$result = mysqli_query($conn,$sql);
	while($usuario = mysqli_fetch_array($result)){
		$existeUsuario = TRUE;
		session_start();
		$_SESSION["usuario"]["username"]=$usuario['username'];
		$_SESSION["usuario"]["email"]=$usuario['clave'] ;
	}
	$conn->close();
	if($existeUsuario){
		header("Location:/nutri_fitness/index.php");
		exit();
	}
	else{
		session_start();
		$_SESSION["errMsg"] = "Usuario o contraseña incorrecta";
		header("Location:/nutri_fitness/login.php");
		exit();
	}
	
}

	

?> 
