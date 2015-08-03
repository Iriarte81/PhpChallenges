<?php

/* PHP Beginnings Ex. #2: Create and Use Variables

For your second PHP exercise, echo the following statement to the browser:

“Twinkle, Twinkle little star.”

Next, create two variables, one for the word “Twinkle” and one for the word “star”. 
Echo the statement to the browser, this time substituting the variables for the relevant words.
Change the value of each variable to whatever you like, and echo the statement a third time.
Remember to include code to show your statements on different lines.

*/

?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Exercise 2</title>
 </head>

<body>
<?php 

echo "My Solution.<br/>";

echo "Twinkle, Twinkle little star.<br/>";

$firstWord = "Twinkle";
$secondWord = "star";

echo $firstWord . ", " . strtolower($firstWord) . " little " . $secondWord . ".<br/>";

$firstWord = "Shine";
$secondWord = "celestial body";

echo $firstWord . ", " . strtolower($firstWord) . " little " . $secondWord . ".<br/>";


// Official Solution
echo "<br/>";
echo "Official Solution.<br/>";

echo "Twinkle, Twinkle little star. <br/>"; 
//Note that html tags can be included along with the text to be echoed. 
   
$twinkle="Twinkle"; 
$star="star"; 
   
//This will print out exactly the same as the first echo statement.
echo "$twinkle, $twinkle little $star.<br/>"; 
   
$twinkle="Thunder"; 
$star="elephant"; 
   
/*This one will be different. Exactly what prints will depend 
on what valued you assigned to the variables.*/
echo "$twinkle, $twinkle little $star.";

?> 
</body>
</html>
