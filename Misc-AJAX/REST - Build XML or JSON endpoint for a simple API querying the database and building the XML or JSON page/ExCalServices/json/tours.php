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

$arRows = array();
while ($row_rsTours = mysql_fetch_assoc($rsTours)) {
  array_push($arRows, $row_rsTours);
}

header('Content-type: application/json');
echo json_encode($arRows);

?>
