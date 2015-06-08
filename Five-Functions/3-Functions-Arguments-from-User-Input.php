<?php

/* PHP Functions Ex. #3: Arguments from User Input

For this PHP exercise, you will rewrite the rectangle area function from #2 once again, this time to accept user input. 
Present a form to the user with the message "Please enter the values of the length and width of your rectangle." Below this, 
supply two text boxes, one for length and one for width. Using your function to process the user supplied values, return the result
 statement from the previous exercise to the user. Reminder: the statement was "A rectangle of length $l and width $w has an area 
 of $area.", where $l and $w are the arguments and $area is the result.

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

echo "My Solution.<br/>";
?>
<form action="3-Functions-Arguments-from-User-Input.php" method="POST">
Please enter the values of lenght and width of your rectangle<br>
Lenght:<br>
<input type="text" name="length" value="2">
<br>
Width:<br>
<input type="text" name="width" value="9">
<br><br>
<input type="submit" name="submit" value="Submit">
</form> 

<?php

function calculate($height, $width) {

$area = $height*$width;

echo "A rectangle of height " . $height . " and width " . $width . " has an area of " . $area;

}

if (isset($_POST['submit'])) {
	calculate($_POST['length'], $_POST['width']);
}


// Official Solution

//Define function.
function recArea($l, $w){
  $area = $l * $w;
  return $area;
}
?>

<h2>Rectangle Area Function</h2>
 
<?php
//If data not submitted, show form.
if(!isset ($_POST['submit'])){
?>
<form method="post" action="3-Functions-Arguments-from-User-Input.php">
<p>Please enter the values of the length and width of your rectangle.</p>
<p>Length:  <input type="text" name="length" size="5" /> 
Width:  <input type="text" name="width" size="5" /></p>
<input type="submit" name="submit" value="Go" />
</form>
<?php
//If data submitted, process and output it back to user.
} else {
//Retrieve user values.
$l = $_POST['length'];
$w = $_POST['width'];
//Use function with user values in statement.
echo "The area of a rectangle with length $l and width $w is " . recArea($l, $w). ".";
 
}
?>
 
</body>
</html>
