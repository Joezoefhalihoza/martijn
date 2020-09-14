<?php
print("Hoe oud is Anna?\n");
$leeftijd_anna = trim(fgets(STDIN));

print("Hoe oud is Bob?\n");
$leeftijd_bob = trim(fgets(STDIN));

if ($leeftijd_anna === $leeftijd_bob) {
    print("Anna en Bob zijn even oud");
} else {
    if ($leeftijd_anna > $leeftijd_bob) {
        print("Anna is ouder dan Bob");
    } else {
        print("Bob is ouder dan Anna");
    }
}