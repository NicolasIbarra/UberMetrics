<?php

require 'connect.php';

//QUERY PARA INGRESAR DATOS

$kmEnd = $_POST['kmEnd'];

$iniQuery = "INSERT INTO Kilometraje(score, fecha, tiempo, type) VALUES ('$kmEnd', NOW(), NOW(), 'end')";

$connect->exec($iniQuery);

echo "Dato fue insertado correctamente";
echo "<br />";
echo "Felicitaciones! Has terminado tu sesión.";
echo "<br />";
echo '<a href="end.php"><button>Iniciar Nueva Sesión</button></a>';
echo "<br />";

?>