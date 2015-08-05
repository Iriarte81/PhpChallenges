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

$rsTours = mysql_query($query_rsTours, $excal) or 
  die(mysql_error());
$row_rsTours = mysql_fetch_assoc($rsTours);
$totalRows = mysql_num_rows($rsTours);

// build parent element
$rss = new SimpleXMLElement("<rss version='2.0'></rss>");
$channel = $rss->addChild('channel');
$channel->addChild('title', 'Explore California Tours');
$channel->addChild('description', 'Explore Our World Your Way');
$channel->addChild('link', 'http://www.explorecalifornia.org');
$channel->addChild('copyright', 'Copyright (c) 2011 lynda.com');

$i=0;
while ($i < $totalRows) {
  $title = mysql_result($rsTours, $i, 'name');
  $esc_title = htmlentities($title, ENT_QUOTES, 'UTF-8');
  $description = mysql_result($rsTours, $i, 'description');
  $esc_description = htmlentities($description, ENT_QUOTES, 'UTF-8');
  $id = mysql_result($rsTours, $i, 'tourId');
  $category = mysql_result($rsTours, $i, 'packageTitle');
  
  $item = $channel->addChild('item');
  $item->addChild('title', $esc_title);
  $item->addChild('link',
   'http://www.explorecalifornia.org/tour.php?id=' . $id);
  $item->addChild('description', $esc_description);
  $item->addChild('category', $category);
  
  $i++;
}
mysql_free_result($rsTours); 

//format for pretty printing
$dom = new DOMDocument('1.0', 'UTF-8');
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
$dom->loadXML($rss->asXML());
 
//Send to buffer
header('Content-type: text/xml');
echo $dom->saveXML();
?>
