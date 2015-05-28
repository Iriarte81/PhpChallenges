<?php

/*PPHP Control Structures Ex. #4: Nested For Loops

HTML tables involve a lot of repetitive coding - a perfect place to use for loops. You can do even more if you nest the for loops.
In this PHP exercise, use two for loops, one nested inside another. Create the following multiplication table:
1 	2 	3 	4 	5 	6 	7
2 	4 	6 	8 	10 	12 	14
3 	6 	9 	12 	15 	18 	21
4 	8 	12 	16 	20 	24 	28
5 	10 	15 	20 	25 	30 	35
6 	12 	18 	24 	30 	36 	42
7 	14 	21 	28 	35 	42 	49


Unless you want to try your hand at CSS styling, don't be concerned about the appearance of the table, its borders and text alignment. The point of the exercise it to create the data and the table tags using the for loops.
*/
?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Exercise 11</title>
 </head>

<body>
<?php 

echo "My Solution. <br/>";
echo "<table>";
for ( $num = 1; $num <=7; $num++) {
	echo "<tr>";
		for ($col = 1; $col <=7; $col++) {
			$x = $num * $col;
			echo "<td>" . $x . "</td>";
		}
	echo "<tr>";
}

echo "<table>";
echo "<br/>";

echo "Official Solution. <br/>";
//Generate an HTML table
echo "<table border=\"1\">";
   
//Generate table data showing the numbers 1-7 multiplied by each other, 
//starting with the rows. 
for ($row=1; $row<=7; $row++){
  echo "<tr>\n";
  //Generate each entry in the row to create the columns.
  for ($col=1; $col<=7; $col++){
    //First, do the math.
    $x=$col * $row;
    //Then send the value to the table with the table data tags.   
    echo "<td>$x</td>\n";
  }
  echo "</tr>";
}
echo "</table>";

?> 
</body>
</html>