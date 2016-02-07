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
	echo "Laugh on ".$days", laugh for danger";
} elseif ($days == "Tuesday") {
	echo "Laugh on "$days", kiss a stranger";
}elseif ($days == "Wednesday") {
	echo "Laugh on ".$days.",  laugh for a letter.";
}elseif ($days == "Thursday") {
	echo "Laugh on ".$days.",  something better.";
}elseif ($days == "Friday") {
	echo "Laugh on ".$days.",   laugh for sorrow.";
}elseif ($days == "Saturday") {
	echo "Laugh on ".$days.",    joy tomorrow.";
}
}else{
	echo "Няма такъв ден";
}


   ?>

	
</body>
</html>