<?php 

//get data
require_once('../connecttodatabase.php'); 
mysql_select_db($database_excal, $excal);

//build query
$query_rsTours = 
  "SELECT
  tourId, 
  tours.packageId, 
  packageTitle, 
  name, blurb, description, price, difficulty, length, graphic, region
  FROM tours JOIN packages ON tours.packageId = packages.packageId ";

if (isset($_GET['packageid']))
  $packageId = $_GET['packageid'];
else if (isset($_POST['packageid']))
  $packageId = $_POST['packageid'];

if (isset($packageId))
  $query_rsTours .= " WHERE tours.packageId = " . $packageId;

$query_rsTours .= " ORDER BY name";

//execute query
$rsTours = mysql_query($query_rsTours, $excal) or 
  die(mysql_error());
$row_rsTours = mysql_fetch_assoc($rsTours);
$totalRows = mysql_num_rows($rsTours);

// build root XML element
$tours = new SimpleXMLElement("<tours></tours>");

// loop data and build data structure
$i=0;
while ($i < $totalRows) {
  $tourId = mysql_result($rsTours, $i, 'tourId');
  $tourTitle = htmlentities( mysql_result($rsTours, $i, 'name'), ENT_QUOTES, 'UTF-8');
  $packageId = mysql_result($rsTours, $i, 'packageId');
  $packageTitle = htmlentities( mysql_result($rsTours, $i, 'packageTitle'), ENT_QUOTES, 'UTF-8');
  $description = htmlentities( mysql_result($rsTours, $i, 'description'), ENT_QUOTES, 'UTF-8');
  $price = mysql_result($rsTours, $i, 'price');
  $difficulty = mysql_result($rsTours, $i, 'difficulty');
  $length = mysql_result($rsTours, $i, 'length');
  $image = mysql_result($rsTours, $i, 'graphic');
  
  $tour = $tours->addChild('tour');
  $tour->addChild('tourId', $tourId);
  $tour->addChild('tourTitle', $tourTitle);
  $tour->addChild('packageId', $packageId);
  $tour->addChild('packageTitle', $packageTitle);
  $tour->addChild('description', $description);
  $tour->addChild('price', $price);
  $tour->addChild('difficulty', $difficulty);
  $tour->addChild('length', $length);
  $tour->addChild('image', $image);
  $tour->addChild('link',
   'http://www.explorecalifornia.org/tour.php?id=' . $tourId);
  
  $i++;
}
mysql_free_result($rsTours); 

//format for pretty printing
$dom = new DOMDocument('1.0', 'UTF-8');
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
$dom->loadXML($tours->asXML());
 
//Send to browser
header('Content-type: text/xml');
echo $dom->saveXML();
?>
