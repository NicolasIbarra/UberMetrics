<?php

//CONECTAR BASE DE DATOS

$host = "localhost";
$username = "root";
$password = "root";
$database = "uber";

try {

	$connect = new PDO("mysql:host=$host;dbname=$database", $username, $password);

	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	//echo "Conectado Exitosamente";

}

catch(PDOException $error)

{
	echo $error->getMessage();
}

//QUERY PARA INGRESAR DATOS

$query = "INSERT INTO Kilometraje(score, fecha, tiempo) VALUES (101010, NOW(), NOW())";

$connect->exec($query);

echo "Dato fue insertado correctamente";
echo "<br />";


?>