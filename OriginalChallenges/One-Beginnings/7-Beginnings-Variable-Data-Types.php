<?php

/*PHP Beginnings Ex. #7: Variable Data Types

PHP allows several different types of variables. For this PHP exercise, you will create one variable and assign it different values, then test its type for each value.

Write a script using one variable “$whatsit” to print the following to the browser. Your echo statements may include no words
except “Value is”. In other words, use the function that will output the variable type to get the requested text. Use simple HTML to print each statement on its own line and add a relevant title to your page. Include line breaks in your code to produce clean, readable HTML.

Value is string.
Value is double.
Value is boolean.
Value is integer.
Value is NULL.
*/
?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Exercise 7</title>
 </head>

<body>
<?php 

echo "My Solution. <br/>";

$whatsit = "A phrase";
echo "Value is " . gettype($whatsit) . "<br/>";
$whatsit = 3.9;
echo "Value is " . gettype($whatsit) . "<br/>";
$whatsit = TRUE;
echo "Value is " . gettype($whatsit) . "<br/>";
$whatsit = 28;
echo "Value is " . gettype($whatsit) . "<br/>";
$whatsit = NULL;
echo "Value is " . gettype($whatsit) . "<br/>";

echo "<br/>";
echo "Official Solution. <br/>";

$whatsit = 'George'; 
echo "Value is ".gettype($whatsit).".<br/>\n";   
 
$whatsit = 88.9; 
echo "Value is ".gettype($whatsit).".<br/>\n";   
 
$whatsit = true; 
echo "Value is ".gettype($whatsit).".<br/>\n";   
 
$whatsit = 8; 
echo "Value is ".gettype($whatsit).".<br/>\n";
    
$whatsit = null; 
echo "Value is ".gettype($whatsit).".<br/>\n";   


?> 
</body>
</html>