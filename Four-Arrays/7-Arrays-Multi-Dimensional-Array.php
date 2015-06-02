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
 </head>

<body>
<?php 

echo "My Solution.<br/>";


// Official Solution
echo "<br/>";
echo "Official Solution.<br/>";


?> 
</body>
</html>
