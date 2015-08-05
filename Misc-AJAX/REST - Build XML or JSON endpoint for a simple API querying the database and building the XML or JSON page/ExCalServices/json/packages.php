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

$arRows = array();
while ($row_rsPackages = mysql_fetch_assoc($rsPackages)) {
  array_push($arRows, $row_rsPackages);
}

header('Content-type: application/json');
echo json_encode($arRows);

?>
