<?php
header('Content-Type:text/html;charset=utf-8');
$numbers = array();
for ($i=0; $i<20; $i++){
	$numbers[$i]=$i*5;
	echo "<p>".$numbers[$i]."</p>";
	
}