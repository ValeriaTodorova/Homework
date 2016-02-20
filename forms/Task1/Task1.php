<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Users</title>
</head>
<body>
	<form action="Form1.php" method="post">
		username<input type="text" name="username">
		password<input type="password" name="password">
		<input type="submit" name="submit" value="login">
	</form>

	<?php
	$username="valeria";
	$password="val123";

	if (!empty($_POST["submit"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];
		if ($_POST["username"]!="valeria" && $_POST["password"]!="val123") {
		echo "<p>Wrong username and password!</p>";
	} elseif ($_POST["username"]!="valeria") {
		echo "<p>Wrong username</p>";
	} elseif ($_POST["password"]!="val123") {
		echo "<p>Wrong password</p>";
	} else  {
		echo "<p>Hello ".$username. "</p>";
	}
}
	?>

</body>
</html>

