<html>

<?php require '../connect.php'; ?>

<form action="" method="post">
	<input type="text" name="name" value="name" /><br>
	<input type="text" name="age" value="age" /><br>
	<input type="text" name="email" value="email" /><br>
	<input type="submit" name="submit" id="submit" value="submit"
 />
</form>

<?php

 	$name = $_POST['name'];
 	$age = $_POST['age'];
 	$email = $_POST['email'];

 	if(isset($_POST['submit'])){
 		$query  = "INSERT INTO name(name, age, email) ";
 		$query .= "VALUES ('$name', '$age', '$email')";
 		$result = mysqli_query($connect, $query);
 		print "Hello $name, you are is $age and your email is $email";
 	}

?>
 
</html>