<?php

/*PHP Beginnings Ex. #3: Arithmetic Operators and Variables

PHP includes all the standard arithmetic operators. For this PHP exercise, you will use them along with variables to print 
equations to the browser. In your script, create the following variables:

$x=10;
$y=7;

Write code to print out the following:

10 + 7 = 17
10 - 7 = 3
10 * 7 = 70
10 / 7 = 1.4285714285714
10 % 7 = 3

Use numbers only in the above variable assignments, not in the echo statements. You will need a third variable as well.

Note: this is intended as a simple, beginning exercise, not using arrays or loops. 
Some of the solutions in comments include these structures.
If you don't understand them, just keep learning, and you will.


*/
?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Exercise 3</title>
 </head>

<body>
<?php 

echo "My Solution.<br/>";

$x = 10;
$y = 7;

$sum = $x+$y;
$subtraction = $x-$y;
$multiplication = $x*$y;
$division = $x / $y;
$modulo = $x % $y;

echo "$x + $y = $sum <br/>";
echo "$x - $y = $subtraction <br/>";
echo "$x * $y = $multiplication <br/>";
echo "$x / $y = $division <br/>";
echo "$x % $y = $modulo <br/>";

echo "<br/>";
echo "Official Solution.<br/>";

$x=10; 
$y=7; 
   
$result=$x+$y; 
echo "$x + $y = $result<br />";   
 
$result=$x-$y; 
echo "$x - $y = $result<br />";   
 
$result=$x*$y; 
echo "$x * $y = $result<br />";   
 
$result=$x/$y; 
echo "$x / $y = $result<br />";   
 
$result=$x%$y; 
echo "$x % $y = $result<br />";   


?> 
</body>
</html>