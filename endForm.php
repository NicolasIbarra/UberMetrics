<?php

require 'connect.php';

//QUERY PARA INGRESAR DATOS

$kmEnd = $_POST['kmEnd'];

$endQuery = "INSERT INTO Kilometraje(score, fecha, tiempo, type) VALUES ('$kmEnd', NOW(), NOW(), 'end')";

$connect->exec($endQuery);

echo "Dato fue insertado correctamente";
echo "<br />";
echo "Felicitaciones! Has terminado tu sesión.";
echo "<br />";
echo '<a href="end.php"><button>Iniciar Nueva Sesión</button></a>';
echo "<br />";


//REVISAR CÓDIGO PHP, SQL FUNCIONA BIEN!


$sql = "SELECT sum(till_amount) FROM Cash WHERE time>='16:50:22'";
$results = mysqli_query($connect, $sql) or die ("Bad Query: $sql");

print_r($results);

?>