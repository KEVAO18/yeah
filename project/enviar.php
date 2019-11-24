<?php
	if (isset($_GET['envio']) && $_GET['envio'] == "verificar" && isset($_POST['email']) && $_POST['email'] != "") {

		include 'conexion.php';

		$email = $_POST['email'];

		$sql = "SELECT * FROM datos2 WHERE email = '$email'";

		$resultado = $conexion->query($sql);

		while ($row=$resultado->fetch_assoc()){
			$usermd5 = md5($row['usuario']);
			$emailmd5 = md5($email);
			mail($email, "Cambio de contraseña de Yeah English Yeah", "Señor ".$row['usuario']."\n \n Podra recuperar su contraseña al hacer click en el siguiente enlace \n \n yeahenglishyeah.000webhostapp.com/recuperar.php?id=".$usermd5."&ec=".$email."&email=".$emailmd5, "From: kevin100orrego@gmail.com");
		}
			header('location: recuperar.php?enviado=ok(o_O)');
	}else{

		header('location: iniciar.php');

	}
	

?>