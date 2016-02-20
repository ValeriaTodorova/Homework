<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
</head>
<body>
	<form action="task5.php" method="get">
		Въведете число:<input type="text" name="number">
		<input type="submit" name="submit" value="!n">
	</form>

	<?php 

if (!empty($_GET['submit'])) {
	$numbers = $_GET['number'];
$a = 1;
$b = 1;
while ( $b <= $numbers) {
	$a = $a*$b;
	$b++;	
	
}
echo '<p>!n '.$numbers.' = '.$a.'</p>';	
}

?>	
</body>
</html>