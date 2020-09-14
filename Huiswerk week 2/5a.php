<?php
Print("Hoe oud is Anna?\n");
$leeftijd_anna = trim(fgets(STDIN));

Print("Hoe oud is Bob?\n");
$leeftijd_bob = trim(fgets(STDIN));

if ($leeftijd_anna > $leeftijd_bob) {
    print("Anna is ouder dan Bob");
}