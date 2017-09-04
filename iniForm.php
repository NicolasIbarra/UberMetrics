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

$kmIni = $_POST['kmIni'];

$iniQuery = "INSERT INTO Kilometraje(score, fecha, tiempo, type) VALUES ('$kmIni', NOW(), NOW(), 'end')";

$connect->exec($iniQuery);

echo "Dato fue insertado correctamente";
echo "<br />";
echo "Haz click en terminar cuando finalices tu último viaje";
echo "<br />";
echo '<a href="termino.php"><button>Terminar</button></a>';

?>