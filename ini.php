<!DOCTYPE html>
<html>
<?php 

require 'function.php';
headWeb();

?>

	<body>
		<div id="container">
			
			<h1>Uberytics</h1>
			<h3>Inicio Sesión</h3>

			<form action="iniForm.php" method="post">
				<input type="text" name="kmIni" placeholder="   km inicial..." />
				<br>
				<input type="text" name="cashIni" placeholder="   cash inicial..." />
				<br>
				<input class="btn" type="submit" value="enviar" />
			</form>
		</div>
	</body>

</html>