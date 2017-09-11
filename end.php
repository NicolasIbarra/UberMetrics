<!DOCTYPE html>
<html>
<?php 

require 'function.php';
headWeb();

?>

	<body>
		<div id="container">

			<h1>Uberytics</h1>
			<h3>Término Sesión</h3>

			<form action="endForm.php" method="post">
				<input type="text" name="kmEnd" placeholder="   km final..." />
				<br>
				<input type="text" name="cashEnd" placeholder="   cash final..." />
				<br>
				<input id="submit" type="submit" value="enviar" />
			</form>

		</div>
	</body>

</html>