<?php

/*PHP Beginnings Ex. #6: Concatenation of Strings

For this PHP exercise, write a script using the following variable:
$around="around";

Single quotes and double quotes don't work the same way in PHP. Using single quotes (' ') 
and the concatenation operator, echo the following to the browser, using the variable you created:
What goes around comes around. 

*/
?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Exercise 6</title>
 </head>

<body>
<?php 

echo "My Solution. <br/>";

$around = "around";

echo 'What goes ' . $around . ' comes ' . $around . '.';

echo "<br/>";
echo "<br/>";

echo "Official Solution. <br/>";
 
$around = "around"; 
echo 'What goes ' . $around . ' comes ' . $around . '.';



?> 
</body>
</html>