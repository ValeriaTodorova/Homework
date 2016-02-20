<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task5_2</title>
</head>
<body>

	<h3>Изберете желания продукт</h3>
	
	<form action="Task5_2.php" method="post">
		<table border=1>
			<tr><td>Дъвка</td><td><input type="checkbox" name="product[]" value="1"> 1лв </td></tr>
			<tr><td>Близалка</td><td><input type="checkbox" name="product[]" value="2"> 2лв</td></tr>
			<tr><td>Лукчета</td><td><input type="checkbox" name="product[]" value="3"> 3лв  </td> </tr>
			<tr><td>Теменужки</td><td><input type="checkbox" name="product[]" value="4"> 4лв </td></tr>  
			<tr><td>Карамел Муу</td><td><input type="checkbox" name="product[]" value="5"> 5лв </td></tr>
		</table>
		<p><input type="submit" name="submit" value="Купи"></p>
	</form>

<?php
var_dump($_POST);

////$products = array (
 //   'gum'     => 1,
	//'lolipop' =>1.5,
	//'lukcheta' =>2.5,
	//'temenujki' =>2,
	//'karamelmu' => 3,
	//);

$total = 0;

if(isset($_POST['submit'])) {
if(!empty($_POST['product'])) {
    foreach($_POST['product'] as $value) {
}        
            $total += $product;
           echo $total;
    }
}
  
?>

</body>
</html>