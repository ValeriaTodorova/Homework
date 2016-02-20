<?php
header('Content-Type: text/html; charset=utf-8');
$n = "a";
$b = 1;
$c = 1;
  
while ( $b <= 11) {
	while ( $c<= $b) {
		echo $n;
		$c++;
	}
	echo "<p>";
	$c = 1;
	$b++;
}