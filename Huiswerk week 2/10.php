<?php
$iemandJarig = TRUE;
$aantalWekenZonderFeest = 2;
$zomervakantie = FALSE;

if ($iemandJarig || $zomervakantie || $aantalWekenZonderFeest > 2) {
    print("deze week is het feest");
} else {
    print("deze week is er geen feest");
}

?>