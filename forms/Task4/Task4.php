<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task4</title>
</head>
<body>
	<form action="Task4.php" method="get">		
		Gues my number:<input type="text" name="number">
		<input type="submit" name="submit" value="Enter">
	</form>

<?php

$mynumber=(2);

if(!empty($_GET['submit'])){
	$yourgues=$_GET["number"];
if($yourgues>0 && $yourgues<$mynumber){
		echo "Въвели сте число по-малко от зададеното";
	}elseif ($yourgues==$mynumber) {
		echo "Познахте числото!!!";
	}elseif ($yourgues>$mynumber && $yourgues<=10) {
		echo "Въвели сте число по-голямо от зададеното";
		
	}else{
		echo "Търсим число от 0 до 10, опитай пак !";
	}
}

?>
	
</body>
</html>