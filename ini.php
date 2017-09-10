<!DOCTYPE html>
<html>
<?php 

require 'function.php';
headWeb();

?>
	<h1>Uber Analytics</h1>
	<h3>Inicio sesión</h3>

	<div class="container">
		<form action="iniForm.php" method="post">
			<input type="text" name="kmIni" placeholder="km inicial..." />
			<br>
			<input type="text" name="cashIni" placeholder="cash inicial..." />
			<br>
			<input type="submit" value="enviar" />
		</form>
	</div>

</html>