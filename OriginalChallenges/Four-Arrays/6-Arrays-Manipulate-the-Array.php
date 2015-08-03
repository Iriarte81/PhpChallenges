<?php

/* PHP Arrays Ex. #6: Manipulate the Array

In this PHP exercise, you will create an array of temperatures. Choose a spring month to have a wider range of temperatures to handle.
We'll use 30 days of the month. The exercise is generic, but feel free to use a specific month in your own script. The answer script
will use the Fahrenheit scale, but again feel free to use Celsius if you prefer.

Create your array of 30 high temperatures, approximating the weather for a spring month, then find the average high temp, the five
warmest high temps and the five coolest high temps. Print your findings to the browser.

Hint: the HTML character entity for the degree sign is &deg;.

Feel free to make up the temps or gather data for your own area. Here's a list of thirty Fahrenheit high temperatures you can use
if you like:
68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 73, 58, 63, 79, 78,
68, 72, 73, 80, 79, 68, 72, 75, 77, 73, 78, 82, 85, 89, 83



*/

?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Exercise 21</title>
 </head>

<body>
<?php 

echo "My Solution.<br/>";
// initalize the array
$aprilTemperatures = array(68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 73, 58, 63, 79, 78,
68, 72, 73, 80, 79, 68, 72, 75, 77, 73, 78, 82, 85, 89, 83);

// create copy of the array for five min temperatures
$aprilTemperatures2 = $aprilTemperatures;


//find the average temperature:
$count = count($aprilTemperatures);
 
$total = 0;
foreach ($aprilTemperatures as $temperature){
  $total += $temperature;
}
 
//Calculate average.
echo "</br> The average temperature is: ";
$averageTemperature = round($total / $count);
echo $averageTemperature . "&deg";


// find the highest temperature:
echo "</br> The highest temperature is: ";
$averageHighTemperature = max($aprilTemperatures);
echo $averageHighTemperature . "&deg";


// find the five warmest temperatures
asort($aprilTemperatures);

$t1 = array_pop($aprilTemperatures);
$t2 = array_pop($aprilTemperatures);
$t3 = array_pop($aprilTemperatures);
$t4 = array_pop($aprilTemperatures);
$t5 = array_pop($aprilTemperatures);


echo "</br> The five warmest temperatures are: ";
$fiveWarmestTemperatures = array($t1, $t2, $t3, $t4, $t5);
print_r($fiveWarmestTemperatures);
foreach ($fiveWarmestTemperatures as $Temperature) {
	echo "</br>" . $Temperature . "&deg";
}


// find the five coolest temperatures
arsort($aprilTemperatures2);
$i = 0;
$fiveCoolestTemperatures = array();
for ( $i = 0; $i <= 5; $i++) {
	$fiveCoolestTemperatures[$i] = array_pop($aprilTemperatures2);
}
echo "</br> The five coolest temperatures are:";
print_r($fiveCoolestTemperatures);
foreach ($fiveCoolestTemperatures as $Temperature) {
	echo "</br>" . $Temperature . "&deg";
}

//}
// $fiveCoolestTemperatures = 

// Official Solution
echo "<br/></br>";
echo "Official Solution.<br/>";
?>
<h2>High Temperatures for Spring Month</h2>
 
<?php
//Create an array of 30 Fahrenheit high temperatures for a spring month.
$highTemps = array(
  68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 73, 58, 63, 79, 78, 
  68, 72, 73, 80, 79, 68, 72, 75, 77, 73, 78, 82, 85, 89, 83
);
 
//Get number of temps.
$count = count($highTemps);
 
//Get a total of all temps.
$total = 0;
foreach ($highTemps as $h){
  $total += $h;
}
 
//Calculate average.
$avg = round($total / $count);
 
//Send data to the browser. &deg; is the ASCII code for the degree sign.
echo "<p>The average high temperature for the month was $avg &deg;F.</p>\n";
 
//Sort the temps and get the top and bottom five. 
//Use rsort to produce a descending sort.
rsort($highTemps);
//Pull out the top 5 temps.
$topTemps = array_slice($highTemps, 0, 5);
echo "<p>The warmest five high temperatures were: <br />\n";
foreach($topTemps as $t){
  echo "$t &deg;F <br/> \n";
}
echo "</p>";
   
//Pull out the bottom five temps.
$lowTemps = array_slice($highTemps, -5, 5);
echo "<p>The coolest five high temperatures were: <br/>\n";
foreach($lowTemps as $l){
  echo "$l &deg;F <br/> \n";
}
echo "</p>";
 
?>
  
</body>
</html>
