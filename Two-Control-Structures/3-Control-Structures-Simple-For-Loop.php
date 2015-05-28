<?php

/* PHP Control Structures Ex. #3: Simple For Loop

Loops are very useful in creating lists and tables. In this PHP exercise, you will use a loop to create a list of equations for squares.

Using a for loop, write a script that will send to the browser a list of squares for the numbers 1-12.
Use the format, "1 * 1 = 1", and be sure to include code to print each formula on a different line.
*/
?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Exercise 10</title>
 </head>

<body>
<?php 

echo "My Solution. <br/>";

$num = 1;
echo "\n<ol>";
for ($num = 1; $num <= 12; $num++) {
echo "<li>" . $num . "*" . $num . "=" . $num * $num . "</li>\n";
}
echo "\n</ol>";

echo "<br/>";
echo "Official Solution. <br/>";

for ($x=1; $x<=12; $x++){
  $result = $x * $x;
  echo "$x * $x = $result <br />\n";
}
   
  

?> 
</body>
</html>