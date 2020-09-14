<?php
print("Hoeveel boterhammen eet Sjors per dag?\n");
$sjors_brood = trim(fgets(STDIN));
print("Hoeveel boterhammen eet Mathilde per dag?\n");
$mathilde_brood = trim(fgets(STDIN));
print("Hoeveel boterhammen eet Sharon per dag?\n");
$sharon_brood = trim(fgets(STDIN));


if(($sjors_brood > 0) && ($mathilde_brood > 0) && ($sharon_brood > 0)) {
    $average = ($sharon_brood + $sjors_brood + $mathilde_brood) / 3;

    print("Gemiddeld worden er " . $average . " boterhammen gegeten.\n");

    print("Sjors eet er " . $sjors_brood . ", ");
    if ($sjors_brood == $average) {
        print("dat is gemiddeld.\n");
    } elseif ($sjors_brood < $average) {
        print("dat is best weinig.\n");
    } elseif ($sjors_brood > $average) {
        print("dat is best veel.\n");
    }

    print("Mathilde eet er " . $mathilde_brood . ", ");
    if ($mathilde_brood == $average) {
        print("dat is gemiddeld.\n");
    } elseif ($mathilde_brood < $average) {
        print("dat is best weinig.\n");
    } elseif ($mathilde_brood > $average) {
        print("dat is best veel.\n");
    }

    print("Sjors eet er " . $sharon_brood . ", ");
    if ($sharon_brood == $average) {
        print("dat is gemiddeld.\n");
    } elseif ($sharon_brood < $average) {
        print("dat is best weinig.\n");
    } elseif ($sharon_brood > $average) {
        print("dat is best veel.\n");
    }
}else {
    print("Je moet wel wat eten!");
}