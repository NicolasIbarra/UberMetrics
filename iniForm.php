<?php

//CONNECT DATABASE
require 'connect.php';
require 'function.php';

headWeb();

//QUERY PARA INGRESAR DATOS

$kmIni = $_POST['kmIni'];
$cashIni = $_POST['cashIni'];

$iniQuery = "INSERT INTO Kilometraje(score, fecha, tiempo, type) VALUES ('$kmIni', NOW(), NOW(), 'ini')";
$cashQuery = "INSERT INTO Cash(till_amount, date, time) VALUES ('$cashIni', NOW(), NOW())";

$resultK = mysqli_query($connect, $iniQuery);
$resultC = mysqli_query($connect, $cashQuery);

?>

<html>

<?php

echo "<body><div id='container'>";
echo "Dato fue insertado correctamente";
echo "<br />";
echo "Haz click en 'Finalizar' cuando finalices tu último viaje";
echo "<br />";

?>

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
			<div id="resumen" style="display: none">
				<?php resumenTotal(); ?>
			</div>
			<div id="iniciar">
				<?php 
				echo "<br />";
				echo '<a href="end.php"><button>Finalizar</button></a>';
				echo "<br />";
				?>
			</div>
		</div>

</html>