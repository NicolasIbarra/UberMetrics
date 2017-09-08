<?php

function get_buttons() {
	$str = '';
	$btns = array (
		1 => 'Save',
		2 => 'Cancel',
		3 => 'Refresh',
		4 => 'Delete',
		5 => 'Business Operation',
	);

	while(list($k,$v) = each($btns)) 
	{
		$str.= '<input type="submit" value="'.$v.'" name="btn_'.$k.'" id="btn_'.$k.'" />';
	}
	return $str;
}

?>

<!DOCTYPE html>
<html>

<body>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
		<div id="buttons_panel">
			<?php echo get_buttons(); ?>
			<?php 
				echo "<br />";
				if(isset($_POST['btn_1'])) {
				print "Saved Clicked";
				}
				if(isset($_POST['btn_2'])) {
				print "Cancel Clicked";
				}
				if(isset($_POST['btn_3'])) {
				print "Refresh Clicked";
				}
				if(isset($_POST['btn_4'])) {
				print "Delete Clicked";
				}
				if(isset($_POST['btn_5'])) {
				print "B. Op Clicked";
				}

			?>
		</div>
		<hr>
	</form>

	<div id="container1">

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		<input type="text" name="name" />
		<input type="submit" name="submit" id="submit" />
	</form>
		<?php
			$name = $_POST['name'];
			if(isset($_POST['submit'])) {
				echo "Hello $name";
			}
		?>
	</div>

	<hr>

	<div id="container2">

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		<input type="text" name="edad" />
		<input type="submit" name="enviar" id="enviar" />
	</form>
		<?php
			$edad = $_POST['edad'];
			if(isset($_POST['enviar'])) {
				echo "Hello $edad";
			}
		?>
	</div>
	
</body>

</html>