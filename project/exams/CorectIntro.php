<?php

session_start();
$id = $_GET['id'];
$wall = 'indexlog.php?id='.$id;
$profil = 'perfil.php?id='.$id;
$SalaQ = 'salaQ.php?id='.$id;
$Reali = 'regexam.php?id='.$id;
$more = 'more.php?id='.$id;
$ExamI = 'examIntro.php?id='.$id;
$exam1 = 'exam1.php?id='.$id;
$search = 'search.php?id='.$id;
$user = $_SESSION['useryey'];

if ($_SESSION['useryey'] == "" || $id == "") {
  header('location: Error404.php');
}else{
	if (isset($_POST['complete'])) {
		$res1 = $_POST['opciones1'];
		$res2 = $_POST['opciones2'];
		$res3 = $_POST['opciones3'];
		$res4 = $_POST['opciones4'];
		$res5 = $_POST['opciones5'];
		$res6 = $_POST['opciones6'];
		$res7 = $_POST['opciones7'];
		$res8 = $_POST['opciones8'];
		$res9 = $_POST['opciones9'];
		$res10 = $_POST['opciones10'];
		$res11 = $_POST['opciones11'];
		$res12 = $_POST['opciones12'];
		$res13 = $_POST['opciones13'];
		$res14 = $_POST['opciones14'];
		$res15 = $_POST['opciones15'];
		$res16 = $_POST['opciones16'];
		$res17 = $_POST['opciones17'];
		$res18 = $_POST['opciones18'];
		$res19 = $_POST['opciones19'];
		$res20 = $_POST['opciones20'];
		$res21 = $_POST['opciones21'];
		$res22 = $_POST['opciones22'];
		$res23 = $_POST['opciones23'];
		$res24 = $_POST['opciones24'];
		$res25 = $_POST['opciones25'];
		$total = $res1 + $res2 + $res4 + $res5 + $res6 + $res7 + $res8 + $res9 + $res10 + $res11 + $res12 + $res13 + $res14 + $res15 + $res16 + $res17 + $res18 + $res19 + $res20 + $res21 + $res22 + $res23 + $res24 + $res25;

		$total = ($total / 25) * 10;

		echo $user;


		include '../conexion.php';

		$sql = "SELECT * FROM datos2 WHERE usuario = '$user'";

		$resultado = $conexion->query($sql) or die("fallo al obtener");

		while ($row = $resultado->fetch_assoc()){

		  $intro = $row['intro'];

		  if($intro == 1) {
		  	
		  	header("location: ../".$wall);

		  }else{
		
				$cambio = "UPDATE `datos2` SET `NumExams`='1', `CaliMax`='$total', `CaliMin`='$total', `NotaIntro`='$total', `intro`='1' WHERE usuario = '$user'";
		  	
		  }

		}


		$cambiar = $conexion->query($cambio);

		header("location: ../".$wall);

	}else{
		header("location: ../".$wall);
	}
}

?>