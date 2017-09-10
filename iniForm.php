<?php

//CONNECT DATABASE
require 'connect.php';
require 'function.php';

headWeb();

//QUERY PARA INGRESAR DATOS

$kmIni = $_POST['kmIni'];
$cashIni = $_POST['cashIni'];

$iniQuery = "INSERT INTO Kilometraje(score, fecha, tiempo, type) VALUES ('$kmIni', NOW(), NOW(), 'ini')";
$cashQuery = "INSERT INTO Cash(till_amount, date, time) VALUES ('$cashIni', NOW(), NOW())";

$resultK = mysqli_query($connect, $iniQuery);
$resultC = mysqli_query($connect, $cashQuery);


echo "<div id='container'>";
echo "Dato fue insertado correctamente";
echo "<br />";
echo "Haz click en 'Finalizar' cuando finalices tu último viaje";
echo "<br />";
echo '<a href="end.php"><button>Finalizar</button></a>';
echo "</div>";

?>