<?php
$regen = FALSE;
$meerijden = TRUE;

if($regen && $meerijden) {
    print("Vandaag rijd ik met iemand mee");
} elseif($regen && !$meerijden) {
    print("Vandaag kom ik met de bus");
} else {
    print("Vandaag kom ik met de fiets");
}