<?php

/* 

PHP Forms Ex. #3: If-Elseif-Else Construction

For this PHP exercise, you will use the same format as the previous exercise, requesting input in the first part,
and responding in the second, through the magic of PHP's if-else statement. In the first section, give the user an
input field and request that they enter a day of the week.

For the second section, you'll need the following poem:

Laugh on Monday, laugh for danger.
Laugh on Tuesday, kiss a stranger.
Laugh on Wednesday, laugh for a letter.
Laugh on Thursday, something better.
Laugh on Friday, laugh for sorrow.
Laugh on Saturday, joy tomorrow.

Using the else-elseif-else construction, set each line to output in response to the day the user inputs, with a
general response for any input that is not in the poem. 

*/

?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Exercise 14</title>
 </head>

<body>
<?php 

echo "My Solution.<br/>";
echo "</br>";
if (isset($_POST['day'])) {

$day = $_POST['day'];
	
	if ($day == "Monday") {

		echo "Laugh on $day, laugh for danger.";
	
	} elseif ($day == "Tuesday") {
		
		echo "Laugh on $day, kiss a stranger.";
	
	} elseif ($day == "Wednesday") {

		echo "Laugh on $day, laugh for a letter";
	
	} elseif ($day == "Thursday") {

		echo "Laugh on $day, something better";
	
	} elseif ($day == "Friday") {

		echo "Laugh on $day, laugh for sorrow";

	} elseif ($day == "Saturday") {

		echo "Laugh on $day, joy tomorrow";
	} else {

		echo "Enter Monday,Tuesday,Wednesday,Thursday,Friday or Saturday \n
		for a custom message. Otherwise you will get this message.";
	}

} else {

echo "The Form";
echo "</br></br>";
echo "<form action='3-Forms-If-Elseif-Else-Construction.php' method='POST'>";
echo "First name:<br>";
echo "<input type='text' name='day' value='Monday'>";
echo "<br></br>";
echo "<input type='submit' value='Submit'>";
echo "</form>"; 
}



// Official Solution
echo "</br>";
echo "</br>";
echo "Official Solution.<br/>";
?> 

<h2>Days of the Week</h2>
 
<?php
//If form not submitted, display form.
if (!isset($_POST['submit'])){
?>
 
<form method="post" action="3-Forms-If-Elseif-Else-Construction.php">
Please enter a day of the week:  <br />
<input type="text" name="day" />
<p />
<input type="submit" name="submit" value="Go" />
</form>
 
<?php
//If form submitted, process input.
}else{
//Retrieve string from post submission
$day = $_POST["day"];
if ($day == 'Monday'){
  echo "Laugh on Monday, laugh for danger.";
} elseif ($day == 'Tuesday'){
  echo "Laugh on Tuesday, kiss a stranger.";
} elseif ($day == 'Wednesday'){
  echo "Laugh on Wednesday, laugh for a letter.";
} elseif ($day == 'Thursday'){
  echo "Laugh on Thursday, something better.";
} elseif ($day == 'Friday'){
  echo "Laugh on Friday, laugh for sorrow.";
} elseif ($day == 'Saturday'){
  echo "Laugh on Saturday, joy tomorrow.";
} else {
  echo "No information for that day.";
}
 
}
?>
</body>
</html>
