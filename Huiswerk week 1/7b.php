<?php
print("Geef twee getallen op: \n");

$getal1 = trim(fgets(STDIN));
$getal2 = trim(fgets(STDIN));

$som = $getal1 + $getal2;



print("Getal 1 = " . $getal1 . ", getal 2 = " . $getal2 . "\n");
print( $getal1 . " + " . $getal2 . " = " . $som . "\n");
?>