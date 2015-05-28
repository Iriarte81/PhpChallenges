<?php

/*PHP Beginnings Ex. #5: Variable Content and Destruction

When you are writing scripts, you will often need to see exactly what is inside your variables. 
For this PHP exercise, think of the ways you can do that, then write a script that outputs the following, 
using the echo statement only for line breaks.

string(5) "Harry"
Harry
int(28)
NULL

*/
?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Exercise 5</title>
 </head>

<body>
<?php 

echo "My Solution.<br/>";

$variable1 = "Harry";
$variable2 = "Harry";
$variable3 = 28;
$variable4 = NULL;


var_dump($variable1);
echo "<br/>";
print_r($variable2);
echo "<br/>";
var_dump($variable3);
echo "<br/>";
var_dump($variable4);
echo "<br/>";

echo "<br/>";
echo "Official Solution.<br/>";

$name='Harry'; 
$age=28;   
 
var_dump($name); 
echo "<br/>";   
 
print_r($name); 
echo "<br/>";   
 
var_dump($age); 
echo "<br/>";  
  
$name=null;
//In PHP versions up to 5.3.3, this statement could also have 
//been written: unset($name);, and the next command would work correctly. 
//More recent versions return an undefined variable error 
//for var_dump after the variable is unset.
   
var_dump($name);
//The last two statements would have worked just as well with the $age variable.
 
?> 
</body>
</html>