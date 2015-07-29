<?php

/* 
PHP Forms Ex. #2: Interactive Form with If-Else Statement

One very useful thing you can do with PHP is include the request for user input and the response in the same file,
using conditional statements to tell PHP which one to show. For this PHP exercise, rewrite the two files of the previous
exercise into one file using an if-else conditional statement.

Hint: You'll need some way to tell if the form has been submitted. The function to determine if a variable has been set
and is not null is isset().
*/

?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Exercise 13</title>
 </head>

<body>
<?php 

echo "My Solution.<br/>";

if (isset($_POST['city'])) {

$city = $_POST['city'];

echo "Your favorite city is $city";

} else {

echo "The Form";
echo "</br></br>";
echo "<form action='2-Forms-Interactive-Forms-with-If-Else-Statement.php' method='POST'>";
echo "First name:<br>";
echo "<input type='text' name='city' value='Buenos Aires'>";
echo "<br></br>";
echo "<input type='submit' value='Submit'>";
echo "</form>"; 
}

?>

<?php
// Official Solution
echo "<br/>";
echo "<br/>";
echo "Official Solution.<br/>";

?>
</br>
<h2>Favorite City</h2>
 
<?php
//If form not submitted, display form.
if (!isset($_POST['submit'])){
?>
 
<form method="post" action="2-Forms-Interactive-Forms-with-If-Else-Statement.php">
<!--Make sure you have entered the name you gave the file as the action.-->
Please enter your favorite city:  <br />
<input type="text" name="city" />
<p />
<input type="submit" name="submit" value="Go" />
</form>
 
<?php
//If form submitted, process input.
}else{
 
//Retrieve string from form submission.
$city = $_POST['city'];
echo "Your favorite city is $city.";
 
}
?>
 
</body>
</html>