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

// Cálculo sobre cuánto me falta para completar hoy
cuantoFalta();

mysqli_free_results($result);
mysqli_close($connect);

?>