<?php

/* PHP Arrays Ex. #5: Associative Array

In this PHP exercise, you will again use the list of cities in Arrays Exercise #2. Here's the list, this time including countries
as well as cities:

Tokyo, Japan; Mexico City, Mexico; New York City, USA; Mumbai, India; Seoul, Korea; Shanghai, China; Lagos, Nigeria; Buenos Aires,
Argentina; Cairo, Egypt; London, England.

This time, create an associative array, using the countries as keys, the cities as values. Create a form for the user, with the
instructions Please choose a city:

Follow this request with a select field for the 10 cities, with the options created by looping through the array. When the user
clicks the submit button, return the statement $city is in $country., where $city is the value chosen by the user, and $country
is its key.


*/

?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Exercise 20</title>
 </head>

<body>
<?php 

echo "Because the variable names in My Solution and Official Solution are different but they both reference";
echo "the same file, only one Solution will execute correctly each time";
echo "</br>";
echo "My Solution.<br/>";

$assocarray = array( "Japan" => "Tokyo", "Mexico" => "Mexico City", "USA" => "New York City", "India" => "Mumbai",
 "Korea" => "Seoul", "China" => "Shanghai", "Nigeria" => "Lagos", "Argentina" => "Buenos Aires", "Egypt" => "Cairo",
 "England" => "London");

echo "The Form";
echo "</br></br>";
echo "<form action='5-Arrays-Associative-Array.php' method='POST'>";
echo "Please Choose a City:<br>";
echo "<select name='Metropolises'>";
  foreach ($assocarray as $country => $city) {
    echo "<option value='$city'>$city</option>";
   }
echo "<br></br>";
echo "<input type='submit' value='Submit' name='submit'>";
echo "</form>"; 

if (isset($_POST['submit'])) {

  $metropolis = $_POST['Metropolises'];
  $countryaskey = array_search($metropolis, $assocarray);
  echo $metropolis . " is in " . $countryaskey . ".";
}





// Official Solution
echo "<br/>";
echo "Official Solution.<br/>";
?>

<h2>Large Cities Again<br /></h2>
 
<?php
  //Create associative array with countries as keys, cities as values.
  $cities=array(
    "Japan" => "Tokyo",
    "Mexico" => "Mexico City",
    "USA" => "New York City",
    "India" => "Mumbai",
    "Korea" => "Seoul",
    "China" => "Shanghai",
    "Nigeria" => "Lagos",
    "Argentina" => "Buenos Aires",
    "Egypt" => "Cairo",
    "UK" => "London"
  );
  //If form not submitted, display form.
  if(!isset($_POST['submit'])){
?>
   
<form method="post" action="5-Arrays-Associative-Array.php">
<p>Please choose a city:</p>
<select name="city">
 
<?php
  //Use array to create options for select field.
  //Be sure to escape the quotes and include a line feed. 
  foreach($cities as $c){
    echo "<option value=\"$c\">$c</option>\n";
  }
?>
 
</select> <p />
<input type="submit" name="submit" value="Go">
</form>
 
<?php
  //If form submitted, process input.
  }else{
    //Retrieve user response.
    $city=$_POST['city'];
    //Find corresponding key in associative array.
    $country=array_search($city, $cities);
    //Send the data back to the user.
    echo "<p>$city is in $country.</p>" ;
   
  }
?>
</body>
</html>
