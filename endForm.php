<?php

require 'connect.php';
require 'function.php';

//QUERY PARA INGRESAR DATOS

$kmEnd = $_POST['kmEnd'];
$endQuery = "INSERT INTO Kilometraje(score, fecha, tiempo, type) VALUES ('$kmEnd', NOW(), NOW(), 'end')";

$resultK = mysqli_query($connect, $endQuery);
$resultE = mysqli_query($connect, $kmEnd);

echo "<div id='container'>Dato fue insertado correctamente</div>";
echo "<br />";
echo "Felicitaciones! Has terminado tu sesión.";

?>

<html>
	<head>
	<?php headWeb(); ?>
	</head>

	<body>
		<div id="container">
			<!--Código jQuery -->
				<script>
					$(document).ready(function() {
						$('#boton').click(function(){
							$('#boton').toggleClass('highlight');
							$('#resumen').animate({
								height: 'toggle'
							}, 200);
						});
					});
				</script>
			<button id="boton">Ver Resumen</button>
			<div id="resumen">
				<?php resumenTotal(); ?>
			</div>
			<div id="iniciar">
				<?php 
				echo "<br />";
				echo '<a href="end.php"><button>Iniciar Nueva Sesión</button></a>';
				echo "<br />";
				?>
			</div>
		</div>
	</body>

</html>