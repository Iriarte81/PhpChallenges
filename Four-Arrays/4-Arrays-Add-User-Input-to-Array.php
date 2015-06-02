<?php

/* PHP Arrays Ex. #4: Add User Input to Array

In this PHP exercise, you will create an array, print it to the browser, then ask the user to add to it.

Create an array of modes of transportation, including Automobile, Jet, Ferry, Subway. Print the following statement to the browser:
"Travel takes many forms, whether across town, across the country, or around the world. Here is a list of some common modes of
transportation:" Follow this with an unordered list created by iterating through the array variable you created.

Next, give the user a text box and ask the user to add other modes of transportation to the list, separated by commas. When the user
clicks 'Go', process the input with array functions to send back the original list with the user's additions. Include another
text box with the text "Add more?" and another submit button. When the user clicks this button, the page should reload with the new
additions added to the previously expanded list. Your code should allow the user to add items as many times as they like.


*/

?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Exercise 19</title>
 </head>

<body>

<h2>How Are You Traveling?</h2>
 
<?php
//If form not submitted, display form.  
if (!isset($_POST['submit'])){
$transportation=array("Automobile", "Jet", "Ferry", "Subway");
 
?>
 
<p>Travel takes many forms, whether across town, across the country, or
 around the world. Here is a list of some common modes of transportation:</p>
<ul>
 
<?php
foreach ($transportation as $meansoft){
  echo "<li>$meansoft</li>\n"; 
}
?>
 
</ul>
<form method="post" action="4-Arrays-Add-User-Input-to-Array.php">
<p>Please add your favorite, local, or even imaginary modes of travel 
to the list, separated by commas:</p>
<input type="text" name="added" size="80" />
<p />
 
<?php
//Send current travel array as hidden form data.
foreach ($transportation as $meansoft){
  echo "<input type=\"hidden\" name=\"travel[]\" value=\"$meansoft\" />\n";
}
?>
 
<input type="submit" name="submit" value="Go" />
</form>
 
<?php
//If form submitted, process input.
}else{
//Retrieve established travel array.
$transportation=($_POST['travel']);
//Convert user input string into an array.
$added=explode(',',$_POST['added']);
 
//Add to the established array.
array_splice($transportation, count($transportation), 0, $added);
//This could also be written $travel=array_merge($travel, $added);
 
//Return the new list to the user.
echo "<p>Here is the list with your additions:</p>\n<ul>\n";
foreach($transportation as $meansoft){
  //The trim functions deletes extra spaces the user may have entered.
  echo "<li>".trim($meansoft)."</li>\n";  
}
echo"</ul>";  
 
?>
<p>Add more?</p>
<form method="post" action="4-Arrays-Add-User-Input-to-Array.php">
<input type="text" name="added" size="80" />
<p />
<?php
//Send current travel array as hidden form data.
foreach ($transportation as $meansoft){
  echo "<input type=\"hidden\" name=\"travel[]\" value=\"$meansoft\" />\n";
}
?>
<input type="submit" name="submit" value="Go" />
</form>
<?php
}
?> 
</body>
</html>
