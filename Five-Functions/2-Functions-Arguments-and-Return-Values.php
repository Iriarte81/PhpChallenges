<?php

/* 

PHP Functions Ex. #2: Arguments and Return Values

This PHP exercise has two parts. For the first, you will create a function to accept two arguments, perform a calculation using them,
then return a sentence with the result to the browser. The function will calculate the area of a rectangle, with the two arguments
being width and height. (Reminder: area = width * height.) The sentence to be returned is "A rectangle of length $l and width $w
has an area of $area.", where $l and $w are the arguments and $area is the result.

*/

?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Exercise 23</title>
 </head>

<body>
<?php 

echo "My Solution.<br/>";


function calculate($height, $width) {

$area = $height*$width;

echo "A rectangle of height " . $height . " and width " . $width . " has an area of " . $area;

}

calculate(3,9);

// Official Solution
echo "</br></br>";
echo "Official Solution</br>";

//Define function.
function recArea($l, $w){
  $area = $l * $w;
  echo "A rectangle of length $l and width $w has an area of $area.";
}
 
//Call function.
recArea(2, 4);
?>


</body>
</html>
