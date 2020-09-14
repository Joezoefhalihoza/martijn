<?php
print("Geef een multiplier op: \n");
$multiplier = trim(fgets(STDIN));

$gerecht1 = "Pizza";
$prijs1 = 8.5;

$gerecht2 = "Macaroni";
$prijs2 = 5.25;

$gerecht3 = "Lasagna";
$prijs3 = 5.95;

$groot1 = $prijs1 * $multiplier;
$groot2 = $prijs2 * $multiplier;
$groot3 = $prijs3 * $multiplier;

print($gerecht1 . " " . $prijs1 . ", groot " . $groot1 . "\n");
print($gerecht2 . " " . $prijs2 . ", groot " . $groot2 . "\n");
print($gerecht3 . " " . $prijs3 . ", groot " . $groot3 . "\n");
?>