<?php

//  las primeras lineas de codigo estan comentadas, son para el uso de la aplicacion
// con el formulario en index.php. El script no comentado ejecuta el programa sin
// necesidad del forumlario


/*echo "<pre>"; print_r($_POST) ;  echo "</pre>";
echo $soup1 = $_POST['soup'];
echo <br/>;
echo $c1 = $_POST['quantity'];
echo <br/>;
*/

///////////////////////////////////////////////////////////
//------------APPLICATION LOGIC STARTS HERE-------------///
///////////////////////////////////////////////////////////



// enter data as detailed in assignment, initialize variables

$soup1 = "OIE IIX EXE"; $f1=3; $c1=3; 
$soup2 = "EIOIEIOEIO"; $f2=1; $c2=10;
$soup3 = "EAEAE AIIIA EIOIE AIIIA EAEAE"; $f3=5; $c3=5;
$soup4 = "OX IO EX II OX IE EX"; $f4=7; $c4=2;
$soup5 = "E"; $f5=1; $c5=1;


// initialize counter
$count = 0;


// trim white space from soup variables

$soup1 = str_replace(" ", "", $soup1);
$soup2 = str_replace(" ", "", $soup2);
$soup3 = str_replace(" ", "", $soup3);
$soup4 = str_replace(" ", "", $soup4);
$soup5 = str_replace(" ", "", $soup5);


// create arrays for later use conatining soup variables and column variables

$soupEnsemble = array($soup1, $soup2, $soup3, $soup4, $soup5);
$cEnsemble = array($c1, $c2, $c3, $c4, $c5);

// start with an all encompassing foreach loop to account for every soup

foreach ($soupEnsemble as $individualsoup) {

// create an array with values at which letter "O" is found in each soup string
$needle = "O";
$lastPos = 0;
$positions = array();
while (($lastPos = strpos($individualsoup, $needle, $lastPos))!== false) {
    $positions[] = $lastPos;
    $lastPos = $lastPos + strlen($needle);
}

$values = array();
foreach ($positions as $value) {
    $values[] = $value ."<br />";
}


// check for horizontal (left to right) occurrences of the "OIE" string
foreach ($values as $position) {
    if ((@$individualsoup{$position+1}) == "I") {
      if ((@$individualsoup{$position+2}) == "E") {
        ++$count;
    }
  }
}

// check for horizontal (right to left) occurrences of the "OIE" (i.e. "EIO") string
foreach ($values as $position) {
    if ((@$individualsoup{$position-1}) == "I") {
      if ((@$individualsoup{$position-2}) == "E") {
        ++$count;
    }
  }
}

// run a switch statement for use in the vertical searches of OIE/EIO accounting for
// number of columns in each soup

switch ($individualsoup) {
  case $soup1:
        $c = $c1;
        break;
  case $soup2:
        $c = $c2;
        break;
  case $soup3:
        $c = $c3;
        break;
  case $soup4:
        $c = $c4;
        break;
  case $soup5:
        $c = $c5;
        break;
}

// check for vertical (top to bottom) coincidences and add to counter

foreach ($values as $position) {
    if ((@$individualsoup{$position+$c}) == "I") {
      if ((@$individualsoup{$position+$c*2}) == "E") {
        ++$count;
      }
    }
}

// check for vertical (bottom to top) coincidences and add to counter

foreach ($values as $position) {
    if ((@$individualsoup{$position-$c}) == "I") {
      if ((@$individualsoup{$position-$c*2}) == "E") {
        ++$count;
      }
  }
}

// check for diagonal (top-left to bottom-right) coincidences and add to counter

foreach ($values as $position) {
    if ((@$individualsoup{$position+$c+1}) == "I") {
      if ((@$individualsoup{$position+($c*2)+2}) == "E") {
        ++$count;
    }
  }
}

// check for diagonal (bottom-right to upper-left) coincidences and add to counter

foreach ($values as $position) {
  if (($position-$c) >= 0) {
    if ((@$individualsoup{$position-$c-1}) == "I") {
      if ((@$individualsoup{$position-($c*2)-2}) == "E") {
        ++$count;
      }
    }
  }
}

// check for diagonal (top-right to bottom-left) coincidences and add to counter

foreach ($values as $position) {
  if (($position-$c) >= 0) {
    if ((@$individualsoup{$position+$c-1}) == "I") {
      if ((@$individualsoup{$position+($c*2)-2}) == "E") {
        ++$count;
      }
    }
  }
}
// check for diagonal (bottom-left to top-right) coincidences and add to counter

foreach ($values as $position) {
  if (($position-$c) >= 0) {
    if ((@$individualsoup{$position-$c+1}) == "I") {
      if ((@$individualsoup{$position-($c*2)+2}) == "E") {
        ++$count;
      }
    }
  }
}

// count total occurrences of the count for each particular soup for horizontal and vertical matches
echo "<br/>";
echo $count;
echo "<br/>";
// restart the counter at the end of the all encompassing foreach loop.
$count = 0;

}

?>
