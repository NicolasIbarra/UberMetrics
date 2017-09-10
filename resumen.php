<?php

include 'function.php';

resumenTotal();

backStart();

mysqli_free_results($result);
mysqli_close($connect);

?>