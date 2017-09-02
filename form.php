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

$nombre = $_POST['nombre'];

$query = "INSERT INTO datos(Datos) VALUES ('$nombre')";

$connect->exec($query);

echo "Dato fue insertado correctamente";


?>