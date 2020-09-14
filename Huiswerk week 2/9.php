<?php

$afstand = 99;
$weekabbonnement = FALSE;
$weekend = FALSE;
$abonnement = TRUE;

$tarief = 0.1 * $afstand;

$korting = $tarief * 0.6;

if ($abonnement) {
    if ($weekabbonnement) {
        if (!$weekend) {
            print("Je reist gratis");
        } else {
            print("Je moet €" . $korting . " betalen");
        }
    } else {
        if ($weekend) {
            print("Je reist gratis");
        } else {
            print("Je moet €" . $korting . " betalen");
        }
    }
}else {
    print("Je moet €" . $tarief . " betalen");
}