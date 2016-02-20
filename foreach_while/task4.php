<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<style type="text/css">
 	body {
 		color: white;
 		background-color: #B6ADAD;
 	}
 	.red {
 		color: #F16767;
 	}
 	.green {
 		color: #60F64C;
 	} 	
 	</style>
 </head>
 <body>
 
 <?php
$information = "Поражениетo на византийците и покоряването от 
страна на прабългарите на завареното население завършва със 
сключването на мирен договор през лятото на 681г., чрез който 
Аспарухова България е призната от Византия.";
 $text = explode(' ',$information);
 
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