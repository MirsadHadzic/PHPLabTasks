<!DOCTYPE html>
<html>
<head>
	<title>My Information</title>
</head>
<body>
	<form method="post" action="fourthLabTask.php">
		<label for="name">Name:</label>
		<input type="text" name="name" id="name"><br><br>
		<label for="age">Age:</label>
		<input type="number" name="age" id="age"><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>


<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $age = $_POST['age'];
  echo "My name is " . $name . " and I am " . $age . " years old.";
}

?>
