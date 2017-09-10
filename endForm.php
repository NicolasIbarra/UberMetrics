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
				echo "<div id='container'>Dato fue insertado correctamente</div>";
				echo "<br />";
				echo "Felicitaciones! Has terminado tu sesión.";
			?>
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
			<div id="resumen" style="display: none">
				<?php resumenTotal(); ?>
			</div>
			<div id="iniciar">
				<?php 
				echo "<br />";
				echo '<a href="ini.php"><button>Iniciar Nueva Sesión</button></a>';
				echo "<br />";
				?>
			</div>
		</div>
	</body>

</html>