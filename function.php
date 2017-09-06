<?php

function mainMenu() {
	echo '<a href="hello.php"><button>Hello</button></a>';
	echo '<a href="toy.php"><button>Toy</button></a>';
}

function cssSheet() {
	echo '<link rel="stylesheet" type="text/css" href="style.css">';
}

function imprime() {
	echo "imprime";
	echo "<br />";
	echo "Hola";
}

function resumenDia() {
	//1er PASO: CONECTAR BASE DE DATOS
	require 'connect.php';
	
	//2do PASO: HACER QUERY
	$query = "SELECT sum(till_amount) FROM Cash ";
	$query .= "WHERE date >='2017-09-05'";
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
	$query .= "WHERE date <'2017-09-05'";
	$result = mysqli_query($connect, $query);

	//3er PASO: LOOP CON RESULTADOS
	$final_result2 = 0;
	while($row = mysqli_fetch_assoc($result)) {
		$final_result2 = $row["sum(till_amount)"];
	}
	return $final_result2;
}

function cuantoFalta() {
	if($hoy > $ayer) {
	echo "Bien! Superaste tu marca de ayer";
		} elseif ($hoy == $ayer) {
	echo "Vamos, una más y a la casa!";
		} elseif ($hoy < $ayer) {
	echo "Te faltan ordenes";
	}
}

?>
