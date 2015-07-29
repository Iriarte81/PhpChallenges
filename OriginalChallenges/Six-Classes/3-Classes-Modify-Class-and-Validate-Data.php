<?php

/* 
PHP Classes Ex. #3: Modify Class and Validate Data

If you completed PHP Classes Ex. #1 and #2, you have now written a working user registration form. 
Time to tweak it and make it better.

First of all, it would be preferable to have the message --Select one-- at the top of each select field. Add a line to the makeSelect() 
method to accomplish this. The value should be No response. You won't need the "None" value at the top of the $browsers array, so delete that.
With this change to class Select, you can see how using a class can simplify your work. One line of code, and all the select fields update.

Your user responses won't be very useful without some basic information, so the next task is to make three of the fields required. 
Above the form, add * Indicates required field. Then add an asterisk to the Name, Username, and Email fields.

Next, add code to validate the data in those three fields. This code will appear in the second half of the script, after you have retrieved 
data from the $_POST[] variable. The function empty() will let you know if there is data in the field. To help the user supply missing 
information, include a back button with the error message. (If you completed Forms Ex. #4, you have already written one of those.)

The email field is a special case. Not only can you check for the presence of data, you can check for an @(at symbol), which would be 
included in any valid email address. So here the data must satify two conditions to be acceptable. You can use the strpos() function to 
confirm the presence of the @ character.


*/

?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Exercise 31</title>
 </head>

<body>
<?php 
echo "My Solution.<br/>";

//Create arrays.
$browsers=array(
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
 
class Select{
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
     echo "<option value=\"No response\">--Select one--</option>\n";
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
<p>* Indicates required field </p>
</br>   
<form method="post" action="3-Classes-Modify-Class-and-Validate-Data.php">
<p>*Name:<br />
<input type="text" name="name" size="60" />  </p>
<p>*Username:<br />
<input type="text" name="username" size="60" /></p>
<p>*Email:<br />
<input type="text" name="email" size="60" /></p>
 
<p><strong>Work Access</strong></p>
<p>Primary Browser: 
 
 
<?php
//Instantiate object.
$browserWork = new Select();
//Set properties.
$browserWork->setName('browserWork');
$browserWork->setValue($browsers);
//The object has the data it needs from the preceding commands.
//Tell it to make the select field.
$browserWork->makeSelect();
//Destroy the object.
unset($browserWork);
 
echo "</p>\n<p>Connection Speed: ";
$speedWork = new Select();
$speedWork->setName('speedWork');
$speedWork->setValue($speeds);
$speedWork->makeSelect();
unset($speedWork);
 
echo "</p>\n<p>Operating System: ";
$osWork = new Select();
$osWork->setName('osWork');
$osWork->setValue($os);
$osWork->makeSelect();
unset($osWork);
 
?>
</p>
<p><strong>Home Access</strong></p>
<p>Primary Browser:
<?php
$browserHome = new Select();
$browserHome->setName('browserHome');
$browserHome->setValue($browsers);
$browserHome->makeSelect();
unset($browserHome);
 
echo "</p>\n<p>Connection Speed: ";
$speedHome = new Select();
$speedHome->setName('speedHome');
$speedHome->setValue($speeds);
$speedHome->makeSelect();
unset($speedHome);
 
echo "</p>\n<p>Operating System: ";
$osHome = new Select();
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
    if ($_POST['name']=='') {
      echo "Please enter your name </br>";
    } else {
    $name=$_POST['name'];
    }
    if ($_POST['username']=='') {
      echo "Please enter your username </br>";
    } else {    
    $username=$_POST['username'];
    }
    if ($_POST['email']=='') {
      echo "Please enter an email address </br>";
    } else {
    $email=$_POST['email'];
    }

    $atCheck = strpos($_POST['email'], '@') === false;
    if (($_POST['email'] !=='') && $atCheck) {
      echo "Please enter a valid email address </br>";
    }

    $browserWork=$_POST['browserWork'];
    $speedWork=$_POST['speedWork'];
    $osWork=$_POST['osWork'];
    $browserHome=$_POST['browserHome'];
    $speedHome=$_POST['speedHome'];
    $osHome=$_POST['osHome'];
    //Confirm responses to user.
    
    if ((($_POST['name'] && $_POST['username'] && $_POST['email']) !=='') && ($atCheck === false)) {
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
    } else {
     echo "Please submit your form again with all required fields </br>";
     echo "<a href='3-Classes-Modify-Class-and-Validate-Data.php'>Back to the form</a>";
    }
}

echo "</br>";
echo "Official Solution.<br/>";

//Create  array.
$browsers=array(
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
  //This method puts it all together to create the select field.
  public function makeSelect(){
     echo "<select name=\"" .$this->getName(). "\">\n";
     //Create options.
     echo "<option value=\"No response\">--Select one--</option>\n";
     $this->makeOptions($this->getValue());
     echo "</select>" ;
  }
}//end class
?>
<h2>User Registration<br /></h2>
<?php
//If form not submitted, display form.
  if(!isset($_POST['submit'])){
?>
* Indicates required field.  
<form method="post" action="3-Classes-Modify-Class-and-Validate-Data.php">
<p>*Name:<br />
<input type="text" name="name" size="60" />  </p>
<p>*Username:<br />
<input type="text" name="username" size="60" /></p>
<p>*Email:<br />
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
    //Check input.
    if (empty($name)){
      die('Error: Please enter your name. <br />
      <input type="submit" name="back" value="Back to form"
      onclick="self.location=\'3-Classes-Modify-Class-and-Validate-Data.php\'" /></body></html> ');
    }
    if (empty($username)){
      die('Error: Please choose a username. <br />
      <input type="submit" name="back" value="Back to form"
      onclick="self.location=\'3-Classes-Modify-Class-and-Validate-Data.php\'" /> </body></html> ');
    }
    $char = strpos($email, '@');
    if (empty($email) || $char === false ){
      die('Error: Please enter a valid email address. <br />
      <input type="submit" name="back" value="Back to form"
      onclick="self.location=\'3-Classes-Modify-Class-and-Validate-Data.php\'" /> </body></html> ');
    }    
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