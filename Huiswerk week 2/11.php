<?php
$aantalKoffie = 2;
$koffieIsVers = TRUE;
$laatInDeAvond = FALSE;

if($aantalKoffie < 1) {
    print("Ik neem koffie");
} else {
    if (!$koffieIsVers || $laatInDeAvond || $aantalKoffie > 5) {
        print("Ik neem geen koffie");
    } else {
        print("Ik neem koffie");
    }
}
?>