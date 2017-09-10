<!DOCTYPE html>
<html>
<?php 

require 'function.php';
headWeb();

?>

	<body>
		<div id="container" style="background-color: yellow;">
			<h1>Uber Analytics</h1>
			<h3>Inicio sesión</h3>

			<form action="iniForm.php" method="post">
				<input type="text" name="kmIni" placeholder="km inicial..." />
				<br>
				<input type="text" name="cashIni" placeholder="cash inicial..." />
				<br>
				<input type="submit" value="enviar" />
			</form>
		</div>
	</body>
</html>