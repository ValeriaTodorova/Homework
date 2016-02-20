<?php

$array = array(
	'VALERIA' => "10", 
	'ALEKSANDER'=> "14" ,
	'PETER' => "17"
	);

$string = serialize($array);
$string = strtolower($string);
echo $string;

