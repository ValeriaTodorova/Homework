<?php
echo "<h2>Сортиpане според имената на държавите</h2>";
$Europe=array(
	'Bulgaria' => 'Sofia',
	'Slovenia'=> 'Liubliana',
	'France'=> 'Paris',
	'Russia'=>'Moscou',
	'Serbia'=>'Belgrad'
	);

ksort($Europe);
echo '<table border=1>';
foreach ($Europe as $key => $value) {
	echo'<tr><td>'.$key.'</td><td>'.$value.'</td></tr>' ;
}
echo '</table>';
echo "<h2>Сортиpане според имената на градовете</h2>";
$Europe=array(
	'Bulgaria' => 'Sofia',
	'Slovenia'=> 'Liubliana',
	'France'=> 'Paris',
	'Russia'=>'Moscou',
	'Serbia'=>'Belgrad'
	);

asort($Europe);
echo '<table border=1>';
foreach ($Europe as $key => $value) {
	echo'<tr><td>'.$key.'</td><td>'.$value.'</td></tr>' ;
}
echo '</table>';
