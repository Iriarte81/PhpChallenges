<?php

/* PHP Arrays Ex. #1: Simple Array

Arrays allow you to assign multiple values to one variable. For this PHP exercise, write an array variable of weather conditions
with the following values: rain, sunshine, clouds, hail, sleet, snow, wind. Using the array variable for all the weather conditions,
echo the following statement to the browser:

We've seen all kinds of weather this month. At the beginning of the month, we had snow and wind. Then came sunshine with a few clouds
and some rain. At least we didn't get any hail or sleet.

Don't forget to include a title for your page, both in the header and on the page itself.

*/

?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Exercise 16</title>
 </head>

<body>
<?php 

echo "My Solution.<br/>";
echo "</br>";
$WeatherConditions = array('rain', 'sunshine', 'clouds', 'hail', 'sleet', 'snow', 'wind');

echo "We've seen all kinds of weather this month. At the beginning of the month we had $WeatherConditions[5] and $WeatherConditions[6].
Then came $WeatherConditions[1] with a few $WeatherConditions[2] and some $WeatherConditions[0]. At least we didn't get any $WeatherConditions[3]
or $WeatherConditions[4].</br>";


// Official Solution
echo "<br/>";
echo "Official Solution.<br/>";
?>
<h2>How's the weather?</h2>
 
<?php
//Create array.
$weather=array(
  "rain",
  "sunshine",
  "clouds",
  "hail",
  "sleet",
  "snow",
  "wind"
  );
   
//Use array in a sentence. 
echo "<p>We've seen all kinds of weather this month. At the beginning of the month, ";
echo "we had $weather[5] and $weather[6]. Then came $weather[1] with a few $weather[2] ";
echo "and some $weather[0]. At least we didn't get any $weather[3] or $weather[4].</p>";
?>

</body>
</html>
