<?php 

//get data
require_once('../connecttodatabase.php'); 
mysql_select_db($database_excal, $excal);

//build query
$query = 
  "SELECT 
  packageId, 
  packageTitle, 
  packageDescription, 
  packageGraphic 
  FROM packages ORDER BY packageId ASC";

$rsPackages = mysql_query($query, $excal) or 
  die(mysql_error());
$row_rsPackages = mysql_fetch_assoc($rsPackages);
$totalRows = mysql_num_rows($rsPackages);

// build root XML element
$packages = new SimpleXMLElement("<packages></packages>");

// loop data and build data structure
$i=0;
while ($i < $totalRows) {
  $packageId = mysql_result($rsPackages, $i, 'packageId');
  $packageTitle = htmlentities( mysql_result($rsPackages, $i, 'packageTitle'), ENT_QUOTES, 'UTF-8');
  $packageDescription = htmlentities( mysql_result($rsPackages, $i, 'packageDescription'), ENT_QUOTES, 'UTF-8');
  $packageGraphic = htmlentities( mysql_result($rsPackages, $i, 'packageGraphic'), ENT_QUOTES, 'UTF-8');
  
  $package = $packages->addChild('package');
  $package->addChild('packageId', $packageId);
  $package->addChild('title', $packageTitle);
  $package->addChild('description', $packageDescription);
  $package->addChild('graphic', $packageGraphic);
  
  $i++;
}
mysql_free_result($rsPackages); 

//format for pretty printing
$dom = new DOMDocument('1.0', 'UTF-8');
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
$dom->loadXML($packages->asXML());
 
//Send to browser
header('Content-type: text/xml');
echo $dom->saveXML();
?>
