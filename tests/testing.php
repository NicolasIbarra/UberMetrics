<html>

<form action="" method="post">
	<input type="text" name="name" value="name" />
	<input type="submit" name="submit" id="submit" value="submit"
 />
</form>

 <?php
 	$name = $_POST['name'];
 	if(isset($_POST['submit'])){
 		echo "Hello $name";
 	}
 ?>
 
</html>