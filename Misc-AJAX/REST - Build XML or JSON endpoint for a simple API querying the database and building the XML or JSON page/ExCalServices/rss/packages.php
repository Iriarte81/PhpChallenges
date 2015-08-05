<?php 

//get data
require_once('../connecttodatabase.php'); 
mysql_select_db($database_excal, $excal);

$query_rsPackages = 
  "SELECT 
  packageId, 
  packageTitle, 
  packageDescription, 
  packageGraphic 
  FROM packages ORDER BY packageId ASC";
$rsPackages = mysql_query($query_rsPackages, $excal) or 
  die(mysql_error());
$row_rsPackages = mysql_fetch_assoc($rsPackages);
$totalRows = mysql_num_rows($rsPackages);

// build parent element
$rss = new SimpleXMLElement("<rss version='2.0'></rss>");
$channel = $rss->addChild('channel');
$channel->addChild('title', 'Explore California Tour Packages');
$channel->addChild('description', 'Explore Our World Your Way');
$channel->addChild('link', 'http://www.explorecalifornia.org');
$channel->addChild('copyright', 'Copyright (c) 2011 lynda.com');

$i=0;
while ($i < $totalRows) {
  $title = mysql_result($rsPackages, $i, 'packageTitle');
  $esc_title = htmlentities($title, ENT_QUOTES, 'UTF-8');
  $description = mysql_result($rsPackages, $i, 'packageDescription');
  $esc_description = htmlentities($description, ENT_QUOTES, 'UTF-8');
  $id = mysql_result($rsPackages, $i, 'packageId');
  
  $item = $channel->addChild('item');
  $item->addChild('title', $esc_title);
  $item->addChild('link',
   'http://www.explorecalifornia.org/package.php?id=' . $id);
  $item->addChild('description', $esc_description);
  
  $i++;
}

//format for pretty printing
$dom = new DOMDocument('1.0', 'UTF-8');
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
$dom->loadXML($rss->asXML());
 
//Send header to buffer
header('Content-type: text/xml');
echo $dom->saveXML();
?>

<?php mysql_free_result($rsPackages); ?>