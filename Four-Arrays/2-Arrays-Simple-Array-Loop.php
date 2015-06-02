<?php

/* PHP Arrays Ex. #2: Simple Array Loop

For this exercise, you will use a list of ten of the largest cities in the world. (Please note, these are not the ten largest, just a
selection of ten from the largest cities.) Create an array with the following values: Tokyo, Mexico City, New York City, Mumbai, Seoul,
Shanghai, Lagos, Buenos Aires, Cairo, London.

Print these values to the browser separated by commas, using a loop to iterate over the array. Sort the array, then print the values
to the browser in an unordered list, again using a loop.

Add the following cities to the array: Los Angeles, Calcutta, Osaka, Beijing. Sort the array again, and print it once more to the
browser in an unordered list.


*/

?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Exercise 17</title>
 </head>

<body>
<?php 

echo "My Solution.<br/>";

$cities = array('Tokyo', 'Mexico City', 'New York City', 'Mumbai', 'Seoul', 'Shanghai', 'Lagos', 'Buenos Aires', 'Cairo', 'London');

foreach ($cities as $city) {
	if ($city == "London") {
		echo $city . ".";
	} else {
	echo $city . ", ";
	}
}

asort($cities);

echo "<ul>";
foreach ($cities as $city) {
	echo "<li>$city</li>";
}
echo "</ul>";

array_push($cities, 'Los Angeles', 'Calcutta', 'Osaka', 'Beijing');

asort($cities);

echo "<ul>";
foreach ($cities as $city) {
	echo "<li>$city</li>";
}
echo "</ul>";





// Official Solution
echo "<br/>";
echo "Official Solution.<br/>";
?>
<h2>Large Cities<br /></h2>
 
<?php
//Create array.
$cities=array(
  "Tokyo",
  "Mexico City",
  "New York City",
  "Mumbai",
  "Seoul",
  "Shanghai",
  "Lagos",
  "Buenos Aires",
  "Cairo",
  "London"
  );
   
//Print values of array to browser, separated by commas. 
foreach($cities as $c){
  echo "$c, ";
}
 
//Sort array.
sort($cities);
 
//Print array as bulleted list.
echo "\n<ul>\n" ;
foreach($cities as $c){
  echo "<li>$c</li>\n";
}
echo "</ul>" ;
 
//Add four cities to array.
array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing") ;
 
//Sort again, and print bulleted list.
sort($cities);
echo "\n<ul>\n";
foreach($cities as $c){
  echo "<li>$c</li>\n";
}
echo "</ul>";
?>
 
</body>
</html>
