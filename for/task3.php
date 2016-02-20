<?php
header('Content-Type:text/html;charset=utf-8');
$numbers = array();
for ($i=0; $i<10; $i++){
	$numbers[$i]=rand(0,100);
	echo $numbers[$i].",";
	}
$minimum=$numbers[0];
for ($i=0; $i<10; $i++){
	if ($numbers[$i]<$minimum && $numbers[$i]!=0) {
		$minimum=$numbers[$i];		
	}
}
echo "<p>Eлемент с най-малка стойност: ".$minimum."</p>";