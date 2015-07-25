<?php

/* Challenge: Generate a tic tac toe table using a multidimensional array.
 * Next create a script that determines whether there is horizontal, diagonal or vertical occurrences of tic tac toe
 */

// generate a tic tac toe table with a multidimensional array

$tictactoe = [ 0 => array(0,1,0), 1=> array(1,0,0), 2 => array(1,0,0)];

echo "<pre>";
print_r($tictactoe);
echo "<pre/>";

    echo "<table>";
for ( $i = 0; $i<=2; $i++) {
    echo "<tr>";
    echo "<td>" . $tictactoe[$i][0] . "</td>";
    echo "<td>" . $tictactoe[$i][1] . "</td>";
    echo "<td>" . $tictactoe[$i][2] . "</td>";
    echo "</tr>";
}
    echo "</table>";

// verify if there is a winner
for ( $i = 0; $i<=2; $i++) {
    if (($tictactoe[$i][0] == $tictactoe[$i][1]) && ($tictactoe[$i][1] == $tictactoe[$i][2])) {
        echo "Horizontal Tic tac toe! on row " . ($i+1) . " by contestant " . $tictactoe[$i][0] . "</br>";
    }
}
echo "</br>";
for ( $i = 0; $i<=2; $i++) {
    if (($tictactoe[0][$i] == $tictactoe[1][$i]) && ($tictactoe[1][$i] == $tictactoe[2][$i])) {
        echo "Vertical Tic tac toe! on column " . ($i+1) . " by contestant " . $tictactoe[0][$i] . "</br>";
    }
}
echo "</br>";
if (($tictactoe[0][0] == $tictactoe[1][1]) && ($tictactoe[1][1] == $tictactoe[2][2])) {
    echo "Diagonal tac toe! top left to bottom right by contestant " . $tictactoe[0][0] . "</br>";
}
echo "</br>";
if (($tictactoe[2][0] == $tictactoe[1][1]) && ($tictactoe[1][1] == $tictactoe[0][2])) {
    echo "Diagonal tac toe! bottom left to top right by contestant " . $tictactoe[2][0] . "</br>";
}