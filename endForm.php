<?php

require 'connect.php';
require 'function.php';

//QUERY PARA INGRESAR DATOS

$kmEnd = $_POST['kmEnd'];
$endQuery = "INSERT INTO Kilometraje(score, fecha, tiempo, type) VALUES ('$kmEnd', NOW(), NOW(), 'end')";

$resultK = mysqli_query($connect, $endQuery);
$resultE = mysqli_query($connect, $kmEnd);

?>

<html>
	<head>
	<?php headWeb(); ?>
	</head>

	<body>
		<div id="container">

			<?php
				echo "<br />";
				echo "Felicitaciones!<br />";
				echo "Has terminado tu sesión";
			?>
			<br />
			<div id="resumen">
				<?php resumenTotal(); ?>
			</div>

			<div id="iniciar">
				<?php 
				echo "<br />";
				echo "<a href='ini.php'><button class='btn draw-border'>NUEVA SESIÓN</button></a>";
				echo '<br />';
				?>
			</div>
		</div>
	</body>

</html>