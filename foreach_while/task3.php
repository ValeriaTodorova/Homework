<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>City-Country</title>
</head>
<body>
	<h2>Choose one city:</h2>
	<form action="task3.php" method="get">
	<select name="city">
			<option value="Sofia">Sofia</option>
			<option value="Liubliana">Liubliana</option>
			<option value="Paris">Paris</option>
			<option value="Moscou">Moscou</option>
			<option value="Belgrad">Belgrad</option>
		</select>
	<input type="submit" name="submit" value="Choose">
</form>

<?php
 


if (!empty($_GET['submit'])) {
	$city = $_GET['city'];
}	
	$Europe=array(
	'Sofia' => 'Bulgaria',
	'Liubliana'=> 'Liubliana',
	'Paris'=> 'France',
	'Moscou'=>'Rusia',
	'Belgrad'=>'Serbia'
	);


	foreach ($Europe as $key => $value) {
		echo'<p>'.$key.'is in '.$value.'</p>' ;
			
	}
?>
	
</body>
</html>