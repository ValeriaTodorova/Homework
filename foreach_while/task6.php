<?php
$n = 4;
$n1 = $n;
$x = 1;
$y = 1;
echo "<table border = 1>";
while ( $y <= $n1) {
	echo "<tr>";
	while ($x <= $n) {
		echo '<td>'.$x.' ';
		$x++;
		echo '</td>';
	}
	echo "</tr>";
	$y++;
	$x = $y;
	$n++;	
}
echo "</table>";