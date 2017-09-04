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