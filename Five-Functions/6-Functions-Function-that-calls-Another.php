<?php

/* PHP Functions Ex. #6: Function That Calls Another

For this PHP exercise, pull up your script from Functions Ex. #4. The days of the month array is fine as it is. Rewrite the "option" 
function as "makeOptions", such that it includes all the work of creating the option. It will need to take an array as an argument
and iterate over the array key values to produce the options.

Write a second function, "makeSelect", to create the entire select field. This function should call the "makeOptions" function to
produce the options. Give the function an error checking action to assure that the variable used for options is actually an array.

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

$months=array(
  'January'=>31,
  'February'=>'28 days, if leap year 29',
  'March'=>31,
  'April'=>30,
  'May'=>31,
  'June'=>30,
  'July'=>31,
  'August'=>31,
  'September'=>30,
  'October'=>31,
  'November'=>30,
  'December'=>31
);
 
//Define function. Use built in string function to make each option upper case.
//Don't forget to escape the quotes in your HTML.
function makeOptionsJ($array){
	foreach ($array as $key => $element) {
  echo "<option value=\"$key\">" .ucfirst($key). "</option>\n";
}
}

function makeSelectJ($originalarray) {
if (is_array($originalarray)) {
echo "<select name=\"month\">";
makeOptionsJ($originalarray);
echo "</select>"; 
} else {
	echo "Original Array is not an Array";
}
}

?>
<h2>Days in a Month</h2>
 
<?php
//If form not submitted, show form.
if(!isset ($_POST['submit'])){
?>
<form method="post" action="6-Functions-Function-that-calls-Another.php">
<p>Please choose a month.</p>
<?php makeSelectJ($months); ?>
<p />
<input type="submit" name="submit" value="Go" />
</form>
<?php
//If form submitted, respond to user.
} else {
//Retrieve user input.
  $month = $_POST['month'];
//Allow for February using a conditional statement.  
  if ($month == 'February'){
    echo "The month of February has " . $months['February'] . ".";
  }else{
    echo "The month of $month has $months[$month] days.";
  }
}


// Official Solution

  //Create associative array.
  $months=array(
    'January'=>31,
    'February'=>'28 days, if leap year 29',
    'March'=>31,
    'April'=>30,
    'May'=>31,
    'June'=>30,
    'July'=>31,
    'August'=>31,
    'September'=>30,
    'October'=>31,
    'November'=>30,
    'December'=>31
  );
 
  //This function creates the select options.
  function makeOptions($value){
     //The options need the key values, as in the original exercise.
     foreach($value as $k => $v){
        echo "<option value=\"$k\">" .ucfirst($k). "</option>\n";
      }
  }
 
  //This function calls the makeOptions function to create the select field.
  function makeSelect($name, $value){
     //Check to be sure $value is an array. 
     if (!is_array($value)){
        exit ("Error: value is not an array.");
        //This  could be written: die ("Error: value is not an array.");
     }
     //Begin the HTML for the select field.
     echo "<select name=\"$name\">\n";
     //Create options.
     makeOptions($value);
     echo "</select>" ;
  }
?>
 
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<title>Function That Calls Another</title>
</head>
 
<body>
<h2>Days in a Month Again<br /></h2>
 
<?php
//If form not submitted, display form.
  if(!isset($_POST['submit'])){
?>
   
<form method="post" action="6-Functions-Function-that-calls-Another.php">
<p>Please choose a month:</p>
 
<p />
<?php
 
makeSelect('month', $months);
 
?>
<p />
<input type="submit" name="submit" value="Go" />
 
</form>
 
<?php
  //If form submitted, process input.
  }else{
  //Nothing here has to change to accommodate the new functions.
  $month = $_POST['month'];
   
  if ($month == 'February'){
    echo "The month of February has " . $months['February'] . ".";
  }else{
    echo "The month of $month has $months[$month] days.";
  }
   
  }
?>


</body>
</html>