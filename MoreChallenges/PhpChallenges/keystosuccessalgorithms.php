<?php
/*Initialize arrays*/
$array = array();
$array2 = array();

/*Set numbers array*/
for ($count = 1; $count < 27; ++$count) {
    $array[] = $count;
}
/*Set alphabet array */
foreach (range('a', 'z') as $alphabet) {
 	$array2[] = $alphabet;
}

/*Set alphabet values */
$array3 = array();
for($count = 0; $count < 26 ; $count++) {
  $$array2[$count] = $array[$count];
}

/*Process the key to success */
echo "So long as";
echo "<br/>";
for($cuenta = 0; $cuenta <26; ++$cuenta) {
  echo $array2[$cuenta] . "=" . $array[$cuenta] . "</br>"; 
}

echo "Then, the weights of the keys to success could be said to be:</br>";
$knowledge = $k + $n + $o + $w + $l + $e + $d + $g + $e;
echo 'knowledge ='. $knowledge . "% </br>";
$hardwork = $h + $a + $r + $d + $w + $o + $r + $k;
echo 'hardwork =' . $hardwork . "% </br>";
$attitude = $a + $t + $t + $i + $t + $u + $d + $e;
echo 'attitude =' . $attitude . "% </br>";

?>