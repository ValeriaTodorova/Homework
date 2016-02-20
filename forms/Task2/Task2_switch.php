<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Days</title>
</head>
<body>
   <form action="test.php" method="get">
   	Enter day ot the week:<input type="text" name="day">
    <input type="submit" name="submit" value="Enter">
   </form>

   <?php
if (!empty($_GET["submit"])) {
	$var = $_GET["day"];
switch ($var){
	  case "Monday":
	  echo "Laugh on Monday, laugh for danger";
	  break;
	   case "Tuesday":
	  echo "Laugh on Tuesday, kiss a stranger";
	  break;
	   case "Wednesday":
	  echo "Laugh on Wednesday, laugh for a letter";
	  break;
	   case "Thursday":
	  echo "Laugh on Thursday, something better";
	  break;
	   case "Friday":
	  echo "Laugh on Friday, laugh for sorrow.";
	  break;
	   case "Saturday":
	  echo "Laugh on Saturday, joy tomorrow";
	  break;
	   case "Sunday":
	  echo "There is no poem for you";
	  break;
	  default:
	  echo "There is no such a day in the week";	 
	  }
}
	
	  

   ?>

	
</body>
</html>