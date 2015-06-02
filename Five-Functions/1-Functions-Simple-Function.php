<?php

/* PHP Functions Ex. #1: Simple Function

Functions in PHP can help automate repetitive tasks and enable you to reuse code with a simple function call. 
For your first function, we'll keep it really simple.

For this PHP exercise, create a function called "hello" that outputs that phrase we all know and love,
"Hello, World!" to the browser. Call the function.

*/

?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Exercise 22</title>
 </head>

<body>
<?php 

echo "My Solution.<br/>";

function hello() {
	echo "Hello World!";
}

hello();

// Official Solution
?>
<h2>Hello Function</h2>
 
<?php
/*//Define function.
function hello(){
  echo "Hello, World!";
}
 
//Call function.
hello();
*/?>



?> 
</body>
</html>
