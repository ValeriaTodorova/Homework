<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Days</title>
</head>
<body>
   <form action="task2.php" method="get">
   	Enter day ot the week<input type="text" name="day">
    <input type="submit" name="submit" value="Enter">
   </form>

   <?php

if (!empty($_GET["submit"])) {
	$days = $_GET["day"];
	if ($days == "Monday") {
	echo '<p>Laugh on Monday, laugh for danger</p>';
} elseif ($days == "Tuesday") {
	echo "<p>Laugh on Tuesday, kiss a stranger</p>";
}
}


   ?>

	
</body>
</html>