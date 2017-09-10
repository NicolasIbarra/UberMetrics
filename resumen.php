<?php

require 'function.php';

headWeb();

resumenTotal();

backStart();

mysqli_free_results($result); // ESTO TENGO QUE REVISAR PORQUE AHORA TENGO OTRAS VARIABLES COMO $final_result;
mysqli_close($connect);

?>