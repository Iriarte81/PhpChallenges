<?php

/* 
PHP Functions Ex. #4: Function for HTML

For this PHP exercise, first create an array called $months. Use the names of the months as keys, and the number of days for each month
as values. For February, use the following for your value: "28 days, if leap year 29".

Next, write a function to create an option element for a form's select field. Make sure each option will be upper case. 
Both the array and the function should precede the HTML for the page.

Once again, you will be requesting user input. Create a form for the user with the request,
"Please choose a month." Next, provide a select field with the months as options,
 looping through the array you created and using the function to create the option elements.

When the user clicks the submit button, return the statement "The month of $month has $number days.",
where $month is the name of the month the user chose, and $number is the number of days. Be sure to include
a different response for February.

*/

?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Exercise 25</title>
 </head>

<body>
<?php 
echo "Because variables have different names but forms point to the same file, sending information via My Solution form
will result in errors in the Official Solution script and vice versa";
echo "</br>";
echo "My Solution.<br/>";

$months = array( "January" => 30, "February" => "28 days, if leap year 29", "March" => 31, "April" => 30, "May" => 31,
	"June" => 30, "July" => 31, "August" => 31, "September" => 30, "October" => 31, "November" => 30, "December" => 31);

print_r($months);

function createOption($option) {
	echo "<option value=\"$option\">$option</option>";

}

echo "Please Choose a Month";
echo "</br></br>";
echo "<form action='4-Functions-Function-for-HTML.php' method='POST'>";
echo "Pick a day:<br>";
echo " <select name='themonths'>";
		foreach ($months as $key => $value) {
			createOption($key);
		}
echo	"</select>";
echo "<br></br>";
echo "<input type='submit' value='Submit' name='submit'>";
echo "</form>"; 


if (isset($_POST['submit'])) {
	$themonth = $_POST['themonths'];
	echo "The month of " . $themonth . " has " . $months[$themonth] . " days.";
}


// Official Solution

//Create array.
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
function option($str){
  echo "<option value=\"$str\">" .ucfirst($str). "</option>\n";
}

?>
<h2>Days in a Month</h2>
 
<?php
//If form not submitted, show form.
if(!isset ($_POST['submit'])){
?>
<form method="post" action="4-Functions-Function-for-HTML.php">
<p>Please choose a month.</p>
<select name="month">
<?php
//Create options using the array and the function.
  foreach ($months as $k => $v){
    option($k);
  }
?>
</select>  
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
?>
</body>
</html>
