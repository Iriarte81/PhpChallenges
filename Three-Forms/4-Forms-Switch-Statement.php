<?php

/* 
PHP Forms Ex. #4: Switch Statement

You probably noticed that the if-elseif-else construction was repetitive and cumbersome in the last exercise.
It works best with only one or two choices. A more appropriate construction for this exercise is the switch
statement, combined with a select field in the form for the days of the week. So your assignment in this PHP
exercise is to rewrite the previous exercise using a select field for the user input and the switch statement to process the response.

Once again, here's the poem:

Laugh on Monday, laugh for danger.
Laugh on Tuesday, kiss a stranger.
Laugh on Wednesday, laugh for a letter.
Laugh on Thursday, something better.
Laugh on Friday, laugh for sorrow.
Laugh on Saturday, joy tomorrow.

Remember to include a general response for any input that is not in the poem. To make things a little more interesting,
include a 'Back' button on the response so that the user can go back and try different days.

*/

?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Exercise 15</title>
 </head>

<body>
<?php 

echo "Submitting a selection on My Solution will result in an error in the </br>
Official solution and vice versa. This is because both scripts redirect to the </br>
same page, but use different names on the select and submit elements </br>
of respective forms. </br>";
echo "</br>";
echo "My Solution.<br/>";
echo "</br>";
?>
<?php

/*echo "<pre>";
print_r($_POST);
echo "</pre>";
*/

if (isset($_POST['submit'])) {

$day = $_POST['FormOptions'];
	
	switch ($day) {
    case "Monday":
		echo "Laugh on $day, laugh for danger.";
        break;
    case "Tuesday":
		echo "Laugh on $day, kiss a stranger.";
        break;
    case "Wednesday":
		echo "Laugh on $day, laugh for a letter";
        break;
    case "Thursday":
		echo "Laugh on $day, something better";
        break;
    case "Friday":
		echo "Laugh on $day, laugh for sorrow";
        break;
    case "Saturday":
		echo "Laugh on $day, joy tomorrow";
        break;
    default:
		echo "Enter Monday,Tuesday,Wednesday,Thursday,Friday or Saturday \n
		for a custom message. Otherwise you will get this message.";
}

echo "<form action='4-Forms-Switch-Statement.php'>";
echo "<br></br>";
echo "<input type='submit' value='Back'>";
echo "</form>"; 


} else {

echo "The Form";
echo "</br></br>";
echo "<form action='4-Forms-Switch-Statement.php' method='POST'>";
echo "Pick a day:<br>";
echo " <select name='FormOptions'>
			<option value='Monday'>Monday</option>
  			<option value='Tuesday'>Tuesday</option>
  			<option value='Wednesday'>Wednesday</option>
  			<option value='Thursday'>Thursday</option>
  			<option value='Friday'>Friday</option>
  			<option value='Saturday'>Saturday</option>
  			<option value='Sunday'>Sunday</option>	
	    </select>";
echo "<br></br>";
echo "<input type='submit' value='Submit' name='submit'>";
echo "</form>"; 
}




// Official Solution
echo "<br/>";
echo "Official Solution.<br/>";
echo "<br/>";
?>
<h2>Pick a Day</h2>
<?php
//If form not submitted, show form.
if (!isset($_POST['submit'])){
?>
 
<form method="post" action="4-Forms-Switch-Statement.php">
Please choose a day:<p />
<select name="day">
   <option value="Monday">Monday</option>
   <option value="Tuesday">Tuesday</option>
   <option value="Wednesday">Wednesday</option>
   <option value="Thursday">Thursday</option>
   <option value="Friday">Friday</option>
   <option value="Saturday">Saturday</option>
   <option value="Sunday">Sunday</option>
</select> 
<p />
<input type="submit" name="submit" value="Go"/>
</form>
 
<?php
//If form submitted, process input.
}else{
$day = $_POST['day'];
switch($day){
  case 'Monday':
    echo 'Laugh on Monday, laugh for danger.';
    break;
    /*Did you remember your break statements for each option? 
    If not, once started, the script will continue to execute
    the instructions to the end of the switch statement.*/
  case 'Tuesday':
    echo 'Laugh on Tuesday, kiss a stranger.';
    break;
  case 'Wednesday':
    echo 'Laugh on Wednesday, laugh for a letter.';
    break;
  case 'Thursday':
    echo 'Laugh on Thursday, something better.';
    break;
  case 'Friday':
    echo 'Laugh on Friday, laugh for sorrow.';
    break;
  case 'Saturday':
    echo 'Laugh on Saturday, joy tomorrow.';
    break;
  default:
    echo 'No information for that day.';
    break; 
}
?>
<p />
<form action="4-Forms-Switch-Statement.php">
<input type="submit" name="submit" value="Back" onclick="self.location='4-Forms-Switch-Statement.php'" />
</form>
<?php
}
?> 
</body>
</html>
