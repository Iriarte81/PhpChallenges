<?php

/* 
PHP Classes Ex. #1: Select Field Class and Object

In this PHP exercise, you will build the beginnings of a user registration form. To do this, you will create a class for making 
the select field, then use an object derived from the class in the form. You can begin with the script you wrote for Functions 
Ex. #6, since you will be revising the two functions you created there as methods of your class.

First of all, write an array that includes browser types: Firefox, Chrome, Internet Explorer, Safari, Opera, Other.

Then begin to write the class Select. You will need two properties, $name for the name of the select field, and $value, an array to
provide the option values. You will also need four methods in addition to the two methods you will adapt from Functions Ex. #6:
setName, getName, setValue, getValue. Checking to be sure the value is an array belongs in the setValue method, so write that here,
and delete it from from makeSelect if you are using your script from Functions #6.

Now we come to the two functions you wrote to generate the select field for Functions Ex. #6. Change the makeOptions function to
iterate over the array argument's values rather than keys. This will be your fifth method. Then revise the makeSelect function to 
be the sixth method in your class.

Next comes the HTML. Write a user registration form asking for name, username, email, browser. Use text fields to collect the user
data for the first three, then instantiate an object based on your class for the select field. When the user clicks the submit 
button, return the data as confirmation.

If you were creating a registration form to use on the Web, you would want to collect the data in a database. However, using PHP 
with mySQL or other databases is beyond the scope of this website.
*/

?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Exercise 29</title>
 </head>

<body>
<?php 

echo "My Solution.<br/>";

  //Create associative array.
  $browsers=array('Firefox', 'Chrome', 'Safari', 'Opera', 'Internet Explorer', 'Other');
 
class Select {

	private $name;
	private $value;


	public function setName($string) {

		$this->name = $string;
	}

	public function getName() {

		return $this->name;

	}

	public function setValue($array) {

    if (!is_array($array)){
        exit ("Error: value is not an array.");
        //This  could be written: die ("Error: value is not an array.");
     } else {
     	 $this->value = $array;
     }

	}

	public function getValue() {

		return $this->value;
	}


 
  //This function creates the select options.
  	public function makeOptions($value){
     //The options need the key values, as in the original exercise.
     foreach($value as $v){
        echo "<option value=\"$v\">" .ucfirst($v). "</option>\n";
      }
  }
 
  //This function calls the makeOptions function to create the select field.
  	public function makeSelect(){
     //Check to be sure $value is an array. 
     //Begin the HTML for the select field.
     echo "<select name=\"" . $this->getName() . "\">\n";
     //Create options.
     $this->makeOptions($this->getValue());
     echo "</select>" ;
  }
  }
?>
 
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<title>Classes Beginnings of a Form</title>
</head>
 
<body>
<h2>Form<br /></h2>
 
<?php
//If form not submitted, display form.
  if(!isset($_POST['submit'])){
?>
   
<form method="post" action="1-Classes-Select-Field-Class-and-Object.php">

<input type="text" name="name" value="John"/>
<input type="text" name="username" value="John81" />
<input type="text" name="email" value="John@example.com"/>

<p>Please choose a browser:</p>
 
<p />
<?php
 
$object = new Select();
$object->setName('browser');
$object->setValue($browsers);

$object->makeSelect();
 
?>
<p />
<input type="submit" name="submit" value="Go" />
 
</form>
 
<?php
  //If form submitted, process input.
  }else{
  //Nothing here has to change to accommodate the new functions.
  echo $_POST['name'] . " with username: ";
  echo $_POST['username'] . " and email ";
  echo $_POST['email'] . " uses browser: ";
  echo $_POST['browser']; 

  }




// Official Solution
echo "<br/>";
echo "Official Solution.<br/>";

//Create array.
$browsers=array(
    "Firefox",
    "Chrome",
    "Internet Explorer",
    "Safari",
    "Opera",
    "Other"
  );
 
class Select2{
  //Property
  private $name;   //String variable.
  private $value;  //Array variable.
   
  //Methods
  //The string set by this method will be the name of the select field.
  public function setName($name){
     $this->name = $name;
  }
   
  public function getName(){
     return $this->name;
  }
   
  //This method provides the values used for the options
  //in the select field and checks to be sure the value is an array. 
  public function setValue($value){
     if (!is_array($value)){
        die ("Error: value is not an array.");
     }
     $this->value = $value;
   }
   
  public function getValue(){
     return $this->value;
  }
   
  //This method creates the actual select options. It is private, 
  //since there is no need for it outside the operations of the class.
  private function makeOptions($value){
     foreach($value as $v){
        echo "<option value=\"$v\">" .ucfirst($v). "</option>\n";
      }
  }
 
  //This method puts it all together to create the select field.
  public function makeSelect(){
     echo "<select name=\"" .$this->getName(). "\">\n";
     //Create options.
     $this->makeOptions($this->getValue());
     echo "</select>" ;
  }
}//end class
 
?>
 
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<title>Class Select - Browsers</title>
</head>
 
<body>
<h2>User Registration - Browser<br /></h2>
 
<?php
//If form not submitted, display form.
  if(!isset($_POST['submit'])){
?>
   
<form method="post" action="1-Classes-Select-Field-Class-and-Object.php">
<p>Name:<br />
<input type="text" name="name" size="60" />  </p>
<p>Username:<br />
<input type="text" name="username" size="60" /></p>
<p>Email:<br />
<input type="text" name="email" size="60" /></p>
<p>Browser:
 
 
<?php
//Instantiate object.
$browser = new Select2();
//Set properties.
$browser->setName('browser');
$browser->setValue($browsers);
//The object has the data it needs from the preceding commands.
//Tell it to make the select field.
$browser->makeSelect();
?>
</p>
<input type="submit" name="submit" value="Go" />
 
</form>
 
<?php
  //If form submitted, process input.
  }else{
    //Could include code to send data to database here.
    //Retrieve user responses.
    $name=$_POST['name'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    //The following variable has an altered name to avoid confusion.
    $selBrowser=$_POST['browser'];
    //Confirm responses to user.
    echo "The following data has been saved for $name: <br />";
    echo "Username: $username<br />";
    echo "Email: $email<br />";
    echo "Browser: $selBrowser<br />";
   
}
?>

</body>
</html>


