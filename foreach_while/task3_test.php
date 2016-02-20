<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<style type="text/css">
 	.green {
 		color: green;
 	}
 	.red {
 		color: red;
 	}
 	body {
 		color: white;
 		background-color: grey;
 	}
 	</style>
 </head>
 <body>
 
 <?php
header('Content-Type: text/html; charset=utf-8');
$str = 'Поражениетo на византийците и покоряването от страна на прабългарите на завареното население завършва със сключването на мирен договор през лятото на 681г., чрез който Аспарухова България е призната от Византия.';
 $text = explode(' ',$str);
 
 foreach ($text as $key => $value) {
 	if ($key%3==0) {
 		
 		echo "<span class='green'>$value</span>";
 	} elseif ($key%3==1) {
 		echo ' '."<span class='red'>$value</span>".' ';
 	
 		}
 	else {
 		echo ' '.$value.' ';
	 }
} 
?>
</body>
 </html>