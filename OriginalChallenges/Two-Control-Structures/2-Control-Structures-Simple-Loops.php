<?php

/* In this PHP exercise, you will put all the loops through their paces. Write a script that will print the following to the browser:

abc abc abc abc abc abc abc abc abc

xyz xyz xyz xyz xyz xyz xyz xyz xyz

1 2 3 4 5 6 7 8 9

    Item A
    Item B
    Item C
    Item D
    Item E
    Item F

Create the 'abc' row with a while loop, the 'xyz' row with a do-while loop, and the last two sections with for loops. Remember to include HTML and source code line breaks in your output. No arrays allowed in this solution. 

*/
?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Exercise 9</title>
 </head>

<body>
<?php 

echo "My Solution. <br/>";

$counter = 1;
while ( $counter < 10) {
	echo "abc ";
	$counter++;
}
echo "<br/>";

// reset the counter
$counter = 1;
do {
	echo "xyz ";
	$counter++;
} while ( $counter < 10);
echo "<br/>";

//reset the counter
$counter = 1;
for ($counter = 1; $counter < 10; $counter++) {
	echo $counter . " ";
}
echo "<br/>";

for ($letter = "A"; $letter <= "F"; $letter++) {
	echo "Item " . $letter . "<br/>";
}

echo "<br/>";
echo "Official Solution. <br/>";
  
echo "<p>\n";
 
$counter = 1;
while ($counter < 10){
  echo 'abc ';
  $counter++;
}
 
echo "</p>\n";
echo "<p>\n";
 
$counter = 1;
do{
  echo 'xyz ';
  $counter++;
} while ($counter < 10) ;
 
echo "</p>\n";
 
for ($x=1; $x<10; $x++){
  echo "$x ";
}
//The space inside the "" is necessary to separate the numbers.  
 
//Generate ordered list.  
echo "\n<ol>";
for ($x='A'; $x<'G'; $x++){
  echo "<li>Item $x</li>\n";
  }
echo "\n</ol>";
//Note that letters may be used in the for loop in place of numbers.
  
?> 
</body>
</html>