<?php

/* 
PHP Functions Ex. #5: Variable Argument Number

For this PHP exercise, you will again write two versions of your script. Start with the script from Arrays Ex. #3 and write a function
to create form checkbox elements from the arguments supplied. This function should be able to take a variable number of arguments so
that you can create any number of checkboxes calling it only once. Add your function at the beginning of your file before the HTML.
Make sure each item is upper case.

Now rewrite the original form presented to the user with the checkbox function. Make sure the list returned to the user in the second
part of the script is also upper case.

*/

?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Exercise 27</title>
 </head>

<body>
<?php 
echo "My Solution.<br/>";
?>
<h2>How's your weather? </h2>
 
<?php


$conditions = array("sunshine", "clouds", "rain", "hail", "sleet", "snow", "wind", "cold", "heat");


function createCheckboxes($arguments) {

foreach ($arguments as $argument) {

echo "<input type='checkbox' name='weather[]' value=$argument />\"$argument\"<br />";

}
}

//If form not submitted, display form.
if (!isset($_POST['submit'])){
?>
<form method="post" action="5-Functions-Variable-Argument-Number.php">
<p>Please enter your information:</p>
City: <input type="text" name="city" />
Month: <input type="text" name="month" />
Year: <input type="text" name="year" />
<p>Please choose the kinds of weather you experienced from the list below. 
<br />Choose all that apply. </p>
<?php createCheckboxes($conditions); ?>
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
  echo "<li>" . ucwords($w) . "</li>\n";  
}
echo "</ul>";
 
}
 


// Official Solution
echo "<br/>";
echo "Official Solution.<br/>";
echo "</br></br>";

//Define checkbox function.
function ckBox(){
//The function func_get_arg() allows for an undefined number of arguments.
  $args=func_get_args();
/*Now loop through the arguments, being sure to use the upper case 
 string function and to include line breaks for clean HTML source. */
  foreach ($args as $a){
    echo "<input type=\"checkbox\" name=\"weather[]\" value=\"$a\" />" .
    ucwords($a). "<br />\n";
  }
}
?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<title>Variable Number of Array Arguments</title>
</head>
 
<body>
<h2>How's your weather now?</h2>
 
<?php
//If form not submitted, display form.
if (!isset($_POST['submit'])){
?>
<form method="post" action="5-Functions-Variable-Argument-Number.php">
<p>Please enter your information:</p>
City: <input type="text" name="city" />
Month: <input type="text" name="month" />
Year: <input type="text" name="year" />
<p>Please choose the kinds of weather you experienced from the list below.<br />
Choose all that apply. </p>
<!--Use your checkbox function here.-->
<?php
  ckBox('sunshine', 'clouds', 'rain', 'hail', 'sleet', 'snow', 'wind', 
  'cold', 'heat');
?>
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
echo "In $inputLocal[0] in the month of $inputLocal[1] $inputLocal[2], 
you observed the following weather:<br /> <ul>";
//Be sure you included the upper case string function for your list items.
$weather = $_POST['weather'];
foreach($weather as $w){
  echo "<li>" . ucwords($w) . "</li>\n";  
}
echo "</ul>";
}
?>

</body>
</html>