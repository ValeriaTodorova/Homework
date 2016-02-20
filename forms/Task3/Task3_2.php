<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task3_2.php</title>
</head>
<body>

<h3>Напишете програма, която проверява дали със зададените три
дължини на страни може да се построи триъгълник.
</h3>

<form action="Task3_2.php" method="get">
<p>	a = <input type="text" name="a"></p>
<p>	b = <input type="text" name="b"></p>
<p>	c = <input type="text" name="c"></p>

<input type="submit" name="submit" value="Проверка">
</form>

<?php
if (!empty($_GET['submit'])) {
			$a = $_GET['a'];
			$b = $_GET['b'];
			$c = $_GET['c'];
if (($a+$b)<$c) {
	echo "Не може да се построи триъгълник";
	
if (($a+$c)<$b) {
	echo "Не може да се построи триъгълник";
	
if (($c+$b)<$a) {
	echo "Не може да се построи триъгълник";
	}}}
else{
	echo "Може да се построи триъгълник";
}
}
?>

</body>
</html>