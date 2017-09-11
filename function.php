<?php

function headWeb() {
	echo "<link rel='stylesheet' href='style.css' type='text/css' />";
	echo "<meta charset='UTF-8'>";
	echo "<script src='https://code.jquery.com/jquery-3.2.1.min.js' integrity='sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=' crossorigin='anonymous'></script>";
	echo "<link href='https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i' rel='stylesheet'>";
	echo "<link href='https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700' rel='stylesheet'>";
}

function resumenDia() {
	//1er PASO: CONECTAR BASE DE DATOS
	require 'connect.php';
	
	//2do PASO: HACER QUERY
	$query = "SELECT sum(till_amount) FROM Cash ";
	/////////////////////// ESTA ES LA FORMA EN QUE SE EXPRESA "HOY"
	$query .= "WHERE date >=CURDATE()";
	$result = mysqli_query($connect, $query);

	//3er PASO: LOOP CON RESULTADOS
	$final_result = 0;
	while($row = mysqli_fetch_assoc($result)) {
		$final_result = $row["sum(till_amount)"];
	}
	return $final_result;

}

function resumenAyer() {
	//1er PASO: CONECTAR BASE DE DATOS
	require 'connect.php';
	
	//2do PASO: HACER QUERY
	$query = "SELECT sum(till_amount) FROM Cash ";
	/////////////////////// ESTA ES LA FORMA EN QUE SE EXPRESA "AYER"
	$query .= "WHERE date = DATE_ADD(CURDATE(), INTERVAL -1 DAY)";
	$result = mysqli_query($connect, $query);

	//3er PASO: LOOP CON RESULTADOS
	$final_result = 0;
	while($row = mysqli_fetch_assoc($result)) {
		$final_result = $row["sum(till_amount)"];
	}
	return $final_result;
}

function backStart() {
	echo "<a href='ini.php'><button>Ir al Inicio</button></a>";
}

function resumenTotal() {

	/////////// CÁLCULO HOY
	echo "<p style='font-size: 11px;''>Hoy has hecho</p>";
	$hoy = number_format(resumenDia());
	print "<h1>$ $hoy</h1>";


	/////////// CÁLCULO AYER
	echo "Ayer hiciste: $ ";
	$ayer = number_format(resumenAyer());
	print "<text style='font-weight: 700;'>$ayer</text>";

	echo "<br />";

	/////////// CONDICIONAL CUÁNTO FALTA?

	if ($hoy == 0 && $ayer == 0) {
		echo "<p style='margin-top: 7px; font-weight: 700;'>No has trabajado mucho estos días</p>";
		echo "<br />";
	}

	if ($hoy > $ayer) {
		echo "<p style='margin-top: 7px; font-weight: 700;'>Bien! Superaste tu marca de ayer</p>";
		echo "<br />";
			} elseif ($hoy == $ayer && $hoy != 0 && $ayer != 0) {
		echo "Vamos, una más y a la casa!";
		echo "<br />";
			} elseif ($hoy < $ayer) {
		echo "Te faltan algunas ordenes por completar";
		echo "<br />";
	}
}

?>
