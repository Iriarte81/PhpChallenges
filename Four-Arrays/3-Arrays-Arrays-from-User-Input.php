<?php

/* PHP Arrays Ex. #3: Arrays from User Input

For this PHP exercise, create a form asking the user for input about the weather the user has experienced in a month of the user's choice.
In separate text fields, request the city, month and year in question. Below that, show a series of checkboxes using the same weather
conditions you used in Arrays Ex. #1. (Those values were: rain, sunshine, clouds, hail, sleet, snow, wind.) Set up the form to create
an array from the checked items.

In the response section of your script, create an array using the city, month and year the user entered as values. Print the following
response "In $city in the month of $month $year, you observed the following weather:", where $city, $month and $year are values from the
array you created.

Next, loop through the $weather[] array you received from the user to send back a bulleted list with the user's responses.


*/

?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Exercise 18</title>
 </head>

<body>
<?php 

echo "My Solution.<br/>";

echo "The Form";
echo "</br></br>";
echo "<form action='3-Arrays-Arrays-from-User-Input.php' method='POST'>";
echo "What's the weather been like in the past?<br>";
echo "City: <input type='text' name='city' value='Buenos Aires'></input>";
echo "Month: <input type='text' name='month' value='January'></input>";
echo "Year: <input type='text' name='year' value='2015'></input>\n";
echo "</br>";
echo "Conditions: (Mark at least one)";
ECHO "</br>";
echo "<input type='checkbox' name='weather[]' value='rain'> Rain<br>";
echo "<input type='checkbox' name='weather[]' value='sunshine'> Sunshine<br>";
echo "<input type='checkbox' name='weather[]' value='clouds'> Clouds<br>";
echo "<input type='checkbox' name='weather[]' value='hail'> Hail<br>";
echo "<input type='checkbox' name='weather[]' value='sleet'> Sleet<br>";
echo "<input type='checkbox' name='weather[]' value='snow'> Snow<br>";
echo "<input type='checkbox' name='weather[]' value='wind'> Wind<br>";
echo "<br></br>";
echo "<input type='submit' value='Submit' name='submit'>";
echo "</br>";
echo "</form>"; 

if (isset($_POST['submit'])) {
	$weather = $_POST['weather'];
	$information = array($_POST['city'], $_POST['month'], $_POST['year']);
	echo "</br>";
	echo "In $information[0] in the month of $information[1], $information[2], you observed the following weather:";
	echo "</br>";
	echo "<ul>";
	foreach ($weather as $condition) {
		echo "<li>$condition</li>";
	}
	echo "</ul>";
}


// Official Solution
echo "Official Solution.<br/>";
?>
<h2>How's your weather? </h2>
 
<?php
//If form not submitted, display form.
if (!isset($_POST['submit'])){
?>
<form method="post" action="3-Arrays-Arrays-from-User-Input.php">
<p>Please enter your information:</p>
City: <input type="text" name="city" />
Month: <input type="text" name="month" />
Year: <input type="text" name="year" />
<p>Please choose the kinds of weather you experienced from the list below. 
<br />Choose all that apply. </p>
<input type="checkbox" name="weather[]" value="sunshine" />Sunshine<br />
<input type="checkbox" name="weather[]" value="clouds" />Clouds<br />
<input type="checkbox" name="weather[]" value="rain" />Rain<br />
<input type="checkbox" name="weather[]" value="hail" />Hail<br />
<input type="checkbox" name="weather[]" value="sleet" />Sleet<br />
<input type="checkbox" name="weather[]" value="snow" />Snow<br />
<input type="checkbox" name="weather[]" value="wind" />Wind<br />
<input type="checkbox" name="weather[]" value="cold" />Cold<br />
<input type="checkbox" name="weather[]" value="heat" />Heat<br />
<p /> 
<input type="submit" name="submit" value="Go" />
</form>
 
<?php
//If form submitted, process input.
}else{
//Retrieve the date and location information.
$inputLocal = array(
  $_POST['city'],
  $_POST['month'],
  $_POST['year']
);
echo "In $inputLocal[0] in the month of $inputLocal[1] $inputLocal[2], you
 observed the following weather:<br /> <ul>";
//Save weather array into a variable.
$weather = $_POST['weather'];
//Iterate through the array to show what the user chose.
foreach($weather as $w){
  echo "<li>$w</li>\n";  
}
echo "</ul>";
 
}
?> 
</body>
</html>
