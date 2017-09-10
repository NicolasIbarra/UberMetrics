<?php

include 'function.php';

echo "Hoy has hecho: $ ";
$hoy = number_format(resumenDia());
print($hoy);
echo "<br />";
echo "Ayer hiciste: $ ";
$ayer = number_format(resumenAyer());
print($ayer);

echo "<br />";

?>

<br>

<?php

// CONDICIONA Cuánto falta?

if ($hoy == 0 && $ayer == 0) {
	echo "No has trabajdo mucho estos días";
}

if($hoy > $ayer) {
	echo "Bien! Superaste tu marca de ayer";
		} elseif ($hoy == $ayer && $hoy != 0 && $ayer != 0) {
	echo "Vamos, una más y a la casa!";
		} elseif ($hoy < $ayer) {
	echo "Te faltan algunas ordenes por completar";
	}

?>

<br>

<?php

// BOTON VOLVER INICIO

backStart();

mysqli_free_results($result);
mysqli_close($connect);

?>