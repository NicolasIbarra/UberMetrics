<?php

function headWeb() {
	echo "<link rel='stylesheet' href='style.css' type='text/css' />";
	echo "<meta charset='UTF-8'>";
	echo "<script src='https://code.jquery.com/jquery-3.2.1.min.js' integrity='sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=' crossorigin='anonymous'></script>";
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

?>
