<?php

/* PHP Arrays Ex. #7: Multi-Dimensional Array

This PHP exercise has two parts. In the first, you will take the large cities array from Arrays Ex. #5 and transform it into a
multi-dimensional array. That will become the data in a table.

Rewrite the large cities array into a multi-dimensional array called $multiCity. The first sub-array will be completely new and
include the labels, City, Country, Continent. (These will become the keys in the second half of this exercise.) Each of the
succeeding sub-arrays should include those three items, one for each of the cities, for a total of 11 sub-arrays.

Here's the content for your array: City, Country, Continent; Tokyo, Japan, Asia; Mexico City, Mexico, North America;
New York City, USA, North America; Mumbai, India, Asia; Seoul, Korea, Asia; Shanghai, China, Asia; Lagos, Nigeria, Africa;
Buenos Aires, Argentina, South America; Cairo, Egypt, Africa; London, UK, Europe.

In the HTML, use the array in a table. The first row should be a header row and contain the entries in the first sub-array.
Call these items without using a loop. For the succeeding rows, use a for loop with a foreach loop nested inside to populate
the table with the remaining contents of the array. Use the count() function so that your for loop will function properly even
if you increment or decrement the array.

Add a simple style sheet in the head section of your HTML. You can take on this challenge yourself or simply cut and paste the
following between the <head></head> tags.

<style type="text/css">
td, th {width: 8em; border: 1px solid black; padding-left: 4px;}
th {text-align:center;}
table {border-collapse: collapse; border: 1px solid black;}
</style>



*/

?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Exercise 21</title>
<style type="text/css">
td, th {width: 8em; border: 1px solid black; padding-left: 4px;}
th {text-align:center;}
table {border-collapse: collapse; border: 1px solid black;}
</style>


 </head>

<body>
<?php 

echo "My Solution.<br/>";

$multiCity = array(
	array("City", "Country", "Continent"),
	array("Tokyo", "Japan", "Asia"),
	array("Mexico City", "Mexico", "North America"),
	array("New York City", "USA", "North America"),
	array("Mumbai", "India", "Asia"),
	array("Seoul", "South Korea", "Asia"),
	array("Shanghai", "China", "Asia"),
	array("Lagos", "Nigeria", "Africa"), 
	array("Buenos Aires", "Argentina", "South America"),
	array("Cairo", "Egypt", "Africa"),
	array("London", "UK", "Europe")
	);
echo "<table>
	<thead>
		<tr>
			<th>" . $multiCity[0][0] . "</th>
			<th>" . $multiCity[0][1] . "</th>
			<th>" . $multiCity[0][2] . "</th>
		</tr>
	</thead>
	<tbody>";
		$count = count($multiCity);
		for ($i=1; $i<=$count-1; $i++) {
			echo "<tr>";
			foreach ($multiCity[$i] as $data) {
				echo "<td>" . $data. "</td>";
			} 
			echo "</tr>";
		}
echo 	"</tbody>
</table>";

// Official Solution
echo "</br>";
echo "Official Solution";
echo "</br>";
?>

<h2>City Table<br /></h2>
 
<table>
<thead>
<tr>
<th>
<?php
echo $multiCity[0][0] ."</th>\n<th>";
echo $multiCity[0][1] ."</th>\n<th>";
echo $multiCity[0][2] ."</th>\n";
?>
</tr>
</thead>
 
<?php
//Find the number of rows in the array. Using this variable in the for loop
//instead of the exact number gives you the option of adding to the array 
//at a later date without changing the for loop. 
$num = count($multiCity); 
//For loops begin with "0" to iterate over an entire array. In this case, 
//you need to begin with the second item in the array and must start with "1".
for ($row=1; $row<$num; $row++){
  echo "<tr>\n";
  foreach ($multiCity[$row] as $value){
    echo "<td>$value</td>\n";
    }
   echo "</tr>\n";  
}
?>
 
</table> 
</body>
</html>
