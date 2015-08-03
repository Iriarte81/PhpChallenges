<?php

/*PHP Control Structures Ex. #1: If-Else Statement

In this PHP exercise, you will use a conditional statement to determine what gets printed to the browser.
Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:

It's August, so it's really hot.
Not August, so at least not in the peak of the heat.

Hint: the function to get the current month is 'date('F', time())' for the month's full name.
*/
?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Exercise 8</title>
 </head>

<body>
<?php 

echo "My Solution. <br/>";
echo date('F', time());
echo "<br/>";
if (date('F', time()) == "August") {
echo "It's August, so it's really hot. <br/>";
} else {
echo "Not August, so at least not in the peak of heat. <br/>";
}

echo "<br/>";
echo "Official Solution. <br/>";
$currMonth=date('F', time());
if ($currMonth == 'August'){
  echo "<p>It's August, so it's really hot.</p>";
}else{
  echo "<p>Not August, so at least not in the peak of the heat.</p>";
}
  

?> 
</body>
</html>