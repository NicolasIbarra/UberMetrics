<?php

include 'function.php';

echo "Hoy has hecho: ";
$hoy = resumenDia(); //57442
print($hoy);
echo "<br />";
echo "Ayer hiciste: ";
$ayer = resumenAyer(); //24000
print($ayer);

echo "<br />";

?>

<br>

<?php

// CONDICIONA Cuánto falta?

if($hoy > $ayer) {
	echo "Bien! Superaste tu marca de ayer";
		} elseif ($hoy == $ayer) {
	echo "Vamos, una más y a la casa!";
		} elseif ($hoy < $ayer) {
	echo "Te faltan ordenes";
	}

// -------------------------------------------

mysqli_free_results($result);
mysqli_close($connect);

?>