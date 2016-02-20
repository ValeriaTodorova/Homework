<?php
header('Content-Type:text/html;charset=utf-8');

$temp=array();
for ($i=0; $i<90; $i++){
	$temp[$i]=rand(-20,40);
}
$sum=0;
$broi=90;
for ($i=0; $i<90; $i++) {
	sort($temp);
	echo "$temp[$i]".",";
	$sum=$sum+$temp[$i];          
}
$average=($sum/90);
echo "<p>Средна температура:".$average."</p>";

for($i=0; $i<5; $i++){
	echo "<p>Петте най-ниски темп.са:".$temp[$i]."</p>";
}

for($i=(90-5); $i<90; $i++){
	echo "<p>Петте най-високи темп.са:".$temp[$i]."</p>";

}