<?php

//CONNECT DATABASE
require 'connect.php';

//QUERY PARA INGRESAR DATOS

$kmIni = $_POST['kmIni'];
$cashIni = $_POST['cashIni'];

$iniQuery = "INSERT INTO Kilometraje(score, fecha, tiempo, type) VALUES ('$kmIni', NOW(), NOW(), 'ini')";
$cashQuery = "INSERT INTO Cash(till_amount, date, time) VALUES ('$cashIni', NOW(), NOW())";

//CÓDIGO EJECUTA QUERY (se puede escribir de otra forma para no ser redundante?)

$connect->exec($iniQuery);
$connect->exec($cashQuery);


echo "Dato fue insertado correctamente";
echo "<br />";
echo "Haz click en terminar cuando finalices tu último viaje";
echo "<br />";
echo '<a href="end.php"><button>Terminar</button></a>';

?>