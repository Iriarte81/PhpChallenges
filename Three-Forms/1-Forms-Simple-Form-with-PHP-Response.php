<?php

/* 
PHP Forms Ex. #1: Simple Form with PHP Response

In the next PHP exercise, you will request input from the user, then move the user's response from
one file to another and do something with it.

Create two separate files. The first will contain a form with one input field asking for the user's
favorite city. Use the post method for the form. Although this file contains no PHP code, on my localhost,
it needs the .php extension to successfully call the second file.

The second file will contain PHP code to process the user's response. (In this case, something very simple.)
After the user clicks the submit button, echo back Your favorite city is $city., where $city is the input from the form.

Hint: the variable that contains the user's input is an array. Arrays will be addressed in future exercises,
but this particular array needs to come into play here. The array variable is $_POST['name'], where 'name' is the
name of your input field. 

*/

?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Exercise 12</title>
 </head>

<body>
<?php 

echo "My Solution.<br/>";

echo "The Form";
?>
<form action="1-Forms-Simple-Form-with-PHP-Response-2.php" method="POST">
First name:<br>
<input type="text" name="city" value="Buenos Aires">
<br></br>
<input type="submit" value="Submit">
</form> 

<?php
// Official Solution
echo "<br/>";
echo "Official Solution.<br/>";
?>

<h2>Favorite City</h2>
 
<form method="post" action="1-Forms-Simple-Form-with-PHP-Response.php">
Please enter your favorite city:  <br />
<input type="text" name="city" />
<p />
<input type="submit" name="submit" value="Go" />
</form>

<h2>Favorite City</h2>
 
<?php
 
//Retrieve string from post submission
$city = $_POST['city'];
echo "Your favorite city is $city.";
 
?>
</body>
</html>
