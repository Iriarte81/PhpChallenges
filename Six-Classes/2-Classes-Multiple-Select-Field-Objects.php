<?php

/* 
PHP Classes Ex. #2: Multiple Select Field Objects

In the last PHP exercise, the Select class may have seemed like an awful lot of code to write for a simple select field. 
The real value of classes and objects doesn't become apparent until you have reason to reuse the code. So this time, you will 
expand your user registration form to use several select fields.

Assume that you have good reason to need data about your users' browsing capabilities. Either you want to tune your site, the 
content of your site concerns these issues, or something similar. Using your select class, you can reuse the class code as often 
as you like to create select fields.

To build this new version of the registration form, start with the script you wrote for Classes Ex. #1. Add the value of None as 
the first value in the $browsers array. Write two more arrays: $speeds, including values Unknown, DSL, T1, Cable, Dialup, Other; 
and $os, including Windows, Linux, Macintosh, Other. (Of course, these could be screen resolution or flash version or any other 
relevant capability.)

You want data for how the user browses both at home and work. Above the browser select field, add the subheading Work Access, and 
rename the browser label Primary Browser. (We all know that many people use more than one.) Below that, add labels and select field 
objects for Connection Speed and Operating System. Next, add the subheading Home Access, with three new select fields corresponding 
to the ones you created for Work Access.

Since you are using so many objects in this script, it's a good idea to destroy each one after it has done its work. This will 
free up the memory the object occupied.

When the user hits the submit button, return the user's select field choices in two bulleted lists under the same headings (Work 
Access, Home Access).

*/

?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Exercise 30</title>
 </head>

<body>
<?php 
echo "When submitting My Solution's Form the Official Solution's output will break and viceversa
because variable labels have different names in each of the scripts";
echo "</br>";
echo "My Solution.<br/>";


  //Create associative array.
 $browsers=array('None', 'Firefox', 'Chrome', 'Safari', 'Opera', 'Internet Explorer', 'Other');
 $speeds=array('Unknown', 'DSL', 'T1', 'Cable', 'Dialup', 'Other');
 $os=array('Windows', 'Linux', 'Mac', 'Other');

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
   
<form method="post" action="2-Classes-Multiple-Select-Field-Objects.php">

<input type="text" name="name" value="John"/>
<input type="text" name="username" value="John81" />
<input type="text" name="email" value="John@example.com"/>

<p>Please choose a browser:</p>
 
<p />
<?php

echo "Home Access";


$object = new Select();
$object->setName('primary_browser');
$object->setValue($browsers);
$object->makeSelect();

$object2 = new Select();
$object2->setName('connection_speed');
$object2->setValue($speeds);
$object2->makeSelect();

$object3 = new Select();
$object3->setName('operating_system');
$object3->setValue($os);
$object3->makeSelect();

echo "</br>";
echo "Work Access";

$object4 = new Select();
$object4->setName('work_browser');
$object4->setValue($browsers);
$object4->makeSelect();

$object5 = new Select();
$object5->setName('work_connection_speed');
$object5->setValue($speeds);
$object5->makeSelect();

$object6 = new Select();
$object6->setName('work_operating_system');
$object6->setValue($os);
$object6->makeSelect();
 
?>
<p />
<input type="submit" name="submit" value="Go" />
 
</form>
 
<?php
  //If form submitted, process input.
  }else{
  //Nothing here has to change to accommodate the new functions.
 //print_r($_POST);

  echo "Home Access";
echo "<ul>";	
  echo "<li>" . $_POST['primary_browser'] . "</li>";
  echo "<li>" . $_POST['connection_speed'] . "</li>";
  echo "<li>" . $_POST['operating_system'] . "</li>";
echo "</ul>";
echo "</br>";

  echo "Work Access";
echo "<ul>";	
  echo "<li>" . $_POST['work_browser'] . "</li>";
  echo "<li>" . $_POST['work_connection_speed'] . "</li>";
  echo "<li>" . $_POST['work_operating_system'] . "</li>";
echo "</ul>";
echo "</br>";
  }








// Official Solution
echo "<br/>";
echo "Official Solution.<br/>";

//Create arrays.
$browsers=array(
     "None",
     "Firefox",
     "Chrome",
     "Internet Explorer",
     "Safari",
     "Opera",
     "Other"
  );
   
$speeds=array(
     "Unknown",
     "DSL",
     "T1",
     "Cable",
     "Dialup",
     "Other"
); 
 
$os=array(
     "Windows",
     "Linux",
     "Macintosh",
     "Other"
); 
 
class Select2{
  //Properties
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
<title>Multiple Select Objects</title>
</head>
 
<body>
<h2>User Registration<br /></h2>
 
<?php
//If form not submitted, display form.
  if(!isset($_POST['submit'])){
?>
   
<form method="post" action="2-Classes-Multiple-Select-Field-Objects.php">
<p>Name:<br />
<input type="text" name="name" size="60" />  </p>
<p>Username:<br />
<input type="text" name="username" size="60" /></p>
<p>Email:<br />
<input type="text" name="email" size="60" /></p>
 
<p><strong>Work Access</strong></p>
<p>Primary Browser: 
 
 
<?php
//Instantiate object.
$browserWork = new Select2();
//Set properties.
$browserWork->setName('browserWork');
$browserWork->setValue($browsers);
//The object has the data it needs from the preceding commands.
//Tell it to make the select field.
$browserWork->makeSelect();
//Destroy the object.
unset($browserWork);
 
echo "</p>\n<p>Connection Speed: ";
$speedWork = new Select2();
$speedWork->setName('speedWork');
$speedWork->setValue($speeds);
$speedWork->makeSelect();
unset($speedWork);
 
echo "</p>\n<p>Operating System: ";
$osWork = new Select2();
$osWork->setName('osWork');
$osWork->setValue($os);
$osWork->makeSelect();
unset($osWork);
 
?>
</p>
<p><strong>Home Access</strong></p>
<p>Primary Browser:
<?php
$browserHome = new Select2();
$browserHome->setName('browserHome');
$browserHome->setValue($browsers);
$browserHome->makeSelect();
unset($browserHome);
 
echo "</p>\n<p>Connection Speed: ";
$speedHome = new Select2();
$speedHome->setName('speedHome');
$speedHome->setValue($speeds);
$speedHome->makeSelect();
unset($speedHome);
 
echo "</p>\n<p>Operating System: ";
$osHome = new Select2();
$osHome->setName('osHome');
$osHome->setValue($os);
$osHome->makeSelect();
unset($osHome);
?>
</p>
 
<p />
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
    $browserWork=$_POST['browserWork'];
    $speedWork=$_POST['speedWork'];
    $osWork=$_POST['osWork'];
    $browserHome=$_POST['browserHome'];
    $speedHome=$_POST['speedHome'];
    $osHome=$_POST['osHome'];
    //Confirm responses to user.
    echo "<p>The following data has been saved for $name: </p>\n";
    echo "<p>Username: $username<br />\n";
    echo "Email: $email</p>\n";
    echo "<p>Work Access:</p>\n";
    echo "<ul>\n<li>$browserWork</li>\n";
    echo "<li>$speedWork</li>\n";
    echo "<li>$osWork</li>\n</ul>\n";
    echo "<p>Home Access:</p>\n";
    echo "<ul>\n<li>$browserHome</li>\n";
    echo "<li>$speedHome</li>\n";
    echo "<li>$osHome</li>\n</ul>\n";
}
?>



</body>
</html>


