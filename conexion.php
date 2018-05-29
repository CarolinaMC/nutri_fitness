<?php

	function conexion(){
		$mysqli= new mysqli('localhost', 'root', '','nutri_fitness');

		if($mysqli->connect_errno){
			echo "No se pudo realizar la conexion con el Servidor";
			exit();
		}
		return $mysqli;
	}

?>