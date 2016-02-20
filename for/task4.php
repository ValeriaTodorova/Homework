<!DOCTYPE html>
<html>
<head>
	<title>Task4</title>
	<meta charset="UTF-8">
</head>
<body>
<form action="Task4.php" method="post">
Enter your word:<input type="text" name="enterword">
<input type="submit" name="submit" value="code">
</form>

<?php
if (!empty($_POST['submit'])) {
$text=$_POST["enterword"];
$text =str_replace('a', '@', $text);
$text =str_replace('c', '3', $text);
echo $text;

}	

?>

</body>
</html>