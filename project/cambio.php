<?php
	
	session_start();

	if(isset($_POST['send'])){
	include 'conexion.php';

	$user = $_SESSION['useryey'];

	$sql = "SELECT * FROM datos2 WHERE usuario = '$user'";

	$resultado = $conexion->query($sql) or die("fallo al obtener");

	  $edad = $_POST['age'];
	  $pais = $_POST['Nacion'];
	  $desc = $_POST['descr'];
	  $sql = "INSERT INTO `datos2` (`Edad`, `Nacionalidad`, `Descrip`) VALUES ('$edad','$pais','$desc')";
	}

?>