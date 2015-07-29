<?php

/*
1. Write a PHP script to get the PHP version and configuration information.

phpinfo();
phpinfo(INFO_CONFIGURATION);
*/




/*
2. Write a PHP script to display the following strings.
Sample String :
'Tomorrow I \'ll learn PHP global variables.'
'This is a bad command : del c:\\*.*'
Expected Output :
Tomorrow I 'll learn PHP global variables.
This is a bad command : del c:\*.* 


echo 'Tomorrow I\'ll learn PHP global variables.';
echo "<br/>";
echo "This is a bad command : del c:\\*.*";

*/




/*
3. $var = 'PHP Tutorial'. Put this variable into the title section, h3 tag and as an anchor text within a HTML document. Go to the editor
Sample Output :

PHP Tutorial

PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.

$var = 'PHP Tutorial';  
?>  
<!DOCTYPE html>  
<html>  
<head>  
  <meta http-equiv="content-type" content="text/html; charset=utf-8">  
  <title><?php echo $var ?></title>
</head>
<body>
	<h3><a href=""><?php echo $var ?></a></h3>
	<p>PHP, an acronym for Hypertext Preprocessor,
	is a widely-used open source general-purpose scripting language.
	It is a cross-platform, HTML embedded server-side scripting language
	and is especially suited for web development.
	</p>
</body>
</html>
<?php
*/


/*
4. Create a simple HTML form and accept the user name and display the name through PHP echo statement. Go to the editor

Sample output of the HTML form :

sample html form


?>
<!DOCTYPE html>  
<html>  
<head>  
  <meta http-equiv="content-type" content="text/html; charset=utf-8">  
  <title>HTML Form</title>
</head>
<body>
	<form action="PhpBasic01.php" method="POST">
		<h3>Please input your name</h3>
		<input type="text" name="input"></input>
		<button type="submit" value="submit">Submit</button>
	</form>

	<?php
	echo "<br/>";
	if (isset($_POST["input"])) {
	echo 'Hello ' . $_POST["input"];
	}
	?>
</body>
</html>
<?php


*/



/*
5. Write a PHP script to get the client IP address.

if (!empty ($_SERVER['REMOTE_ADDR']))
{ echo $_SERVER['REMOTE_ADDR']; } // ip from remote address
else if (!empty($_SERVER['HTTP_CLIENT_IP']))
{ echo $_SERVER['HTTP_CLIENT_IP']; } // ip is from share internet
else { echo $_SERVER['HTTP_X_FORWARDED_FOR']; }// ip is from proxy

*/

/*
6. Write a simple PHP browser detection script. Go to the editor
Sample Output : Your User Agent is :Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.114 Safari/537.36
/*

/*
7. Write a PHP script to get the current file name. Go to the editor
*/

/*
8. Write a PHP script, which will return the following components of the url 'http://www.w3resource.com/php-exercises/php-basic-exercises.php'. Go to the editor

List of components : Scheme, Host, Path
Expected Output :
Scheme : http
Host : www.w3resource.com
Path : /php-exercises/php-basic-exercises.php

*/

/*
9. Write a PHP script, which change the color of first character of a word. Go to the editor
Sample string : PHP Tutorial
Expected Output :
PHP Tutorial
*/

/*
10. Write a PHP script, to check whether the page is called from 'https' or 'http'. Go to the editor
*/

/*
11. Write a PHP script to redirect a user to a different page . Go to the editor
Expected output : Redirect the user to http://www.w3resource.com/
*/

/*
12. Write a simple PHP program to check that emails are valid. Go to the editor
Hints : Use FILTER_VALIDATE_EMAIL filter that validates value as an e-mail address.
Note : The PHP documentation does not saying that FILTER_VALIDATE_EMAIL should pass the RFC5321.
*/

/*
13. Write a e PHP script to display string, values within a table. Go to the editor
Note : Use HTML table elements into echo.
Expected Output :
php table
*/

/*
14. Write a PHP script to display source code of a webpage (e.g. "http://www.example.com/"). Go to the editor
Click me to see the solution
*/

/*
15. Write a PHP script to get last modified information of a file. Go to the editor
Sample filename : php-basic-exercises.php
Sample Output : Last modified Monday, 09th June, 2014, 06:45am
*/

?>