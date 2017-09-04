<html>

<?php

include 'function.php';
cssSheet();

?>

	<h1>Uber Analytics</h1>
	<h3>Inicio sesión</h3>

<div class="container">
	<form action="iniForm.php" method="post">
		<input type="text" name="kmIni" value="km inicial..." />
		<br>
		<input type="text" name="cashIni" value="cash inicial..." />
		<br>
		<input type="submit" value="enviar" />
	</form>
</div>

</html>