<?php
echo "<h2> възходящ ред според value</h2>";
$people=array(
	'Sophia' => '31',
	'Jacob'=> '41',
	'William'=> '39',
	'Ramesh'=>'40',
	);

asort($people);
echo '<table border=1>';
foreach ($people as $key => $value) {
	echo'<tr><td>'.$key.'</td><td>'.$value.'</td></tr>' ;
}
echo '</table>';

echo "<h2> възходящ ред според key</h2>";
$people=array(
	'Sophia' => '31',
	'Jacob'=> '41',
	'William'=> '39',
	'Ramesh'=>'40',
	);

ksort($people);
echo '<table border=1>';
foreach ($people as $key => $value) {
	echo'<tr><td>'.$key.'</td><td>'.$value.'</td></tr>' ;
}
echo '</table>';
echo "<h2> низходящ ред според value</h2>";
$people=array(
	'Sophia' => '31',
	'Jacob'=> '41',
	'William'=> '39',
	'Ramesh'=>'40',
	);

arsort($people);
echo '<table border=1>';
foreach ($people as $key => $value) {
	echo'<tr><td>'.$key.'</td><td>'.$value.'</td></tr>' ;
}
echo '</table>';
echo "<h2> низходящ ред според кey</h2>";
$people=array(
	'Sophia' => '31',
	'Jacob'=> '41',
	'William'=> '39',
	'Ramesh'=>'40',
	);

krsort($people);
echo '<table border=1>';
foreach ($people as $key => $value) {
	echo'<tr><td>'.$key.'</td><td>'.$value.'</td></tr>' ;
}
echo '</table>';