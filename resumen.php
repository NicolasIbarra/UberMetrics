<?php

include 'function.php';

echo "Hoy has hecho: ";
$hoy = resumenDia(); //57442
print($hoy);
echo "<br />";
echo "Ayer hiciste: ";
$ayer = resumenAyer(); //24000

echo "<br />";

print($hoy+$ayer);
echo "<br />";
print($ayer);


?>

<br>
<br>

<?php

//ESTA PARTE NO ESTÁ FUNCIONANDO. QUIERO COMPARAR LA VARIABLE $hoy CON LA $ayer PARA ESTABLECER CONDICIONES EN EL CÓDIGO DE ABAJO, PERO POR ALGÚN MOTIVO CONSIDERA QUE LOS VALORES SON IGUALES, SIENDO QUE IMPRIME DIFERENTES NÚMEROS (VER EN BROWSER)

//TENGO QUE CACHAR QUE TIPO DE NÚMERO TIRA LA FUNCION resumenDia() y resumenAyer().


mysqli_free_results($result);
mysqli_close($connect);

?>