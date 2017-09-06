<?php

require 'connect.php';

//QUERY PARA INGRESAR DATOS

$kmEnd = $_POST['kmEnd'];
$endQuery = "INSERT INTO Kilometraje(score, fecha, tiempo, type) VALUES ('$kmEnd', NOW(), NOW(), 'end')";

$resultK = mysqli_query($connect, $endQuery);
$resultE = mysqli_query($connect, $kmEnd);

echo "Dato fue insertado correctamente";
echo "<br />";
echo "Felicitaciones! Has terminado tu sesión.";
echo "<br />";
echo '<a href="end.php"><button>Iniciar Nueva Sesión</button></a>';
echo "<br />";
echo '<a href="resumen.php"><button>Ver Resumen</button></a>';

?>